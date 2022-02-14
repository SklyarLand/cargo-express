<?php


namespace CargoExpress\Delivery\Transport\Categories;


use CargoExpress\Delivery\Transport\BaseTransport;

class BaseAirTransport extends BaseTransport
{
    /**
     * @var bool
     */
    protected $regularShippingAvailable = false;
}