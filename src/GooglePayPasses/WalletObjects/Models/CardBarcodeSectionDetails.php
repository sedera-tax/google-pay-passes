<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class CardBarcodeSectionDetails extends Model
{
    protected $internal_gapi_mappings = [];
    protected $firstBottomDetailType = BarcodeSectionDetail::class;
    protected $firstBottomDetailDataType = '';
    protected $firstTopDetailType = BarcodeSectionDetail::class;
    protected $firstTopDetailDataType = '';
    protected $secondTopDetailType = BarcodeSectionDetail::class;
    protected $secondTopDetailDataType = '';
    /**
     * @var array|BarcodeSectionDetail|mixed|null
     */
    private $firstBottomDetail;
    /**
     * @var array|BarcodeSectionDetail|mixed|null
     */
    private $firstTopDetail;
    /**
     * @var array|BarcodeSectionDetail|mixed|null
     */
    private $secondTopDetail;


    public function setFirstBottomDetail(BarcodeSectionDetail $firstBottomDetail)
    {
        $this->firstBottomDetail = $firstBottomDetail;
    }
    public function getFirstBottomDetail()
    {
        return $this->firstBottomDetail;
    }
    public function setFirstTopDetail(BarcodeSectionDetail $firstTopDetail)
    {
        $this->firstTopDetail = $firstTopDetail;
    }
    public function getFirstTopDetail()
    {
        return $this->firstTopDetail;
    }
    public function setSecondTopDetail(BarcodeSectionDetail $secondTopDetail)
    {
        $this->secondTopDetail = $secondTopDetail;
    }
    public function getSecondTopDetail()
    {
        return $this->secondTopDetail;
    }
}