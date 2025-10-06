<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Entity\Proposition;
use App\Entity\User;
use App\Document\Comment;
use App\Form\PropositionForm;
use App\Repository\PropositionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/proposition')]
class PropositionController extends AbstractController
{
    #[Route(name: 'app_proposition_index', methods: ['GET'])]
    public function index(PropositionRepository $propositionRepository): Response
    {
        return $this->render('proposition/index.html.twig', [
            'propositions' => $propositionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_proposition_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $proposition = new Proposition();
        $form = $this->createForm(PropositionForm::class, $proposition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proposition->setUser($this->getUser());
            $entityManager->persist($proposition);
            $entityManager->flush();

            return $this->redirectToRoute('app_proposition_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('proposition/new.html.twig', [
            'proposition' => $proposition,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proposition_show', methods: ['GET'])]
    public function show(Proposition $proposition, DocumentManager $dm, UserRepository $userRepository): Response
    {
        // Récupère les commentaires MongoDB pour cette proposition
        $comments = $dm->getRepository(Comment::class)->findBy([
            'proposalId' => (string)$proposition->getId()
        ]);

        $commentsWithUser = [];
        foreach ($comments as $comment) {
            $user = $userRepository->find($comment->getUserId()); // récupère l'utilisateur MySQL
            $commentsWithUser[] = [
                'id' => $comment->getId(),
                'content' => $comment->getContent(),
                'userId' => $comment->getUserId(),
                'userName' => $user ? $user->getEmail() : 'Utilisateur inconnu', // <- juste l'email
            ];
        }

        return $this->render('proposition/show.html.twig', [
            'proposition' => $proposition,
            'comments' => $commentsWithUser,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_proposition_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Proposition $proposition, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PropositionForm::class, $proposition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_proposition_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('proposition/edit.html.twig', [
            'proposition' => $proposition,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proposition_delete', methods: ['POST'])]
    public function delete(Request $request, Proposition $proposition, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$proposition->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($proposition);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_proposition_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/api/list', name: 'api_proposition_list', methods: ['GET'])]
    public function apiList(PropositionRepository $propositionRepository): Response
    {
        $propositions = $propositionRepository->findAll();

        $data = [];
        foreach ($propositions as $proposition) {
            $data[] = [
                'id' => $proposition->getId(),
                'titre' => $proposition->getTitle(),
                'description' => $proposition->getDescription(),
                'createdAt' => $proposition->getCreatedAt()?->format('Y-m-d H:i:s'),
                'user' => $proposition->getUser()?->getEmail(),
            ];
        }

        return $this->json($data);
    }
}

