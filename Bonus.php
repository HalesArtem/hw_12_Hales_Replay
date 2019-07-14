<?php


class Bonus implements Writable
{
    protected $title;
    protected $type;
    protected $description;

    public function __construct($title, $type, $description)
    {
        $this->title = $title;
        $this->type = $type;
        $this->description = $description;
    }

    public function getSummary()
    {
        return $this->title . '  :  ' . $this->type . '  /  ' . $this->description ;
    }
}