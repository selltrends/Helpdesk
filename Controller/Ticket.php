<?php

namespace Atopt\Helpdesk\Controller;

use Magento\Framework\App\Action\Context;
use Magento\Customer\Model\Session;
use Magento\Framework\View\Result\PageFactory;

abstract class Ticket extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
	
    protected $resultPageFactory;
    
    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    
    public function __construct(
        Context $context,
    	Session $customerSession,
        PageFactory $resultPageFactory
    ) {
    	$this->customerSession =$customerSession;
    	parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    
    /**
     * Check customer authentication for some actions
     *
     * @param \Magento\Framework\App\RequestInterface $request
     * @return \Magento\Framework\App\ResponseInterface
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
    	if (!$this->customerSession->authenticate()) {
    		$this->_actionFlag->set('', 'no-dispatch', true);
    		if (!$this->customerSession->getBeforeUrl()) {
    			$this->customerSession->setBeforeUrl($this->_redirect->getRefererUrl());
    		}
    	}
    	return parent::dispatch($request);
    }
}