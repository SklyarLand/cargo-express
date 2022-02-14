<?php


namespace CargoExpress\Delivery\Model;


use CargoExpress\Delivery\Transport\BaseTransport;

class Transport
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int стоимость за километр
     */
    protected $pricePerKilometer;

    /**
     * @var int максимальная скорость
     */
    protected $speed;

    /**
     * @var int
     */
    protected $tonnage;

    /**
     * @var BaseTransport
     */
    protected $type;

    /**
     * Transport constructor.
     * @param int $id
     * @param string $name
     * @param int $pricePerKilometer
     * @param int $speed
     * @param int $tonnage
     */
    public function __construct(int $id, string $name, int $pricePerKilometer, int $speed, int $tonnage)
    {
        $this->id = $id;
        $this->name = $name;
        $this->pricePerKilometer = $pricePerKilometer;
        $this->speed = $speed;
        $this->tonnage = $tonnage;
    }


    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPricePerKilometer() : int
    {
        return $this->pricePerKilometer;
    }

    /**
     * @return int
     */
    public function getSpeed() : int
    {
        return $this->speed;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getTonnage(): int
    {
        return $this->tonnage;
    }

    /**
     * @param int $tonnage
     */
    public function setTonnage(int $tonnage): void
    {
        $this->tonnage = $tonnage;
    }

    /**
     * @return BaseTransport
     */
    public function getType(): BaseTransport
    {
        return $this->type;
    }

    /**
     * @param BaseTransport $type
     */
    public function setType(BaseTransport $type): void
    {
        $this->type = $type;
    }


}