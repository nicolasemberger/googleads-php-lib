<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getPremiumRatesByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201805\PremiumRatePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201805\PremiumRatePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201805\PremiumRatePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201805\PremiumRatePage $rval
     * @return \Google\AdsApi\Dfp\v201805\getPremiumRatesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
