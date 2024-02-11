<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $user = (new User())
            ->setEmail('test@max.de')
            ->setVorname('Max')
            ->setNachname('Umbach')
            ->setIsVerified(true)
            ->setPassword(password_hash('test1234',PASSWORD_BCRYPT));

        $manager->persist($user);
        $manager->flush();


    }
}
