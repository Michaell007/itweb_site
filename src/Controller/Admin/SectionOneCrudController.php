<?php

namespace App\Controller\Admin;

use App\Entity\SectionOne;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SectionOneCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SectionOne::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IntegerField::new('id','Identifiant')->setColumns('col-sm-12 col-md-6 col-md-6')->onlyOnIndex();
        yield TextField::new('subtitre','Sur Titre')->setColumns('col-sm-12 col-md-7 col-md-7')->hideOnIndex();
        yield TextField::new('titre','Titre')->setColumns('col-sm-12 col-md-7 col-md-7');
        yield TextEditorField::new('content','Texte');
        if (in_array($pageName, [Crud::PAGE_NEW, Crud::PAGE_EDIT])) {
            yield ImageField::new('image')
                ->setUploadDir('/public/images/')
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
                ->setColumns('col-sm-12 col-md-7 col-md-7');
        } else {
            yield ImageField::new('image')->setBasePath('/images/')->setColumns('col-sm-12 col-md-7 col-md-7');
        }
        yield TextField::new('alt','Nom de Image')->setColumns('col-sm-12 col-md-7 col-md-7');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Section')
            ->setEntityLabelInPlural('Liste de Sections');
    }


}
