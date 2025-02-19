<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LegoRepository;
use App\Entity\LegoCollection;
use App\Repository\LegoCollectionRepository;

class LegoController extends AbstractController
{

    #[Route('/', name: 'home') ]
    public function home(LegoRepository $legoService): Response
    {   
        $legos = $legoService->findAll();
        return $this->render('lego.html.twig', [
            'legos' => $legos
        ]);
    }
    #[Route('/test/{id}', 'test')]
    public function test(LegoCollection $collection): Response
    {
        dd($collection);
        foreach ($collection->getLegos() as $lego) {
            return $this->render('lego.html.twig', [
                'legos' => $legos
            ]);
        }
    }


    // #[Route('/category/{category}', name: 'filtered_by_category')]
    // public function filtered_by_category(LegoRepository $legoService, string $category): Response
    // {   
    //     $lego = $legoService->findAllByCollection($category);
    //     $responses = [];
    //     foreach ($lego as $item) {
    //         $responses[] = $this->render('lego.html.twig', [
    //             'lego' => $item
    //         ])->getContent();
    //     }   
    //     return new Response(implode('', $responses));
    // }
}   

// php bin/console debug:route affiche la liste des fonctions et de leurs routes respectives