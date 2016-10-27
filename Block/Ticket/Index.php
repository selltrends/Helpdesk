<?php

namespace Atopt\Helpdesk\Block\Ticket;

class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\Stdlib\DateTime
     */
    protected $dateTime;
    /**
     * @var \Magento\Customer\Model\Session
     */
    protected $customerSession;
    /**
     * @var \Atopt\Helpdesk\Model\TicketFactory
     */
    /*protected $ticketFactory;*/
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Stdlib\DateTime $dateTime,
        \Magento\Customer\Model\Session $customerSession,
        /*\Atopt\Helpdesk\Model\TicketFactory $ticketFactory,*/
        array $data = []
    )
    {
        $this->dateTime = $dateTime;
        $this->customerSession = $customerSession;
        /*$this->ticketFactory = $ticketFactory;*/
        parent::__construct($context, $data);
    }
    
    protected function _prepareLayout()
    {
    	$this->pageConfig->getTitle()->set(__('Helpdesk Tickets'));
    	return parent::_prepareLayout();
    }
    
    /**
     * @return \Atopt\Helpdesk\Model\ResourceModel\Ticket\Collection
     */
    public function getTickets()
    {
        /*return $this->ticketFactory
            ->create()
            ->getCollection()
            ->addFieldToFilter('customer_id', $this->customerSession->getCustomerId());
         */
    	return "Hello";
    }
    
    public function getSeverities()
    {
        /*return \Atopt\Helpdesk\Model\Ticket::getSeveritiesOptionArray();*/
    	return "world";
    }
}