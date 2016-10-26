<?php

namespace Atopt\Helpdesk\Controller;

use Magento\Framework\App\Action\Context;
use Magento\Customer\Helper\Session\CurrentCustomer;
use Magento\Framework\View\Result\PageFactory;

class Ticket extends \Magento\Framework\App\Action\Action
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
    	\Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer,
        PageFactory $resultPageFactory
    ) {
    	$this->customerSession = $currentCustomer;
    	parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    
    
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    
    public function execute()
    {
    	$resultPage = $this->resultPageFactory->create();
    	$block = $resultPage->getLayout()->getBlock('ticket_index');
    	return $resultPage;
       /* $this->_redirect('wishlist');*/
    }
}