<?php
namespace Orangecat\RegisterUploadFile\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    private $_storeManager;

    const XML_FILE_UPLOAD = 'registeruploadfile/general/enabled';
    const XML_FILE_UPLOAD_ACCOUNT = 'registeruploadfile/general/account_enabled';
    const XML_FILE_UPLOAD_REQUIRED = 'registeruploadfile/general/isrequired';

    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager
    ) {
        $this->_encode = $context->getUrlEncoder();
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getCurrentStore()
    {
        return $this->_storeManager->getStore();
    }

    public function getAllowFileUpload($store = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_FILE_UPLOAD,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    public function getAllowFileUploadAccount($store = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_FILE_UPLOAD_ACCOUNT,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    public function isRequired($store = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_FILE_UPLOAD_REQUIRED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    public function getEncodeUrl($file)
    {
        return $this->_encode->encode($file);
    }

    public function getMediaUrl()
    {
        return $this->getCurrentStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . "customer";
    }
}
