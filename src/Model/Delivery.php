<?php


namespace CargoExpress\Delivery\Model;


use CargoExpress\Delivery\Model\Transport;

class Delivery
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $deliveryType;
    /**
     * @var Transport
     */
    private $transport;
    /**
     * @var \DateTime
     */
    private $start_date;
    /**
     * @var \DateTime
     */
    private $end_date;
    /**
     * @var \DateTime
     */
    private $return_date;

    /**
     * Delivery constructor.
     * @param int $id
     * @param int $deliveryType
     * @param Transport $transport
     * @param \DateTime $start_date
     * @param \DateTime $end_date
     * @param \DateTime $return_date
     */
    public function __construct(int $id, int $deliveryType, Transport $transport, \DateTime $start_date = null, \DateTime $end_date = null, \DateTime $return_date = null)
    {
        $this->id = $id;
        $this->deliveryType = $deliveryType;
        $this->transport = $transport;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->return_date = $return_date;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * @param mixed $deliveryType
     */
    public function setDeliveryType($deliveryType): void
    {
        $this->deliveryType = $deliveryType;
    }

    /**
     * @return mixed
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param Transport $transport
     */
    public function setTransport(Transport $transport): void
    {
        $this->transport = $transport;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param mixed $start_date
     */
    public function setStartDate($start_date): void
    {
        $this->start_date = $start_date;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @param mixed $end_date
     */
    public function setEndDate($end_date): void
    {
        $this->end_date = $end_date;
    }

    /**
     * @return mixed
     */
    public function getReturnDate()
    {
        return $this->return_date;
    }

    /**
     * @param mixed $return_date
     */
    public function setReturnDate($return_date): void
    {
        $this->return_date = $return_date;
    }
}