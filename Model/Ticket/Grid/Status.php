<?php

namespace Atopt\Helpdesk\Model\Ticket\Grid;

class Status implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return \Atopt\Helpdesk\Model\Ticket::getStatusesOptionArray();
    }
}