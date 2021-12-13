<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class AirportInfo extends Model
{
    protected $internal_gapi_mappings = array(
    );
    public $airportIataCode;
    protected $airportNameOverrideType = LocalizedString::class;
    protected $airportNameOverrideDataType = '';
    public $gate;
    public $kind;
    public $terminal;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $airportNameOverride;


    public function setAirportIataCode($airportIataCode)
    {
        $this->airportIataCode = $airportIataCode;
    }
    public function getAirportIataCode()
    {
        return $this->airportIataCode;
    }
    public function setAirportNameOverride(LocalizedString $airportNameOverride)
    {
        $this->airportNameOverride = $airportNameOverride;
    }
    public function getAirportNameOverride()
    {
        return $this->airportNameOverride;
    }
    public function setGate($gate)
    {
        $this->gate = $gate;
    }
    public function getGate()
    {
        return $this->gate;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;
    }
    public function getTerminal()
    {
        return $this->terminal;
    }
}