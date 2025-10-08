<?php

namespace App\Controller;

use App\Entity\Proposition;
use App\Form\PropositionForm;
use App\Repository\PropositionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/proposition')]
final class PropositionController extends AbstractController
{
    #[Route(name: 'app_proposition_index', methods: ['GET'])]
    public function index(PropositionRepository $propositionRepository): Response
    {
        return $this->render('proposition/index.html.twig', [
            'propositions' => $propositionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_proposition_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $proposition = new Proposition();
        $form = $this->createForm(PropositionForm::class, $proposition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Lier la proposition à l'utilisateur courant
            $proposition->setUser($this->getUser());

            // Lier correctement chaque fichier à la proposition
            foreach ($proposition->getFiles() as $file) {
                if ($file->getFile() === null) {
                    $proposition->removeFile($file);
                } else {
                    $file->setProposition($proposition);
                    $file->setUpdatedAt(new \DateTimeImmutable());
                }
            }

            $em->persist($proposition);
            $em->flush();

            $this->addFlash('success', 'Proposition créée avec succès !');
            return $this->redirectToRoute('app_proposition_index');
        }

        return $this->render('proposition/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_proposition_show', methods: ['GET'])]
    public function show(Proposition $proposition): Response
    {
        return $this->render('proposition/show.html.twig', [
            'proposition' => $proposition,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_proposition_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Proposition $proposition, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PropositionForm::class, $proposition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Nettoyer les fichiers vides
            foreach ($proposition->getFiles() as $file) {
                if ($file->getFile() === null) {
                    $proposition->removeFile($file);
                } else {
                    $file->setProposition($proposition);
                    $file->setUpdatedAt(new \DateTimeImmutable());
                }
            }

            $entityManager->flush();

            $this->addFlash('success', 'Proposition modifiée avec succès !');
            return $this->redirectToRoute('app_proposition_index');
        }

        return $this->render('proposition/edit.html.twig', [
            'proposition' => $proposition,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_proposition_delete', methods: ['POST'])]
    public function delete(Request $request, Proposition $proposition, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $proposition->getId(), $request->request->get('_token'))) {
            $entityManager->remove($proposition);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_proposition_index');
    }
}
