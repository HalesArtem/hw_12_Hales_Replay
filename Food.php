<?php


class Food extends Item
{
    protected $title ;
    protected $price ;

    public function __construct($title, $price)
    {
        parent::__construct($title, $price);
    }

    public static function getType()
    {
        return 'food';
    }
    public function getPrice()
    {
        return $this->price - 10 ;
    }

    public function getSummary()
    {
        return $this->title . ': ' . $this->getPrice() . ' / ' . self::getType();
    }
}