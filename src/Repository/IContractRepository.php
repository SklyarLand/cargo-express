<?php


namespace CargoExpress\Delivery\Repository;


use CargoExpress\Delivery\Delivery\IDelivery;
use CargoExpress\Delivery\Model\Contract;
use CargoExpress\Delivery\Model\Transport;
use CargoExpress\Model\Client;

interface IContractRepository
{
    /**
     * Возвращает список договоров доставки для модели транспорта, в которых она занята в указанный период
     * @param int $transportModelId
     * @param string $date
     * @return Contract[]
     */
    public function getForTransportModel(int $transportModelId, string $date): array;

    public function create(Client $client, Transport $transport, IDelivery $delivery) : Contract;
}