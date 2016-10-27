<?php

namespace Atopt\Helpdesk\Test\Unit\Model;

class TicketTest extends \PHPUnit_Framework_TestCase
{
    protected $objectManager;
    protected $ticket;
    public function setUp()
    {
        $this->objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->ticket = $this->objectManager->getObject('Atopt\Helpdesk\Model\Ticket');
    }
    public function testGetSeveritiesOptionArray()
    {
        $this->assertNotEmpty(\Atopt\Helpdesk\Model\Ticket::getSeveritiesOptionArray());
    }
    public function testGetStatusesOptionArray()
    {
        $this->assertNotEmpty(\Atopt\Helpdesk\Model\Ticket::getStatusesOptionArray());
    }
    public function testGetStatusAsLabel()
    {
        $this->ticket->setStatus(\Atopt\Helpdesk\Model\Ticket::STATUS_CLOSED);
        $this->assertEquals(
            \Atopt\Helpdesk\Model\Ticket::$statusesOptions[\Atopt\Helpdesk\Model\Ticket::STATUS_CLOSED],
            $this->ticket->getStatusAsLabel()
        );
    }
    public function testGetSeverityAsLabel()
    {
        $this->ticket->setSeverity(\Atopt\Helpdesk\Model\Ticket::SEVERITY_MEDIUM);
        $this->assertEquals(
            \Atopt\Helpdesk\Model\Ticket::$severitiesOptions[\Atopt\Helpdesk\Model\Ticket::SEVERITY_MEDIUM],
            $this->ticket->getSeverityAsLabel()
        );
    }
}