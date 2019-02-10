<?php

namespace Decitre;

use Symfony\Component\Panther\Client;

class Decitre
{
    /**
     * @var null|string
     */
    private $barcode = null;

    /**
     * @var string
     */
    private $entrypoint;

    private $client;

    /**
     * @param Client|null $client
     * @param null $entryPoint
     */
    public function __construct(Client $client = null, $entryPoint = null)
    {
        $this->client     = $client ?: Client::createChromeClient();
        $this->entrypoint = $entryPoint ?: 'https://www.decitre.fr/rechercher/result?q=';
    }

    /**
     * @param mixed $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        $crawler = $this->client->request('GET', $this->entrypoint . $this->barcode);

        $price = $crawler->filter('.final-price')->text();

        return (float)str_replace(
            ['€', ','], ['', '.'],
            $price);
    }
}
