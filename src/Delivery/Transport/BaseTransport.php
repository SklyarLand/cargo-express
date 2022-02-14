<?php


namespace CargoExpress\Delivery\Transport;


use CargoExpress\Delivery\Model\Transport;

abstract class BaseTransport
{
    /**
     * @var Transport
     */
    protected $model;

    /**
     * @var bool
     */
    protected $regularShippingAvailable = true;

    /**
     * @var bool
     */
    protected $expressShippingAvailable = true;

    /**
     * BaseTransport constructor.
     * @param $price float
     * @param $speed int
     */
    public function __construct(Transport $model)
    {
        $this->model = $model;
    }

    /**
     * @return int
     */
    public function getPricePerKilometer() : float
    {
        return $this->model->getPricePerKilometer();
    }

    /**
     * @return int
     */
    public function getSpeed() : int
    {
        return $this->model->getSpeed();
    }

    /**
     * @return bool
     */
    public function isRegularShippingAvailable(): bool
    {
        return $this->regularShippingAvailable;
    }

    /**
     * @return bool
     */
    public function isExpressShippingAvailable(): bool
    {
        return $this->expressShippingAvailable;
    }

    /**
     * @return Transport
     */
    public function getModel(): Transport
    {
        return $this->model;
    }

}