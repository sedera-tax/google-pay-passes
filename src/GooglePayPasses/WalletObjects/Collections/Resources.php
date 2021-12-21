<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;

class Resources extends Collection
{
    protected $collection_key = 'transitObjects';
    protected $internal_gapi_mappings = [];
    protected $eventTicketClassesType = EventTicketClass::class;
    protected $eventTicketClassesDataType = 'array';
    protected $eventTicketObjectsType = EventTicketObject::class;
    protected $eventTicketObjectsDataType = 'array';
    protected $flightClassesType = FlightClass::class;
    protected $flightClassesDataType = 'array';
    protected $flightObjectsType = FlightObject::class;
    protected $flightObjectsDataType = 'array';
    protected $giftCardClassesType = GiftCardClass::class;
    protected $giftCardClassesDataType = 'array';
    protected $giftCardObjectsType = GiftCardObject::class;
    protected $giftCardObjectsDataType = 'array';
    protected $loyaltyClassesType = LoyaltyClass::class;
    protected $loyaltyClassesDataType = 'array';
    protected $loyaltyObjectsType = LoyaltyObject::class;
    protected $loyaltyObjectsDataType = 'array';
    protected $offerClassesType = OfferClass::class;
    protected $offerClassesDataType = 'array';
    protected $offerObjectsType = OfferObject::class;
    protected $offerObjectsDataType = 'array';
    protected $transitClassesType = TransitClass::class;
    protected $transitClassesDataType = 'array';
    protected $transitObjectsType = TransitObject::class;
    protected $transitObjectsDataType = 'array';
    /**
     * @var array|EventTicketClass|mixed|null
     */
    private $eventTicketClasses;
    /**
     * @var array|EventTicketObject|mixed|null
     */
    private $eventTicketObjects;
    /**
     * @var array|FlightClass|mixed|null
     */
    private $flightClasses;
    /**
     * @var array|FlightObject|mixed|null
     */
    private $flightObjects;
    /**
     * @var array|GiftCardClass|mixed|null
     */
    private $giftCardClasses;
    /**
     * @var array|GiftCardObject|mixed|null
     */
    private $giftCardObjects;
    /**
     * @var array|LoyaltyClass|mixed|null
     */
    private $loyaltyClasses;
    /**
     * @var array|LoyaltyObject|mixed|null
     */
    private $loyaltyObjects;
    /**
     * @var array|OfferClass|mixed|null
     */
    private $offerClasses;
    /**
     * @var array|OfferObject|mixed|null
     */
    private $offerObjects;
    /**
     * @var array|TransitClass|mixed|null
     */
    private $transitClasses;
    /**
     * @var array|TransitObject|mixed|null
     */
    private $transitObjects;


    public function setEventTicketClasses(EventTicketClass $eventTicketClasses)
    {
        $this->eventTicketClasses = $eventTicketClasses;
    }
    public function getEventTicketClasses()
    {
        return $this->eventTicketClasses;
    }
    public function setEventTicketObjects(EventTicketObject $eventTicketObjects)
    {
        $this->eventTicketObjects = $eventTicketObjects;
    }
    public function getEventTicketObjects()
    {
        return $this->eventTicketObjects;
    }
    public function setFlightClasses(FlightClass $flightClasses)
    {
        $this->flightClasses = $flightClasses;
    }
    public function getFlightClasses()
    {
        return $this->flightClasses;
    }
    public function setFlightObjects(FlightObject $flightObjects)
    {
        $this->flightObjects = $flightObjects;
    }
    public function getFlightObjects()
    {
        return $this->flightObjects;
    }
    public function setGiftCardClasses(GiftCardClass $giftCardClasses)
    {
        $this->giftCardClasses = $giftCardClasses;
    }
    public function getGiftCardClasses()
    {
        return $this->giftCardClasses;
    }
    public function setGiftCardObjects(GiftCardObject $giftCardObjects)
    {
        $this->giftCardObjects = $giftCardObjects;
    }
    public function getGiftCardObjects()
    {
        return $this->giftCardObjects;
    }
    public function setLoyaltyClasses(LoyaltyClass $loyaltyClasses)
    {
        $this->loyaltyClasses = $loyaltyClasses;
    }
    public function getLoyaltyClasses()
    {
        return $this->loyaltyClasses;
    }
    public function setLoyaltyObjects(LoyaltyObject $loyaltyObjects)
    {
        $this->loyaltyObjects = $loyaltyObjects;
    }
    public function getLoyaltyObjects()
    {
        return $this->loyaltyObjects;
    }
    public function setOfferClasses(OfferClass $offerClasses)
    {
        $this->offerClasses = $offerClasses;
    }
    public function getOfferClasses()
    {
        return $this->offerClasses;
    }
    public function setOfferObjects(OfferObject $offerObjects)
    {
        $this->offerObjects = $offerObjects;
    }
    public function getOfferObjects()
    {
        return $this->offerObjects;
    }
    public function setTransitClasses(TransitClass $transitClasses)
    {
        $this->transitClasses = $transitClasses;
    }
    public function getTransitClasses()
    {
        return $this->transitClasses;
    }
    public function setTransitObjects(TransitObject $transitObjects)
    {
        $this->transitObjects = $transitObjects;
    }
    public function getTransitObjects()
    {
        return $this->transitObjects;
    }
}