<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\AirportInfo;
use GooglePayPasses\WalletObjects\Models\BoardingAndSeatingPolicy;
use GooglePayPasses\WalletObjects\Models\CallbackOptions;
use GooglePayPasses\WalletObjects\Models\ClassTemplateInfo;
use GooglePayPasses\WalletObjects\Models\FlightHeader;
use GooglePayPasses\WalletObjects\Models\Image;
use GooglePayPasses\WalletObjects\Models\ImageModuleData;
use GooglePayPasses\WalletObjects\Models\LatLongPoint;
use GooglePayPasses\WalletObjects\Models\Message;
use GooglePayPasses\WalletObjects\Models\Review;
use GooglePayPasses\WalletObjects\Models\TextModuleData;
use GooglePayPasses\WalletObjects\Models\Uri;

class FlightClass extends Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array(
    );
    public $allowMultipleUsersPerObject;
    protected $boardingAndSeatingPolicyType = BoardingAndSeatingPolicy::class;
    protected $boardingAndSeatingPolicyDataType = '';
    protected $callbackOptionsType = CallbackOptions::class;
    protected $callbackOptionsDataType = '';
    protected $classTemplateInfoType = ClassTemplateInfo::class;
    protected $classTemplateInfoDataType = '';
    public $countryCode;
    protected $destinationType = AirportInfo::class;
    protected $destinationDataType = '';
    public $enableSmartTap;
    protected $flightHeaderType = FlightHeader::class;
    protected $flightHeaderDataType = '';
    public $flightStatus;
    protected $heroImageType = Image::class;
    protected $heroImageDataType = '';
    public $hexBackgroundColor;
    protected $homepageUriType = Uri::class;
    protected $homepageUriDataType = '';
    public $id;
    protected $imageModulesDataType = ImageModuleData::class;
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = InfoModuleData::class;
    protected $infoModuleDataDataType = '';
    public $issuerName;
    public $kind;
    protected $linksModuleDataType = LinksModuleData::class;
    protected $linksModuleDataDataType = '';
    public $localBoardingDateTime;
    public $localEstimatedOrActualArrivalDateTime;
    public $localEstimatedOrActualDepartureDateTime;
    public $localGateClosingDateTime;
    public $localScheduledArrivalDateTime;
    public $localScheduledDepartureDateTime;
    protected $localizedIssuerNameType = LocalizedString::class;
    protected $localizedIssuerNameDataType = '';
    protected $locationsType = LatLongPoint::class;
    protected $locationsDataType = 'array';
    protected $messagesType = Message::class;
    protected $messagesDataType = 'array';
    public $multipleDevicesAndHoldersAllowedStatus;
    protected $originType = AirportInfo::class;
    protected $originDataType = '';
    public $redemptionIssuers;
    protected $reviewType = Review::class;
    protected $reviewDataType = '';
    public $reviewStatus;
    protected $textModulesDataType = TextModuleData::class;
    protected $textModulesDataDataType = 'array';
    public $version;
    protected $wordMarkType = Image::class;
    protected $wordMarkDataType = '';
    /**
     * @var array|BoardingAndSeatingPolicy|mixed|null
     */
    private $boardingAndSeatingPolicy;
    /**
     * @var array|CallbackOptions|mixed|null
     */
    private $callbackOptions;
    /**
     * @var array|ClassTemplateInfo|mixed|null
     */
    private $classTemplateInfo;
    /**
     * @var array|AirportInfo|mixed|null
     */
    private $destination;
    /**
     * @var array|FlightHeader|mixed|null
     */
    private $flightHeader;
    /**
     * @var array|Image|mixed|null
     */
    private $heroImage;
    /**
     * @var array|Uri|mixed|null
     */
    private $homepageUri;
    /**
     * @var array|LinksModuleData|mixed|null
     */
    private $linksModuleData;
    /**
     * @var array|InfoModuleData|mixed|null
     */
    private $infoModuleData;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedIssuerName;
    /**
     * @var array|ImageModuleData|mixed|null
     */
    private $imageModulesData;
    /**
     * @var array|Message|mixed|null
     */
    private $messages;
    /**
     * @var array|Review|mixed|null
     */
    private $review;
    /**
     * @var array|AirportInfo|mixed|null
     */
    private $origin;
    /**
     * @var array|Image|mixed|null
     */
    private $wordMark;
    /**
     * @var array|mixed|null
     */
    private $locations;
    /**
     * @var array|TextModuleData|mixed|null
     */
    private $textModulesData;


    public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
    {
        $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
    }
    public function getAllowMultipleUsersPerObject()
    {
        return $this->allowMultipleUsersPerObject;
    }
    public function setBoardingAndSeatingPolicy(BoardingAndSeatingPolicy $boardingAndSeatingPolicy)
    {
        $this->boardingAndSeatingPolicy = $boardingAndSeatingPolicy;
    }
    public function getBoardingAndSeatingPolicy()
    {
        return $this->boardingAndSeatingPolicy;
    }
    public function setCallbackOptions(CallbackOptions $callbackOptions)
    {
        $this->callbackOptions = $callbackOptions;
    }
    public function getCallbackOptions()
    {
        return $this->callbackOptions;
    }
    public function setClassTemplateInfo(ClassTemplateInfo $classTemplateInfo)
    {
        $this->classTemplateInfo = $classTemplateInfo;
    }
    public function getClassTemplateInfo()
    {
        return $this->classTemplateInfo;
    }
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    public function setDestination(AirportInfo $destination)
    {
        $this->destination = $destination;
    }
    public function getDestination()
    {
        return $this->destination;
    }
    public function setEnableSmartTap($enableSmartTap)
    {
        $this->enableSmartTap = $enableSmartTap;
    }
    public function getEnableSmartTap()
    {
        return $this->enableSmartTap;
    }
    public function setFlightHeader(FlightHeader $flightHeader)
    {
        $this->flightHeader = $flightHeader;
    }
    public function getFlightHeader()
    {
        return $this->flightHeader;
    }
    public function setFlightStatus($flightStatus)
    {
        $this->flightStatus = $flightStatus;
    }
    public function getFlightStatus()
    {
        return $this->flightStatus;
    }
    public function setHeroImage(Image $heroImage)
    {
        $this->heroImage = $heroImage;
    }
    public function getHeroImage()
    {
        return $this->heroImage;
    }
    public function setHexBackgroundColor($hexBackgroundColor)
    {
        $this->hexBackgroundColor = $hexBackgroundColor;
    }
    public function getHexBackgroundColor()
    {
        return $this->hexBackgroundColor;
    }
    public function setHomepageUri(Uri $homepageUri)
    {
        $this->homepageUri = $homepageUri;
    }
    public function getHomepageUri()
    {
        return $this->homepageUri;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImageModulesData(ImageModuleData $imageModulesData)
    {
        $this->imageModulesData = $imageModulesData;
    }
    public function getImageModulesData()
    {
        return $this->imageModulesData;
    }
    public function setInfoModuleData(InfoModuleData $infoModuleData)
    {
        $this->infoModuleData = $infoModuleData;
    }
    public function getInfoModuleData()
    {
        return $this->infoModuleData;
    }
    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
    }
    public function getIssuerName()
    {
        return $this->issuerName;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLinksModuleData(LinksModuleData $linksModuleData)
    {
        $this->linksModuleData = $linksModuleData;
    }
    public function getLinksModuleData()
    {
        return $this->linksModuleData;
    }
    public function setLocalBoardingDateTime($localBoardingDateTime)
    {
        $this->localBoardingDateTime = $localBoardingDateTime;
    }
    public function getLocalBoardingDateTime()
    {
        return $this->localBoardingDateTime;
    }
    public function setLocalEstimatedOrActualArrivalDateTime($localEstimatedOrActualArrivalDateTime)
    {
        $this->localEstimatedOrActualArrivalDateTime = $localEstimatedOrActualArrivalDateTime;
    }
    public function getLocalEstimatedOrActualArrivalDateTime()
    {
        return $this->localEstimatedOrActualArrivalDateTime;
    }
    public function setLocalEstimatedOrActualDepartureDateTime($localEstimatedOrActualDepartureDateTime)
    {
        $this->localEstimatedOrActualDepartureDateTime = $localEstimatedOrActualDepartureDateTime;
    }
    public function getLocalEstimatedOrActualDepartureDateTime()
    {
        return $this->localEstimatedOrActualDepartureDateTime;
    }
    public function setLocalGateClosingDateTime($localGateClosingDateTime)
    {
        $this->localGateClosingDateTime = $localGateClosingDateTime;
    }
    public function getLocalGateClosingDateTime()
    {
        return $this->localGateClosingDateTime;
    }
    public function setLocalScheduledArrivalDateTime($localScheduledArrivalDateTime)
    {
        $this->localScheduledArrivalDateTime = $localScheduledArrivalDateTime;
    }
    public function getLocalScheduledArrivalDateTime()
    {
        return $this->localScheduledArrivalDateTime;
    }
    public function setLocalScheduledDepartureDateTime($localScheduledDepartureDateTime)
    {
        $this->localScheduledDepartureDateTime = $localScheduledDepartureDateTime;
    }
    public function getLocalScheduledDepartureDateTime()
    {
        return $this->localScheduledDepartureDateTime;
    }
    public function setLocalizedIssuerName(LocalizedString $localizedIssuerName)
    {
        $this->localizedIssuerName = $localizedIssuerName;
    }
    public function getLocalizedIssuerName()
    {
        return $this->localizedIssuerName;
    }
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
    }
    public function setMessages(Message $messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
    public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
    {
        $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
    }
    public function getMultipleDevicesAndHoldersAllowedStatus()
    {
        return $this->multipleDevicesAndHoldersAllowedStatus;
    }
    public function setOrigin(AirportInfo $origin)
    {
        $this->origin = $origin;
    }
    public function getOrigin()
    {
        return $this->origin;
    }
    public function setRedemptionIssuers($redemptionIssuers)
    {
        $this->redemptionIssuers = $redemptionIssuers;
    }
    public function getRedemptionIssuers()
    {
        return $this->redemptionIssuers;
    }
    public function setReview(Review $review)
    {
        $this->review = $review;
    }
    public function getReview()
    {
        return $this->review;
    }
    public function setReviewStatus($reviewStatus)
    {
        $this->reviewStatus = $reviewStatus;
    }
    public function getReviewStatus()
    {
        return $this->reviewStatus;
    }
    public function setTextModulesData(TextModuleData $textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }
    public function getTextModulesData()
    {
        return $this->textModulesData;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
    public function setWordMark(Image $wordMark)
    {
        $this->wordMark = $wordMark;
    }
    public function getWordMark()
    {
        return $this->wordMark;
    }
}