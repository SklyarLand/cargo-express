<?php


namespace CargoExpress\Delivery\Repository;


use CargoExpress\Delivery\Model\Transport;

interface ITransportRepository
{
    public function getById(int $id) : Transport;
}