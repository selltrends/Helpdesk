<?php

namespace Atopt\Helpdesk\Model\ResourceModel\Ticket;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Constructor
     * Configures collection
     *
     * @return void
     */
	
    protected function _construct()
    {
        $this->_init('Atopt\Helpdesk\Model\Ticket', 'Atopt\Helpdesk\Model\ResourceModel\Ticket');
    }
}