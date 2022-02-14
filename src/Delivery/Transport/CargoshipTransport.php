<?php


namespace CargoExpress\Delivery\Transport;


use CargoExpress\Delivery\Transport\Categories\BaseWaterTransport;

class CargoshipTransport extends BaseWaterTransport
{
    protected $expressShippingAvailable = false;
}