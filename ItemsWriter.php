<?php


class ItemsWriter
{
    protected $items = [];

    public function addItem(Writable $items)
    {
         $this->items[] = $items;
    }
    public function write()
    {
        $products = '';

        foreach ($this->items as $item){
            $products .= $item->getSummary() . "\n";
        }
        return $products;
    }

}