<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\TicketSeat;

class TicketLeg extends Collection
{
    protected $collection_key = 'ticketSeats';
    protected $internal_gapi_mappings = [];
    public $arrivalDateTime;
    public $carriage;
    public $departureDateTime;
    protected $destinationNameType = LocalizedString::class;
    protected $destinationNameDataType = '';
    public $destinationStationCode;
    protected $fareNameType = LocalizedString::class;
    protected $fareNameDataType = '';
    protected $originNameType = LocalizedString::class;
    protected $originNameDataType = '';
    public $originStationCode;
    public $platform;
    protected $ticketSeatType = TicketSeat::class;
    protected $ticketSeatDataType = '';
    protected $ticketSeatsType = TicketSeat::class;
    protected $ticketSeatsDataType = 'array';
    protected $transitOperatorNameType = LocalizedString::class;
    protected $transitOperatorNameDataType = '';
    protected $transitTerminusNameType = LocalizedString::class;
    protected $transitTerminusNameDataType = '';
    public $zone;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $destinationName;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $fareName;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $originName;
    /**
     * @var array|TicketSeat|mixed|null
     */
    private $ticketSeat;
    /**
     * @var array|TicketSeat|mixed|null
     */
    private $ticketSeats;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $transitOperatorName;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $transitTerminusName;


    public function setArrivalDateTime($arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;
    }
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }
    public function setCarriage($carriage)
    {
        $this->carriage = $carriage;
    }
    public function getCarriage()
    {
        return $this->carriage;
    }
    public function setDepartureDateTime($departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;
    }
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }
    public function setDestinationName(LocalizedString $destinationName)
    {
        $this->destinationName = $destinationName;
    }
    public function getDestinationName()
    {
        return $this->destinationName;
    }
    public function setDestinationStationCode($destinationStationCode)
    {
        $this->destinationStationCode = $destinationStationCode;
    }
    public function getDestinationStationCode()
    {
        return $this->destinationStationCode;
    }
    public function setFareName(LocalizedString $fareName)
    {
        $this->fareName = $fareName;
    }
    public function getFareName()
    {
        return $this->fareName;
    }
    public function setOriginName(LocalizedString $originName)
    {
        $this->originName = $originName;
    }
    public function getOriginName()
    {
        return $this->originName;
    }
    public function setOriginStationCode($originStationCode)
    {
        $this->originStationCode = $originStationCode;
    }
    public function getOriginStationCode()
    {
        return $this->originStationCode;
    }
    public function setPlatform($platform)
    {
        $this->platform = $platform;
    }
    public function getPlatform()
    {
        return $this->platform;
    }
    public function setTicketSeat(TicketSeat $ticketSeat)
    {
        $this->ticketSeat = $ticketSeat;
    }
    public function getTicketSeat()
    {
        return $this->ticketSeat;
    }
    public function setTicketSeats(TicketSeat $ticketSeats)
    {
        $this->ticketSeats = $ticketSeats;
    }
    public function getTicketSeats()
    {
        return $this->ticketSeats;
    }
    public function setTransitOperatorName(LocalizedString $transitOperatorName)
    {
        $this->transitOperatorName = $transitOperatorName;
    }
    public function getTransitOperatorName()
    {
        return $this->transitOperatorName;
    }
    public function setTransitTerminusName(LocalizedString $transitTerminusName)
    {
        $this->transitTerminusName = $transitTerminusName;
    }
    public function getTransitTerminusName()
    {
        return $this->transitTerminusName;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}