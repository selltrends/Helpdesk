<?php

namespace Atopt\Helpdesk\Controller\Ticket;


class Index extends \Atopt\Helpdesk\Controller\Ticket
{

	public function __construct(
			\Magento\Framework\App\Action\Context $context,
			\Magento\Customer\Model\Session $customerSession,
			\Magento\Framework\View\Result\PageFactory $resultPageFactory
		) {
			parent::__construct(
					$context,
					$customerSession,
					$resultPageFactory
			);
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