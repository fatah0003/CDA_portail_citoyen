<?php

namespace App\Controller;

use App\Document\Comment;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/test-comment', name: 'test_comment')]
    public function test(DocumentManager $dm): Response
    {
        $comment = new Comment();
        $comment->setContent('Mon premier commentaire')
            ->setUserId('user123')
            ->setProposalId('proposal456');

        $dm->persist($comment);
        $dm->flush();


        return new Response('Commentaire ajouté avec l’ID : '.$comment->getId());
    }
}
