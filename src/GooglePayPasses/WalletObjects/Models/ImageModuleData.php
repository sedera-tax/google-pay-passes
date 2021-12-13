<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class ImageModuleData extends Model
{
    protected $internal_gapi_mappings = [];
    public $id;
    protected $mainImageType = Image::class;
    protected $mainImageDataType = '';
    /**
     * @var array|Image|mixed|null
     */
    private $mainImage;


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setMainImage(Image $mainImage)
    {
        $this->mainImage = $mainImage;
    }
    public function getMainImage()
    {
        return $this->mainImage;
    }
}