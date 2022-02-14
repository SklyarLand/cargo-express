<?php
declare(strict_types = 1);

namespace CargoExpress\Controller;

use CargoExpress\ClientsRepository;
use CargoExpress\Delivery\DeliveryRequest;
use CargoExpress\Delivery\DeliveryResponse;
use CargoExpress\Delivery\Model\Contract;
use CargoExpress\Delivery\Model\Transport;
use CargoExpress\Delivery\Model\Delivery;
use CargoExpress\Delivery\Repository\IContractRepository;
use CargoExpress\Delivery\Repository\ITransportRepository;
use CargoExpress\Delivery\Transport\RailwayTransport;
use CargoExpress\Repository\IClientRepository;
use CargoExpress\TransportModelsRepository;

class DeliveryContractOperation
{
    /**
     * @var IContractRepository
     */
    protected $contractsRepository;

    /**
     * @var ClientsRepository
     */
    protected $clientsRepository;

    /**
     * @var TransportModelsRepository
     */
    protected $transportModelsRepository;


    /**
     * DeliveryContractOperation constructor.
     * @param IContractRepository $contractsRepo
     * @param IClientRepository $clientsRepo
     * @param ITransportRepository $transportModelsRepo
     */
    public function __construct(IContractRepository $contractsRepo, IClientRepository $clientsRepo, ITransportRepository $transportModelsRepo)
    {
        $this->contractsRepository       = $contractsRepo;
        $this->clientsRepository         = $clientsRepo;
        $this->transportModelsRepository = $transportModelsRepo;
    }

    /**
     * @param DeliveryRequest $request
     * @return DeliveryResponse
     */
    public function execute(DeliveryRequest $request): DeliveryResponse
    {
        $client = $this->clientsRepository->getById($request->clientId);
        $this->contractsRepository->getForTransportModel($request->transportModelId, $request->startDate);
        $transport = $this->transportModelsRepository->getById($request->transportModelId);

        $transport = new Transport(1, 'Новый транспорт', 10, 70, 100);
        $transportType = new RailwayTransport($transport);
        $transport->setType($transportType);
        $delivery = new Delivery(1,1, $transport);
        $contract = new Contract(1, $client, 1, $delivery);
    }
}