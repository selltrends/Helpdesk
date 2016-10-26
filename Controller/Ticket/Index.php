<?php

namespace Atopt\Helpdesk\Controller\Ticket;

class Index extends \Atopt\Helpdesk\Controller\Ticket
{

	/**
	 * @return \Magento\Framework\View\Result\Page
	 */
	
	public function execute()
	{
		$resultPage = $this->resultPageFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
		return $resultPage;
		/* $this->_redirect('wishlist');*/
	}
}