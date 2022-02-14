<?php


namespace CargoExpress\Delivery;


use CargoExpress\Delivery\Model\Contract;
use CargoExpress\Delivery\Repository\ContractRepository;
use CargoExpress\Delivery\Transport\BaseTransport;
use CargoExpress\Model\Client;
use phpDocumentor\Reflection\PseudoTypes\TraitString;

class Service
{
    /**
     * @var Client
     */
    private $client;
    /**
     * @var BaseTransport
     */
    private $transport;
    /**
     * Service constructor.
     */
    public function __construct(Client $client, BaseTransport $transport)
    {
        $this->client = $client;
        $this->transport = $transport;
    }

    public function process()
    {
        $repo = new ContractRepository();
    }

    public function orderAvailableForDate(\DateTime $date)
    {

    }
}