<?php

namespace App\Controller\Admin;

use App\Entity\Activite;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Security\Core\User\UserInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="dashboard_itw")
     */
    public function index(): Response
    {
        return $this->render('bundles/EasyAdminBundle/welcome.html.twig', []);
        // return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ITwebson')
            ;

    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Visit public website', 'fa fa-globe', '/')
            ->setLinkTarget('_blank');
        yield    MenuItem::section();
        
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Activités');
        yield MenuItem::linkToCrud('Nos Activités', 'fa fa-cubes', Activite::class);
        yield MenuItem::linkToCrud('Ajouter une Activité', 'fa fa-add', Activite::class)->setAction('new');

        yield MenuItem::section('Utilisateurs');
        yield MenuItem::linkToCrud('Liste Administrateur', 'fa fa-user-circle-o', User::class);
    }

    // public function configureUserMenu(UserInterface $user): UserMenu
    // {
    //     return parent::configureUserMenu($user)
    //         ->setGravatarEmail($user->getUsername())
    //         ;
    // }

}
