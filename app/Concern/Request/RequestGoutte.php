<?php

declare(strict_types=1);

namespace App\Concern\Request;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\DomCrawler\Link;
use Symfony\Component\HttpClient\HttpClient;

final class RequestGoutte
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client(HttpClient::create(['timeout' => 60]));
        $this->client
            ->setServerParameter(
                'user-agent',
                'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36
            ');
    }

    public function get(string $url): Crawler
    {
        return $this->client->request('GET', $url);
    }

    public function click(Link $link): Crawler
    {
        return $this->client->click($link);
    }
}
