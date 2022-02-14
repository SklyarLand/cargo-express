<?php


namespace CargoExpress\Delivery\Repository;


use CargoExpress\Delivery\Delivery\IDelivery;
use CargoExpress\Delivery\Model\Contract;
use CargoExpress\Delivery\Model\Transport;
use CargoExpress\Model\Client;

class ContractRepository implements IContractRepository
{
    private $startStatus = 1;
    /**
     * @inheritDoc
     */
    public function getForTransportModel(int $transportModelId, string $date): array
    {
        // TODO: Implement getForTransportModel() method.
    }

    public function create(Client $client, Transport $transport, IDelivery $delivery) : Contract {
        return new Contract(1, $client->getId(), $transport, $this->startStatus, $delivery);
    }
}