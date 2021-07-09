<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecrutementController extends AbstractController
{
    /**
     * @Route("/recrutement", name="recrutement")
     */
    public function index(Request $request): Response
    {

        $form = $this->createFormBuilder()
            ->add('fullname', TextType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('annee_experience', TextType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('niveau_etude', ChoiceType::class, [
                'choices'  => [
                    'Niveau d\'etude *' => '',
                    '0' => '0',
                    'BAC' => 'BAC',
                    'BAC +2' => 'BAC +2',
                    'BAC +3' => 'BAC +3',
                    'BAC +4' => 'BAC +4',
                ],
            ])
            ->add('poste', ChoiceType::class, [
                'choices'  => [
                    'Poste *' => '',
                    'Webdesign' => 'Webdesign',
                    'Assistante de direction' => 'Assistante de direction',
                    'Developpeur Frontend' => 'Developpeur Frontend',
                    'Developpeur Backend' => 'Developpeur Backend',
                    'Developpeur FullStack' => 'Developpeur FullStack',
                ],
            ])
            ->add('fichier', FileType::class)
            ->add('message', TextareaType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('envoyer', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            
            $fichier = $form->get('fichier')->getData();
            if ($fichier) {
                $originalFilename = pathinfo($fichier->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$fichier->guessExtension();
                // Move the file to the directory where brochures are stored
                $fichier->move(
                    $this->getParameter('cv_directory'),
                    $newFilename
                );
            }

            // Envoie de mail install switmailer  \Swift_Message $mailer en argment de la fction index
            // $message = (new \Swift_Message('Email envoye depuis le site web ITwebson'))
            //     ->setFrom('send@mail.com')
            //     ->setFrom('recpient@mail.com')
            //     ->setBody(
            //         $this->renderView(
            //             'emails/contact.html.twig',
            //             ['data' => $data]
            //         ),
            //         'text/html'
            //     )
            // ;
            // $mailer->send($message);

            $this->addFlash('success','Merci, votre cv a bien ete envoye.');
            return $this->redirectToRoute('recrutement', [
                'form' => $form->createView(),
            ]);
        }

        return $this->render('front-end/recrutement/recrutement.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
