<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MoviePageControllerTest extends WebTestCase
{
    public function testMovie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/movie');
    }

}
