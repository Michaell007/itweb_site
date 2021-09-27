<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id', 'Identifiant')->onlyOnIndex();
        yield EmailField::new('email', 'Email');
        if (in_array($pageName, [Crud::PAGE_NEW, Crud::PAGE_EDIT]) ) {
            yield ChoiceField::new('roles', 'Role(s)')
                ->allowMultipleChoices()
                ->autocomplete()
                ->setChoices([
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN',
                    'Super Administrateur' => 'ROLE_SUPER_ADMIN'
                ]);
            yield TextField::new('password', 'Mot de passe')
            ->setColumns('col-sm-12 col-md-4 col-md-4')
                ->setFormType(RepeatedType::class)
                ->setFormTypeOptions([
                    'type' => PasswordType::class,
                    'invalid_message' => 'Les champs de mot de passe doivent correspondre.',
                    'options' => ['attr' => ['class' => 'password-field']],
                    'required' => true,
                    'first_options'  => ['label' => 'Mot de passe'],
                    'second_options' => ['label' => 'Répéter le mot de passe'],
                ])
                ->setMaxLength(10);
        } else {
            yield ArrayField::new('roles', 'Role(s)');
        }
        
        
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Utilisateur')
            ->setEntityLabelInPlural('Utilisateurs')
            ->setPageTitle(Crud::PAGE_INDEX, 'Espace utilisateur');
    }
}
