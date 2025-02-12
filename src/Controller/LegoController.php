<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LegoRepository;

class LegoController extends AbstractController
{
    // Exercice 4 - Récupérer à nouveau tous les legos

    #[Route('/', name: 'home') ]
    public function home(LegoRepository $legoService): Response
        {   
            $lego = $legoService->findAll();
            $responses = [];
            foreach ($lego as $item) {
                $responses[] = $this->render('lego.html.twig', [
                    'lego' => $item
                ])->getContent();
            }
            return new Response(implode('', $responses));
        }

    // #[Route('/{category}', name: 'filtered_by_category', requirements: ['category' => 'creator|star_wars|creator_expert'])]
    // public function filtered_by_category(LegoRepository $legoService, $category): Response
    //     {   
    //         if ($category == "creator") {
    //             $category = "Creator";
    //         } elseif ($category == "star_wars") {
    //             $category = "Star Wars";
    //         } elseif ($category == "creator_expert") {
    //             $category = "Creator Expert";
    //         }
    //         $lego = $legoService->findAllByCollection($category);
    //         $responses = [];
    //         foreach ($lego as $item) {
    //             $responses[] = $this->render('lego.html.twig', [
    //                 'lego' => $item
    //             ])->getContent();
    //         }   
    //         return new Response(implode('', $responses));
    //     }
}   

// php bin/console debug:route affiche la liste des fonctions et de leurs routes respectives