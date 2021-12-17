<?php
namespace GooglePayPasses\WalletObjects\Collections;

use Google\Collection;
use GooglePayPasses\WalletObjects\Models\CallbackOptions;
use GooglePayPasses\WalletObjects\Models\ClassTemplateInfo;
use GooglePayPasses\WalletObjects\Models\Image;
use GooglePayPasses\WalletObjects\Models\ImageModuleData;
use GooglePayPasses\WalletObjects\Models\LatLongPoint;
use GooglePayPasses\WalletObjects\Models\Message;
use GooglePayPasses\WalletObjects\Models\Review;
use GooglePayPasses\WalletObjects\Models\TextModuleData;
use GooglePayPasses\WalletObjects\Models\Uri;

class OfferClass extends Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = [];
    public $allowMultipleUsersPerObject;
    protected $callbackOptionsType = CallbackOptions::class;
    protected $callbackOptionsDataType = '';
    protected $classTemplateInfoType = ClassTemplateInfo::class;
    protected $classTemplateInfoDataType = '';
    public $countryCode;
    public $details;
    public $enableSmartTap;
    public $finePrint;
    protected $helpUriType = Uri::class;
    protected $helpUriDataType = '';
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
    protected $localizedDetailsType = LocalizedString::class;
    protected $localizedDetailsDataType = '';
    protected $localizedFinePrintType = LocalizedString::class;
    protected $localizedFinePrintDataType = '';
    protected $localizedIssuerNameType = LocalizedString::class;
    protected $localizedIssuerNameDataType = '';
    protected $localizedProviderType = LocalizedString::class;
    protected $localizedProviderDataType = '';
    protected $localizedShortTitleType = LocalizedString::class;
    protected $localizedShortTitleDataType = '';
    protected $localizedTitleType = LocalizedString::class;
    protected $localizedTitleDataType = '';
    protected $locationsType = LatLongPoint::class;
    protected $locationsDataType = 'array';
    protected $messagesType = Message::class;
    protected $messagesDataType = 'array';
    public $multipleDevicesAndHoldersAllowedStatus;
    public $provider;
    public $redemptionChannel;
    public $redemptionIssuers;
    protected $reviewType = Review::class;
    protected $reviewDataType = '';
    public $reviewStatus;
    public $shortTitle;
    protected $textModulesDataType = TextModuleData::class;
    protected $textModulesDataDataType = 'array';
    public $title;
    protected $titleImageType = Image::class;
    protected $titleImageDataType = '';
    public $version;
    protected $wordMarkType = Image::class;
    protected $wordMarkDataType = '';
    /**
     * @var array|CallbackOptions|mixed|null
     */
    private $callbackOptions;
    /**
     * @var array|ClassTemplateInfo|mixed|null
     */
    private $classTemplateInfo;
    /**
     * @var array|Uri|mixed|null
     */
    private $helpUri;
    /**
     * @var array|Image|mixed|null
     */
    private $heroImage;
    /**
     * @var array|Uri|mixed|null
     */
    private $homepageUri;
    /**
     * @var array|ImageModuleData|mixed|null
     */
    private $imageModulesData;
    /**
     * @var array|InfoModuleData|mixed|null
     */
    private $infoModuleData;
    /**
     * @var array|LinksModuleData|mixed|null
     */
    private $linksModuleData;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedDetails;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedFinePrint;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedIssuerName;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedProvider;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedShortTitle;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedTitle;
    /**
     * @var array|LatLongPoint|mixed|null
     */
    private $locations;
    /**
     * @var array|Message|mixed|null
     */
    private $messages;
    /**
     * @var array|Review|mixed|null
     */
    private $review;
    /**
     * @var array|TextModuleData|mixed|null
     */
    private $textModulesData;
    /**
     * @var array|Image|mixed|null
     */
    private $titleImage;
    /**
     * @var array|Image|mixed|null
     */
    private $wordMark;

    public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
    {
        $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
    }
    public function getAllowMultipleUsersPerObject()
    {
        return $this->allowMultipleUsersPerObject;
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
    public function setDetails($details)
    {
        $this->details = $details;
    }
    public function getDetails()
    {
        return $this->details;
    }
    public function setEnableSmartTap($enableSmartTap)
    {
        $this->enableSmartTap = $enableSmartTap;
    }
    public function getEnableSmartTap()
    {
        return $this->enableSmartTap;
    }
    public function setFinePrint($finePrint)
    {
        $this->finePrint = $finePrint;
    }
    public function getFinePrint()
    {
        return $this->finePrint;
    }
    public function setHelpUri(Uri $helpUri)
    {
        $this->helpUri = $helpUri;
    }
    public function getHelpUri()
    {
        return $this->helpUri;
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
    public function setLocalizedDetails(LocalizedString $localizedDetails)
    {
        $this->localizedDetails = $localizedDetails;
    }
    public function getLocalizedDetails()
    {
        return $this->localizedDetails;
    }
    public function setLocalizedFinePrint(LocalizedString $localizedFinePrint)
    {
        $this->localizedFinePrint = $localizedFinePrint;
    }
    public function getLocalizedFinePrint()
    {
        return $this->localizedFinePrint;
    }
    public function setLocalizedIssuerName(LocalizedString $localizedIssuerName)
    {
        $this->localizedIssuerName = $localizedIssuerName;
    }
    public function getLocalizedIssuerName()
    {
        return $this->localizedIssuerName;
    }
    public function setLocalizedProvider(LocalizedString $localizedProvider)
    {
        $this->localizedProvider = $localizedProvider;
    }
    public function getLocalizedProvider()
    {
        return $this->localizedProvider;
    }
    public function setLocalizedShortTitle(LocalizedString $localizedShortTitle)
    {
        $this->localizedShortTitle = $localizedShortTitle;
    }
    public function getLocalizedShortTitle()
    {
        return $this->localizedShortTitle;
    }
    public function setLocalizedTitle(LocalizedString $localizedTitle)
    {
        $this->localizedTitle = $localizedTitle;
    }
    public function getLocalizedTitle()
    {
        return $this->localizedTitle;
    }
    public function setLocations(LatLongPoint $locations)
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
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }
    public function getProvider()
    {
        return $this->provider;
    }
    public function setRedemptionChannel($redemptionChannel)
    {
        $this->redemptionChannel = $redemptionChannel;
    }
    public function getRedemptionChannel()
    {
        return $this->redemptionChannel;
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
    public function setShortTitle($shortTitle)
    {
        $this->shortTitle = $shortTitle;
    }
    public function getShortTitle()
    {
        return $this->shortTitle;
    }
    public function setTextModulesData(TextModuleData $textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }
    public function getTextModulesData()
    {
        return $this->textModulesData;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitleImage(Image $titleImage)
    {
        $this->titleImage = $titleImage;
    }
    public function getTitleImage()
    {
        return $this->titleImage;
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