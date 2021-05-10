<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ItSolutionsController extends AbstractController
{
    /**
     * @Route("/it/solutions", name="it_solutions")
     */
    public function index(): Response
    {
        return $this->render('front-end/it_solutions/solution.html.twig', [
            'controller_name' => 'ItSolutionsController',
        ]);
    }
}
