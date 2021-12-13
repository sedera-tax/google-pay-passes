<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class FlightHeader extends Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $carrierType = FlightCarrier::class;
    protected $carrierDataType = '';
    public $flightNumber;
    public $kind;
    protected $operatingCarrierType = FlightCarrier::class;
    protected $operatingCarrierDataType = '';
    public $operatingFlightNumber;
    /**
     * @var array|FlightCarrier|mixed|null
     */
    private $carrier;
    /**
     * @var array|FlightCarrier|mixed|null
     */
    private $operatingCarrier;


    public function setCarrier(FlightCarrier $carrier)
    {
        $this->carrier = $carrier;
    }
    public function getCarrier()
    {
        return $this->carrier;
    }
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;
    }
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setOperatingCarrier(FlightCarrier $operatingCarrier)
    {
        $this->operatingCarrier = $operatingCarrier;
    }
    public function getOperatingCarrier()
    {
        return $this->operatingCarrier;
    }
    public function setOperatingFlightNumber($operatingFlightNumber)
    {
        $this->operatingFlightNumber = $operatingFlightNumber;
    }
    public function getOperatingFlightNumber()
    {
        return $this->operatingFlightNumber;
    }
}