<?php

namespace App\Controller\Admin;

use App\Entity\Activite;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ActiviteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Activite::class;
    }

    public function configureFields(string $pageName): iterable
    {
        // ---------- AFFICHAGE DE DIFFERENTS CHAMPS
        // hideOnForm() masque le champ a la fois dans edit et les new pages
        // onlyOnForms() masque le champ dans toute les pages sauf edit et new

        yield IdField::new('id', 'Identifiant')->onlyOnIndex();
        // yield FormField::addPanel('DETAILS');
        yield TextField::new('titre')
            ->setTemplatePath('bundles\EasyAdminBundle\personnels\field_custom_titre.html.twig')
            ->setColumns('col-sm-12 col-md-4 col-md-4');
        if (in_array($pageName, [Crud::PAGE_NEW, Crud::PAGE_EDIT])) {
            yield ImageField::new('image')
                ->setUploadDir('/public/images/')
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
                ->setColumns('col-sm-12 col-md-4 col-md-4');
        } else {
            yield ImageField::new('image')->setBasePath('/images/')->setColumns('col-sm-12 col-md-4 col-md-4');
        }
        yield AssociationField::new('user','Utilisateur(s)')->setColumns('col-sm-12 col-md-4 col-md-4');
        yield TextEditorField::new('texteIntroduction')->setColumns(12);
        // yield FormField::addRow();
        yield TextEditorField::new('texteComplet')
            ->addCssClass('field-ck-editor')
            ->setFormType(CKEditorType::class)
            ->setColumns(12);
        yield DateField::new('updatedAt', 'Fait le')->setFormat('dd-MM-Y')->renderAsNativeWidget()->onlyOnIndex();
        
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Activité')
            ->setEntityLabelInPlural('Mes Activités')
            ->setSearchFields(['titre','user'])
            ->setDefaultSort(['updatedAt' => 'DESC'])
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            // ->overrideTemplate('çrud/new', 'bundles\EasyAdminBundle\personnels\crud_new_custom.html.twig')
            // ->overrideTemplate('çrud/edit', 'bundles\EasyAdminBundle\personnels\crud_edit_custom.html.twig')
            // ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            // ->setEntityPermission('ROLE_ADMIN')
            // ========== DESIGN OPTION
            // ->renderContentMaximized()
            // ->renderSidebarMinimized()
            // ========== TITRE DE PAGE
            // ->setPageTitle(Crud::PAGE_INDEX, '%entity_label_plural% listing')
            // ->setPageTitle(Crud::PAGE_INDEX, fn () => new \DateTime('now') > new \DateTime('today 13:00') ? 'New Dinner' : 'New Lunch')
            // ->setPageTitle(Crud::PAGE_DETAIL, fn (Activite $activite) => (string) $activite)
            // ->setPageTitle(Crud::PAGE_EDIT, fn (Activite $activite) => sprintf('Edition', $activite->gettitre()))
            // ========== FORMATAGE DE DATE
            // ->setDateFormat('...')
            // ->setTimeFormat('...')
            // ->setDateTimeFormat('...')
            // ->setNumberFormat('%.2d')
            // ========== OPTION DE RECHERCHE ET PAGINATION
            // ->setSearchFields(['name' => 'description'])
            // ->setDefaultSort(['id' => 'DESC'])
            // ->setPaginatorRangeSize(30)
            // ->setPaginatorRangeSize(4)
            // ========== MODDELES ET OPTION DE FORMULAIRE
            // ->overrideTemplate('çrud/field/id', 'admin/fields/my_id.html.twig')
            // ->addFormTheme('foo.html.twig')
            // ->setFormOptions([
            //     'validation_groups' => ['Default'. 'my_validation_group']
            // ])
            ;
    }

    // Filtre par entite de relation
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('titre')
            ->add(EntityFilter::new('user'))
            ;
    }


}
