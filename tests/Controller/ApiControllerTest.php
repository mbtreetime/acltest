<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testGetApiTest(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'http://localhost:8080/api/test');

        $this->assertResponseIsSuccessful();
    }

    public function testPostApiTest(): void
    {
        $client = static::createClient();
        $crawler = $client->request('POST', 'http://localhost:8080/api/test');

        $this->assertResponseIsSuccessful();
    }

    public function testGetApi2Test(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'http://localhost:8080/api/test2');

        $this->assertResponseIsSuccessful();
    }

    public function testPostApi2Test(): void
    {
        $client = static::createClient();
        $crawler = $client->request('POST', 'http://localhost:8080/api/test2');

        $this->assertResponseIsSuccessful();
    }
}
