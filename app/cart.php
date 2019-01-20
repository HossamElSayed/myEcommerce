<?php


namespace App;


class Cart
{
    public $items=null;
    public $totalQty=0;
    public $totalPrice=0;

    public function __construct($oldcart)
    {
        if($oldcart)
        {
            $this->items=$oldcart->items;
            $this->totalQty=$oldcart->totalQty;
            $this->totalPrice=$oldcart->totalPrice;
        }

    }
    public function add($item,$id)
    {
        $storeditem=['Qty'=>0,'price'=>$item->price,'item'=>$item];
        if($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storeditem = $this->items[$id];
            }
        }
            $storeditem['Qty']++;
            $storeditem['price']=$item->price*$storeditem['Qty'];
            $this->items[$id]=$storeditem;
            $this->totalQty++;
            $this->totalPrice +=$item->price;

    }

}