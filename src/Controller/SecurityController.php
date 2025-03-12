<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use AuthenticationUtils as GlobalAuthenticationUtils;
use Symfony\Component\Security\Http\Event\LogoutEvent;

class SecurityController extends AbstractController
{
     
    #[Route('/login', name: 'lego_store_login')]
    public function login(AuthenticationUtils $authentication): Response
    {     
        $error = $authentication->getLastAuthenticationError();
        $lastUsername = $authentication->getLastUsername();
        return $this->render('login.html.twig', [
            'controller_name' => 'LoginController',
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }
    #[Route('/logout', name: 'lego_store_logout')]
    public function logout(): Response
    {     
        // 
    }
}