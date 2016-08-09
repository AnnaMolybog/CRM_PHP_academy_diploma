<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RoleControllerTest extends WebTestCase
{
    public function testInitiator()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/initiator');
    }

    public function testAdmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin');
    }

    public function testProductiondirector()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/productionDirector');
    }

}
