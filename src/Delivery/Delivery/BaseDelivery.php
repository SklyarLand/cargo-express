<?php


namespace CargoExpress\Delivery\Delivery;


use CargoExpress\Delivery\Model\ITransport;
use CargoExpress\Delivery\Transport\BaseTransport;

abstract class BaseDelivery implements IDelivery
{
    /**
     * @var int Дистанция от точки отправки до точки назначения в км
     */
    protected $distance = 200;

    /**
     * Цена за доставку
     * @var float|int
     */
    protected $price;

    /**
     * Адресс доставки
     * @var
     */
    protected $address;
    /**
     * BaseDelivery constructor.
     */
    public function __construct(string $address, BaseTransport $transport)
    {
        $this->address = $address;
        $this->price = $transport->getPricePerKilometer() * $this->distance;
    }

    /**
     * @return int
     */
    public function getPrice() : int
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     */
    public function setDistance(int $distance): void
    {
        $this->distance = $distance;
    }

}