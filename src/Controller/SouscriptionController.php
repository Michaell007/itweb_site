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

class SouscriptionController extends AbstractController
{
    /**
     * @Route("/souscription", name="souscription")
     */
    public function index(Request $request): Response
    {

        $form = $this->createFormBuilder()
            ->add('choice', ChoiceType::class, [
                'choices'  => [
                    'Packweb1+' => 'Packweb1+',
                    'Packweb2+' => 'Packweb2+',
                    'Packweb3+' => 'Packweb3+',
                ],
            ])
            ->add('name_entreprise', TextType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('phone', TextType::class, [
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
            ->add('fichier', FileType::class, [
                'required' => false,
            ])
            ->add('message', TextareaType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('send', SubmitType::class)
            ->getForm();

        $choice_value = $request->query->get('select');
        if (!in_array($choice_value, ['Packweb1+','Packweb2+','Packweb3+'])) {
            return $this->redirectToRoute('it_solutions');
        }

        $form->get('choice')->setData($choice_value);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            // dd( $data );

            $fichier = $form->get('fichier')->getData();
            if ($fichier) {
                $originalFilename = pathinfo($fichier->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$fichier->guessExtension();
                // Move the file to the directory where brochures are stored
                $fichier->move(
                    $this->getParameter('files_directory'),
                    $newFilename
                );
                $data->setExtraitNaissance($newFilename);
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

            $this->addFlash('success','Merci de nous contacter, votre message a bien ete envoye.');
            return $this->redirectToRoute('contact', [
                'form' => $form->createView(),
            ]);
        }

        return $this->render('souscription/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
