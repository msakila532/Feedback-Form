<?php

namespace Uivendor\Feedback\Model;

use Magento\Framework\Model\AbstractModel;
class Feedback extends AbstractModel
{
    /** Cache tag */
    const CACHE_TAG = 'ziffity_customer_feedback';

    /**
     * Initialise resource model
     * @codingStandardsIgnoreStart
     */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd


        $this->_init(\Uivendor\Feedback\Model\ResourceModel\Feedback::class);

    }

    }
