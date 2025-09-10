<?php

namespace App\Controller;

use App\Entity\Favorite;
use App\Entity\Proposition;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class FavoriteController extends AbstractController
{
    #[Route('/proposition/{id}/favori', name: 'app_favorite_toggle', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function toggleFavorite(
        Proposition $proposition,
        EntityManagerInterface $em,
        Security $security,
        Request $request
    ): Response {
        $user = $security->getUser();

        // Recherche s’il existe déjà un favori
        $existing = $em->getRepository(Favorite::class)->findOneBy([
            'user' => $user,
            'proposition' => $proposition,
        ]);

        if ($existing) {
            $em->remove($existing);
        } else {
            $favorite = new Favorite();
            $favorite->setUser($user);
            $favorite->setProposition($proposition);
            $em->persist($favorite);
        }

        $em->flush();

        // Redirige vers la page précédente, ou vers la liste si absent
        $referer = $request->headers->get('referer');
        if ($referer) {
            return $this->redirect($referer);
        }

        return $this->redirectToRoute('app_proposition_index');
    }
}
