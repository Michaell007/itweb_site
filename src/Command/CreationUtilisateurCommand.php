<?php

namespace App\Command;

use Doctrine\ORM\EntityManagerInterface;

use App\Entity\User;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CreationUtilisateurCommand extends Command
{
    protected static $defaultName = 'app:creation-utilisateur';
    protected static $defaultDescription = 'Creer un utilisateur';

    private $encoder;
    protected $em;

    public function __construct(
        bool $requirePassword = true, 
        bool $requireUsername = true, 
        bool $requireRole = true, 
        UserPasswordEncoderInterface $encoder,
        EntityManagerInterface $entityManager
    )
    {
        $this->requireUsername = $requireUsername;
        $this->requirePassword = $requirePassword;
        $this->requireRole = $requireRole;
        $this->encoder = $encoder;
        $this->em = $entityManager;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription(self::$defaultDescription)
            // the "--help" option
            ->setHelp('Permet de créer un utilisateur á partir de commande => Username - Password - Role')
            ->addArgument('username', $this->requireUsername ? InputArgument::REQUIRED : InputArgument::OPTIONAL, 'Nom de utilisateur')
            ->addArgument('password', $this->requirePassword ? InputArgument::REQUIRED : InputArgument::OPTIONAL, 'Mot de passe utilisateur')
            ->addArgument('role', $this->requireRole ? InputArgument::REQUIRED : InputArgument::OPTIONAL, 'Role de utilisateur')
            // ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $username = $input->getArgument('username');
        $password = $input->getArgument('password');
        $role = $input->getArgument('role');

        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $io->error(sprintf('L\'adresse email n\'est pas valide.'));
        }

        if (strlen($password) < 8) {
            $io->error(sprintf('Le mot de passe doit contenir au moins 8 caracteres.'));
        }

        if (substr($role, 0, 5) != "ROLE_") {
            $io->error(sprintf('Le format du role est incorrect.'));
        }

        // if ($input->getOption('option1')) {}
        
        $user = new User();
        $roles[] = strtoupper($role);
        $password = $this->encoder->encodePassword($user, $password);
        $user->setEmail($username);
        $user->setPassword($password);
        $user->setRoles($roles);

        $this->em->persist($user);
        $this->em->flush();

        $io->success('Bravo! La création a été éffectuée avec succes.');

        return 0;
    }
}
