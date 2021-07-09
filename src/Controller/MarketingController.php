<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarketingController extends AbstractController
{
    /**
     * @Route("/marketing0905huhry48854fyetytreybcrueyrue3553hfhf", name="marketing")
     */
    public function index(): Response
    {
        return $this->render('front-end/marketing/marketing.html.twig', [
            'controller_name' => 'MarketingController',
        ]);
    }
}
