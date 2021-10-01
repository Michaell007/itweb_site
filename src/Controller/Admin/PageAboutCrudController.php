<?php

namespace App\Controller\Admin;

use App\Entity\PageAbout;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PageAboutCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PageAbout::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Presentation')
            ->setEntityLabelInPlural('Qui sommes nous ?')
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            ;
    }
    

    public function configureFields(string $pageName): iterable
    {
        yield IntegerField::new('id','Identifiant')->setColumns('col-sm-12 col-md-6 col-md-6')->onlyOnIndex();
        yield TextField::new('titre','Titre')->setColumns('col-sm-12 col-md-7 col-md-7');
        yield TextField::new('sousTitre','Sous Titre')->setColumns('col-sm-12 col-md-7 col-md-7')->hideOnIndex();
        if (in_array($pageName, [Crud::PAGE_NEW, Crud::PAGE_EDIT])) {
            yield ImageField::new('image')
                ->setUploadDir('/public/images/')
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
                ->setColumns('col-sm-12 col-md-7 col-md-7');
        } else {
            yield ImageField::new('image')->setBasePath('/images/')->setColumns('col-sm-12 col-md-7 col-md-7');
        }
        yield TextField::new('imageAlt','Nom de Image')->setColumns('col-sm-12 col-md-7 col-md-7');
        yield TextField::new('featureTitre','Feature Titre')->setColumns('col-sm-12 col-md-7 col-md-7');
        yield TextField::new('featurePresentationTitre','Feature Titre de presentation')->setColumns('col-sm-12 col-md-7 col-md-7');
        yield TextEditorField::new('featurePresentationContent','Contenu de presentation')->setFormType(CKEditorType::class)->addCssClass('field-ck-editor');
        yield TextField::new('featureTwoTitre','Feature second titre')->setColumns('col-sm-12 col-md-7 col-md-7');
        yield TextField::new('featureVisionTitre','Feature vision titre')->setColumns('col-sm-12 col-md-7 col-md-7');
    }
}
