<?php

namespace Atopt\Helpdesk\Controller\Ticket;

class Index extends \Atopt\Helpdesk\Controller\Ticket
{
    public function execute()
    {
        $resultPage = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}