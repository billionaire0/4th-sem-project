<?php
class bookingDao
{
    private $customerName;
    private $date;
    private $time;
    private $address;
    private $contact;
    private $service;


    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }
    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setTime($time)
    {
        $this->time = $time;
    }
    public function getTime()
    {
        return $this->time;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setContact($contact)
    {
        $this->contact = $contact;
    }
    public function getContact()
    {
        return $this->contact;
    }
    public function setService($service)
    {
        $this->service = $service;
    }
    public function getService()
    {
        return $this->service;
    }
}
