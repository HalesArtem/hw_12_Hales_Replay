<?php


abstract class Item implements Writable
{
    protected $title ;
    protected static $type ;
    protected $price ;


    public function __construct($title,$price)
    {
        $this->title = $title;
        $this->price = $price;

    }
    public static function setType($type)
    {
          self::$type = $type;
    }
    public function getTitle()
    {
        return $this->title ;
    }
    public static function getType()
    {
        return static::$type ='base_item';
    }
    abstract public function getPrice();

    abstract public function getSummary();

}