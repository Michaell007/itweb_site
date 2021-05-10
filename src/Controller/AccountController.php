<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AccountController extends AbstractController
{

    /**
     * @Route("/login", name="account_login")
     */
    public function login(AuthenticationUtils $utils): Response
    {
        
        $error = $utils->getLastAuthenticationError();

        return $this->render('administration/account/login.html.twig', [
            'hasError' => $error !== null,
        ]);
    }

    /**
     * @Route("/logout", name="account_logout")
     */
    public function logout() {}

}
