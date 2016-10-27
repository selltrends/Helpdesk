<?php
namespace Atopt\Helpdesk\Model\Ticket\Grid;

class Severity implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return \Atopt\Helpdesk\Model\Ticket::getSeveritiesOptionArray();
    }
}