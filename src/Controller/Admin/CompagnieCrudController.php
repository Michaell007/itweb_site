<?php

namespace App\Controller\Admin;

use App\Entity\Compagnie;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CompagnieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Compagnie::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id', 'Identifiant')->onlyOnIndex();
        yield TextField::new('slogan')
            ->setTemplatePath('bundles\EasyAdminBundle\personnels\field_custom_titre.html.twig')
            ->setColumns('col-sm-12 col-md-8 col-md-8');
        yield TextField::new('lieu')->setColumns(8);
        yield TextField::new('email')->setColumns(6);
        yield TextField::new('email2')->setColumns(6);
        if (in_array($pageName, [Crud::PAGE_NEW, Crud::PAGE_EDIT])) {
            yield ImageField::new('logo')
                ->setUploadDir('/public/images/')
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
                ->setColumns('col-sm-12 col-md-6 col-md-6');
            yield ImageField::new('logo2')
                ->setUploadDir('/public/images/')
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
                ->setColumns('col-sm-12 col-md-6 col-md-6');
        } else {
            yield ImageField::new('logo')->setBasePath('/images/')->setColumns('col-sm-12 col-md-4 col-md-4');
            yield ImageField::new('logo2')->setBasePath('/images/')->setColumns('col-sm-12 col-md-4 col-md-4');
        }
        yield TextField::new('logoAlt')->setColumns(6);
        yield TextField::new('logo2Alt')->setColumns(6);
    }

}
