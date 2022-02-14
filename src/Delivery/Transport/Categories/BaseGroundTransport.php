<?php


namespace CargoExpress\Delivery\Transport\Categories;

use \CargoExpress\Delivery\Transport\BaseTransport;

class BaseGroundTransport extends BaseTransport
{
    /**
     * @return int
     */
    public function getSpeed() : int
    {
        return $this->model->getSpeedLimit();
    }
}