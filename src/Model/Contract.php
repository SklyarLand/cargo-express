<?php


namespace CargoExpress\Delivery\Model;


use CargoExpress\Model\Client;

class Contract
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var int Статус выполнения контракта
     */
    private $status;
    /**
     * @var Delivery Доставка
     */
    private $delivery;
    /**
     * @var \DateTime Дата создания
     */
    private $createdDate;
    /**
     * @var \DateTime Дата обновления
     */
    private $updatedDate;

    /**
     * Contract constructor.
     * @param int $id
     * @param Client $client
     * @param int $status
     * @param Delivery $delivery
     * @param \DateTime $createdDate
     * @param \DateTime $updatedDate
     */
    public function __construct(int $id, Client $client, int $status, Delivery $delivery, \DateTime $createdDate = null, \DateTime $updatedDate = null)
    {
        $this->id = $id;
        $this->client = $client;
        $this->status = $status;
        $this->delivery = $delivery;
        $this->createdDate = $createdDate;
        $this->updatedDate = $updatedDate;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getClient(): Client
    {
        return $this->client;
    }


    /**
     * @return Transport
     */
    public function getTransport(): Transport
    {
        return $this->delivery->getTransport();
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return Delivery
     */
    public function getDelivery(): Delivery
    {
        return $this->delivery;
    }

    /**
     * @param Delivery $delivery
     */
    public function setDelivery(Delivery $delivery): void
    {
        $this->delivery = $delivery;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate(): \DateTime
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTime $createdDate
     */
    public function setCreatedDate(\DateTime $createdDate): void
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDate(): \DateTime
    {
        return $this->updatedDate;
    }

    /**
     * @param \DateTime $updatedDate
     */
    public function setUpdatedDate(\DateTime $updatedDate): void
    {
        $this->updatedDate = $updatedDate;
    }

}