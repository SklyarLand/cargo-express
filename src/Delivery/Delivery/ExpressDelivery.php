<?php


namespace CargoExpress\Delivery\Delivery;


use CargoExpress\Delivery\Model\ITransport;
use CargoExpress\Delivery\Transport\BaseTransport;
use phpDocumentor\Reflection\Types\Parent_;

class ExpressDelivery extends BaseDelivery
{
    private $costFactor = 2;

    /**
     * BaseDelivery constructor.
     */
    public function __construct(int $distance, BaseTransport $transport)
    {
        parent::__construct($distance, $transport);
        $this->price *= $this->costFactor;
    }
}