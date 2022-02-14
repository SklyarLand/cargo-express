<?php


namespace CargoExpress\Delivery\Delivery;


interface IDelivery
{
    public function getPrice() : int;
}