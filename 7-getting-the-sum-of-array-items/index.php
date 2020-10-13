<?php

$numbers = [2, 4, 6]; // 12
$numbers = [2, 4, 6, '1alex']; // 13
// echo array_sum($numbers);

// echo (int) '1alex'; // 1

// echo (int) 'alex1'; // 0


function add()
{
    // var_dump(func_get_args());
    return array_sum(func_get_args());
}

// echo add(1, 2, 3); // 6

class Item
{
    protected $cost;

    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCost()
    {
        return $this->cost;
    }
}

class Cart
{
    protected $items = [];

    public function add(Item $item)
    {
        $this->items[] = $item;

        return $this;
    }

    public function total()
    {
        /*
        1)
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getCost();
        }
        return $total;
        */

        // does not work since we can't sum objects with array_sum
        // return array_sum($this->items); // 0

        // 2)
        // $items = array_map(function ($item) {
        //     return $item->getCost();
        // }, $this->items);

        // var_dump($items);
        // die();

        // 3)
        return array_sum(array_map(function ($item) {
            return $item->getCost();
        }, $this->items));
    }
}

$item1 = (new Item)->setCost(10);
$item2 = (new Item)->setCost(20);

$cart = (new Cart)->add($item1)->add($item2);

echo $cart->total();


// var_dump($item1);
var_dump($item2);
