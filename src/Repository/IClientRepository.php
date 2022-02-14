<?php


namespace CargoExpress\Repository;


use CargoExpress\Model\Client;

interface IClientRepository
{
    /**
     * Возвращает клиента по его id
     *
     * @param int $id
     * @return Client
     */
    public function getById(int $id): Client;
}