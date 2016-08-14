<?php

namespace CRM\SecurityBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use CRM\SecurityBundle\Entity\User;

class LoadUserData extends AbstractFixture implements  OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin@company.com');
        $userAdmin->setPassword('admin');
        $userAdmin->setRoleId($this->getReference('ROLE_ADMIN')->getId());
        $userAdmin->setRole($this->getReference('ROLE_ADMIN'));
        $manager->persist($userAdmin);
        $manager->flush();

        $userInitiator = new User();
        $userInitiator->setUsername('initiator@company.com');
        $userInitiator->setPassword('initiator');
        $userInitiator->setRoleId($this->getReference('ROLE_INITIATOR')->getId());
        $userInitiator->setRole($this->getReference('ROLE_INITIATOR'));
        $manager->persist($userInitiator);
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}