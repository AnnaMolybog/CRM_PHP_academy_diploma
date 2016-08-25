<?php

namespace CRM\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RoleControllerTest extends WebTestCase
{
    public function testAdmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin');
    }

    public function testInitiator()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/initiator');
    }

}
