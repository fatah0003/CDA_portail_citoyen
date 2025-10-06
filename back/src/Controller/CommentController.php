<?php

namespace App\Controller;

use App\Document\Comment;
use App\Entity\User;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/comment/add', name: 'add_comment', methods: ['POST'])]
    public function addComment(Request $request, DocumentManager $dm): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour commenter.');
            return $this->redirectToRoute('app_login');
        }

        $content = $request->request->get('content');
        $proposalId = $request->request->get('proposalId');

        $comment = new Comment();
        $comment->setContent($content);
        $comment->setUserId((string) $user->getId());
        $comment->setProposalId((string) $proposalId);

        $dm->persist($comment);
        $dm->flush();

        $this->addFlash('success', 'Commentaire ajouté avec succès !');
        return $this->redirectToRoute('app_proposition_show', ['id' => $proposalId]);
    }

    #[Route('/comment/{id}/edit', name: 'edit_comment', methods: ['GET', 'POST'])]
    public function editComment(Comment $comment, Request $request, DocumentManager $dm): Response
    {
        $user = $this->getUser();
        if (!$user || $comment->getUserId() !== (string) $user->getId()) {
            $this->addFlash('error', 'Vous n’êtes pas autorisé à modifier ce commentaire.');
            return $this->redirectToRoute('app_proposition_show', ['id' => $comment->getProposalId()]);
        }

        if ($request->isMethod('POST')) {
            $newContent = $request->request->get('content');
            $comment->setContent($newContent);
            $dm->flush();

            $this->addFlash('success', 'Commentaire modifié avec succès !');
            return $this->redirectToRoute('app_proposition_show', ['id' => $comment->getProposalId()]);
        }

        // Affiche un mini formulaire pour éditer le commentaire
        return $this->render('comment/edit.html.twig', [
            'comment' => $comment,
        ]);
    }

    #[Route('/comment/{id}/delete', name: 'delete_comment', methods: ['POST'])]
    public function deleteComment(Comment $comment, Request $request, DocumentManager $dm): Response
    {
        $user = $this->getUser();
        if (!$user || $comment->getUserId() !== (string) $user->getId()) {
            $this->addFlash('error', 'Vous n’êtes pas autorisé à supprimer ce commentaire.');
            return $this->redirectToRoute('app_proposition_show', ['id' => $comment->getProposalId()]);
        }

        // Vérifie le CSRF token
        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('delete_comment' . $comment->getId(), $token)) {
            $this->addFlash('error', 'Token de sécurité invalide.');
            return $this->redirectToRoute('app_proposition_show', ['id' => $comment->getProposalId()]);
        }

        $proposalId = $comment->getProposalId();
        $dm->remove($comment);
        $dm->flush();

        $this->addFlash('success', 'Commentaire supprimé avec succès !');
        return $this->redirectToRoute('app_proposition_show', ['id' => $proposalId]);
    }
}
