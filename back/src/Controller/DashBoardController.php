<?php

namespace App\Controller;

use App\Form\InfosUserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashBoardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(): Response
    {
        return $this->render('dash_board/index.html.twig', [
            'defaultSection' => 'welcome',
        ]);
    }

    #[Route('/dashboard/edit-infos', name: 'dashboard_edit_infos')]
    public function editInfos(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(InfosUserType::class, $user->getInfosUser());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Vos informations ont bien été mises à jour !');
            return $this->redirectToRoute('dashboard');
        }

        return $this->render('dash_board/infos.html.twig', [
            'form' => $form,
        ]);
    }



    // --------------------------
    // Route pour charger dynamiquement une section
    #[Route('/dashboard/section/{section}', name: 'dashboard_section')]
    public function section(string $section): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(InfosUserType::class, $user->getInfosUser());

        // On charge le template correspondant à la section
        return $this->render("dash_board/{$section}.html.twig", [
            'form' => $form,
        ]);
    }
}
