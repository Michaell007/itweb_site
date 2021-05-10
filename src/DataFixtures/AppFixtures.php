<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    protected $faker;
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        $this->faker = Factory::create('FR-fr');

        for ($i=0; $i < 3; $i++) {
            $user = new User();
            $user->setEmail($this->faker->email);
            $password = $this->encoder->encodePassword($user, '1234');
            $user->setPassword($password);
            $manager->persist($user);
        }

        $manager->flush();
    }

}
