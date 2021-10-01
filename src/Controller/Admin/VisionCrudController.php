<?php

namespace App\Controller\Admin;

use App\Entity\Vision;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class VisionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vision::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id','Identifiant')->setColumns('col-sm-12 col-md-6 col-md-6')->onlyOnIndex();
        yield TextField::new('titre','Titre')->setColumns('col-sm-12 col-md-7 col-md-7');
        yield TextEditorField::new('details','Sous Titre')->setColumns('col-sm-12 col-md-7 col-md-7');
    }

}
