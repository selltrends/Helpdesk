<?php

namespace Atopt\Helpdesk\Controller\Adminhtml\Ticket;

class Grid extends \Atopt\Helpdesk\Controller\Adminhtml\Ticket
{
    public function execute()
    {
        $this->_view->loadLayout(false);
        $this->_view->renderLayout();
    }
}