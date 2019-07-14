<?php
class Drink extends Item
{
    private $discount = 10 ;
    protected $price ;
    protected $title ;



    public function __construct($title, $price)
    {
        parent::__construct($title, $price);
    }

    public static function getType()
    {
        return 'drink';
    }

    public function getPrice()
    {
        return $this->price - $this->discount;
    }
    public function getSummary()
    {
        return $this->title . ' : ' . $this->getPrice() . ' / ' . self::getType();

    }
}