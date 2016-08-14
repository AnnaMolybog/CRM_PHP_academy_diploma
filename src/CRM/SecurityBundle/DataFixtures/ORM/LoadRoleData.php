<?php

namespace CRM\SecurityBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CRM\SecurityBundle\Entity\Role;

class LoadRoleData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new Role();
        $userAdmin->setRole('ROLE_ADMIN');

        $manager->persist($userAdmin);
        $manager->flush();

        $userInitiator = new Role();
        $userInitiator->setRole('ROLE_INITIATOR');
        $manager->persist($userAdmin);
        $manager->flush();

        $this->addReference('ROLE_ADMIN', $userAdmin);
        $this->addReference('ROLE_INITIATOR', $userInitiator);
    }

    public function getOrder()
    {
        return 1;
    }
}