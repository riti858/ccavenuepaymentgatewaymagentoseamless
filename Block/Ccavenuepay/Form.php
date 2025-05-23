<?php

/*
  Payment Name      : CCAvenue MCPG
  Description	    : Extends Payment with  CCAvenue MCPG.
  CCAvenue Version  : MCPG-2.0
  Author	    : CCAvenues
  Copyright         : © 2009-2017
 */

namespace Magento\Ccavenuepay\Block\Ccavenuepay;

/**
 * Ccavenuepay link iframe block
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Form extends \Magento\Payment\Block\Form {

    /**
     * @var string
     */
    protected $_template = 'ccavenuepay/info.phtml';

    /**
     * Get frame action URL
     *
     * @return string
     */
    public function getFrameActionUrl() {
        return $this->getUrl('ccavenuepay/ccavenuepay/form', ['_secure' => true]);
    }

}
class Form extends \Magento\Payment\Block\Form [

  /**
  * @var string
  */
  protected $_template = 'ccavenuepay/info.phtml';

  /**
   * Get frame action URL
   * 
   * @return sting
   */
   public function getFrameActionUrl() {
     return $this-.getUrl('ccavenuepay/form', ['_secure'=> true]);
   }  
