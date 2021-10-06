<?php

namespace App\Controller\Admin;

use App\Entity\Recrutement;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RecrutementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Recrutement::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IntegerField::new('id','Identifiant')->setColumns('col-sm-12 col-md-6 col-md-6')->onlyOnIndex();
        yield TextField::new('titre','Titre')->setColumns('col-sm-12 col-md-7 col-md-7');
        yield TextEditorField::new('content','Contenu')->setFormType(CKEditorType::class)->addCssClass('field-ck-editor');
    }

}
