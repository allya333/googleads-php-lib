<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemCampaignTargeting
{

    /**
     * @var int $TargetingCampaignId
     */
    protected $TargetingCampaignId = null;

    /**
     * @param int $TargetingCampaignId
     */
    public function __construct($TargetingCampaignId = null)
    {
      $this->TargetingCampaignId = $TargetingCampaignId;
    }

    /**
     * @return int
     */
    public function getTargetingCampaignId()
    {
      return $this->TargetingCampaignId;
    }

    /**
     * @param int $TargetingCampaignId
     * @return \Google\AdsApi\AdWords\v201609\cm\FeedItemCampaignTargeting
     */
    public function setTargetingCampaignId($TargetingCampaignId)
    {
      $this->TargetingCampaignId = (PHP_INT_SIZE === 4)
          ? floatval($TargetingCampaignId) : $TargetingCampaignId;
      return $this;
    }

}
