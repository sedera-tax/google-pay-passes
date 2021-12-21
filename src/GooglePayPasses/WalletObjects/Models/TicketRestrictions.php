<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class TicketRestrictions extends Model
{
    protected $internal_gapi_mappings = [];
    protected $otherRestrictionsType = LocalizedString::class;
    protected $otherRestrictionsDataType = '';
    protected $routeRestrictionsType = LocalizedString::class;
    protected $routeRestrictionsDataType = '';
    protected $routeRestrictionsDetailsType = LocalizedString::class;
    protected $routeRestrictionsDetailsDataType = '';
    protected $timeRestrictionsType = LocalizedString::class;
    protected $timeRestrictionsDataType = '';
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $otherRestrictions;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $routeRestrictions;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $routeRestrictionsDetails;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $timeRestrictions;


    public function setOtherRestrictions(LocalizedString $otherRestrictions)
    {
        $this->otherRestrictions = $otherRestrictions;
    }
    public function getOtherRestrictions()
    {
        return $this->otherRestrictions;
    }
    public function setRouteRestrictions(LocalizedString $routeRestrictions)
    {
        $this->routeRestrictions = $routeRestrictions;
    }
    public function getRouteRestrictions()
    {
        return $this->routeRestrictions;
    }
    public function setRouteRestrictionsDetails(LocalizedString $routeRestrictionsDetails)
    {
        $this->routeRestrictionsDetails = $routeRestrictionsDetails;
    }
    public function getRouteRestrictionsDetails()
    {
        return $this->routeRestrictionsDetails;
    }
    public function setTimeRestrictions(LocalizedString $timeRestrictions)
    {
        $this->timeRestrictions = $timeRestrictions;
    }
    public function getTimeRestrictions()
    {
        return $this->timeRestrictions;
    }
}