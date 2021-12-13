<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class AppLinkDataAppLinkInfo extends Model
{
    protected $internal_gapi_mappings = [];
    protected $appLogoImageType = Image::class;
    protected $appLogoImageDataType = '';
    protected $appTargetType = AppLinkDataAppLinkInfoAppTarget::class;
    protected $appTargetDataType = '';
    protected $descriptionType = LocalizedString::class;
    protected $descriptionDataType = '';
    protected $titleType = LocalizedString::class;
    protected $titleDataType = '';
    /**
     * @var array|Image|mixed|null
     */
    private $appLogoImage;
    /**
     * @var array|AppLinkDataAppLinkInfoAppTarget|mixed|null
     */
    private $appTarget;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $description;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $title;


    public function setAppLogoImage(Image $appLogoImage)
    {
        $this->appLogoImage = $appLogoImage;
    }
    public function getAppLogoImage()
    {
        return $this->appLogoImage;
    }
    public function setAppTarget(AppLinkDataAppLinkInfoAppTarget $appTarget)
    {
        $this->appTarget = $appTarget;
    }
    public function getAppTarget()
    {
        return $this->appTarget;
    }
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setTitle(LocalizedString $title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
}