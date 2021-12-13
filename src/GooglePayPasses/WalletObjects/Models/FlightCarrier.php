<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class FlightCarrier extends Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $airlineAllianceLogoType = Image::class;
    protected $airlineAllianceLogoDataType = '';
    protected $airlineLogoType = Image::class;
    protected $airlineLogoDataType = '';
    protected $airlineNameType = LocalizedString::class;
    protected $airlineNameDataType = '';
    public $carrierIataCode;
    public $carrierIcaoCode;
    public $kind;
    /**
     * @var array|Image|mixed|null
     */
    private $airlineAllianceLogo;
    /**
     * @var array|Image|mixed|null
     */
    private $airlineLogo;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $airlineName;


    public function setAirlineAllianceLogo(Image $airlineAllianceLogo)
    {
        $this->airlineAllianceLogo = $airlineAllianceLogo;
    }
    public function getAirlineAllianceLogo()
    {
        return $this->airlineAllianceLogo;
    }
    public function setAirlineLogo(Image $airlineLogo)
    {
        $this->airlineLogo = $airlineLogo;
    }
    public function getAirlineLogo()
    {
        return $this->airlineLogo;
    }
    public function setAirlineName(LocalizedString $airlineName)
    {
        $this->airlineName = $airlineName;
    }
    public function getAirlineName()
    {
        return $this->airlineName;
    }
    public function setCarrierIataCode($carrierIataCode)
    {
        $this->carrierIataCode = $carrierIataCode;
    }
    public function getCarrierIataCode()
    {
        return $this->carrierIataCode;
    }
    public function setCarrierIcaoCode($carrierIcaoCode)
    {
        $this->carrierIcaoCode = $carrierIcaoCode;
    }
    public function getCarrierIcaoCode()
    {
        return $this->carrierIcaoCode;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
}