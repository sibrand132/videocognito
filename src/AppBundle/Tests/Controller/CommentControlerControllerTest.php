<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentControlerControllerTest extends WebTestCase
{
    public function testAddcomment()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addcomment');
    }

}
