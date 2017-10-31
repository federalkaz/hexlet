<?php

/*
Реализуйте в классе Shop\Cart следующие методы:

add - для добавления товаров в корзину
count - для получения количества товаров в корзине
total - для получения общей суммы товаров в корзине
remove - для удаления товара из корзины по id
clear - для очистки корзины
*/

class Cart
{
    private $items = [];

    // BEGIN (write your solution here)
    public function add(Item $item)
    {
        $this->items[] = $item;
    }

    public function count()
    {
        return count($this->items);
    }

    public function total()
    {
        return array_reduce($this->items, function ($sum, $item) {
            return $sum + $item->price;
        }, 0);
    }

    public function remove($id)
    {
        $this->items = array_values(array_filter($this->items, function (Item $item) use ($id) {
            return $id !== $item->id;
        }));
    }

    public function clear()
    {
        $this->items = [];
    }
    // END
}

