<?php

namespace App\Controller\Admin;

use App\Entity\Activite;
use App\Entity\Compagnie;
use App\Entity\Entreprise;
use App\Entity\PageAbout;
use App\Entity\PageAccueil;
use App\Entity\Recrutement;
use App\Entity\SectionOne;
use App\Entity\SectionTwo;
use App\Entity\Service;
use App\Entity\Slide;
use App\Entity\User;
use App\Entity\Vision;
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
        yield MenuItem::section();

        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::section('ENTREPRISE');
        yield MenuItem::linkToCrud('Informations', 'fa fa-pencil-square-o', Compagnie::class);

        yield MenuItem::section('SITE WEB');
        yield MenuItem::subMenu('PAGE ACCUEIL', 'fa fa-home')->setSubItems([
            MenuItem::linkToCrud('Mes Slides', 'fa fa-pencil-square-o', Slide::class),
            MenuItem::linkToCrud('Ajouter une Slide', 'fa fa-pener', Slide::class)->setAction('new'),
            MenuItem::linkToCrud('Nos Activités', 'fa fa-cubes', Activite::class),
            MenuItem::linkToCrud('Ajouter une Activité', 'fa fa-add', Activite::class)->setAction('new'),
            MenuItem::linkToCrud('Section', 'fa fa-pencil-square', SectionOne::class),
            MenuItem::linkToCrud('Ajouter une Section', 'fa fa-pener', SectionOne::class)->setAction('new'),
        ]);

        yield MenuItem::subMenu('PAGE ABOUT', 'fa fa-home')->setSubItems([
            MenuItem::linkToCrud('Presentation', 'fa fa-pencil-square-o', PageAbout::class),
            MenuItem::linkToCrud('Mes visions', 'fa fa-pencil-square-o', Vision::class),
        ]);

        yield MenuItem::subMenu('PAGE SERVICE', 'fa fa-home')->setSubItems([
            MenuItem::linkToCrud('Service', 'fa fa-pencil-square-o', Service::class),
        ]);

        yield MenuItem::subMenu('PAGE RECRUTEMENT', 'fa fa-home')->setSubItems([
            MenuItem::linkToCrud('Recrutement', 'fa fa-pencil-square-o', Recrutement::class),
        ]);

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
