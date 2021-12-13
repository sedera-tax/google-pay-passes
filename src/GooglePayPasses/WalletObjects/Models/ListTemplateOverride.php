<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\FieldSelector;

class ListTemplateOverride extends Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $firstRowOptionType = FirstRowOption::class;
    protected $firstRowOptionDataType = '';
    protected $secondRowOptionType = FieldSelector::class;
    protected $secondRowOptionDataType = '';
    protected $thirdRowOptionType = FieldSelector::class;
    protected $thirdRowOptionDataType = '';
    /**
     * @var array|FirstRowOption|mixed|null
     */
    private $firstRowOption;
    /**
     * @var array|FieldSelector|mixed|null
     */
    private $secondRowOption;
    /**
     * @var array|FieldSelector|mixed|null
     */
    private $thirdRowOption;


    public function setFirstRowOption(FirstRowOption $firstRowOption)
    {
        $this->firstRowOption = $firstRowOption;
    }
    public function getFirstRowOption()
    {
        return $this->firstRowOption;
    }
    public function setSecondRowOption(FieldSelector $secondRowOption)
    {
        $this->secondRowOption = $secondRowOption;
    }
    public function getSecondRowOption()
    {
        return $this->secondRowOption;
    }
    public function setThirdRowOption(FieldSelector $thirdRowOption)
    {
        $this->thirdRowOption = $thirdRowOption;
    }
    public function getThirdRowOption()
    {
        return $this->thirdRowOption;
    }
}