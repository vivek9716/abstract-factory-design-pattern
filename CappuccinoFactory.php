<?php

class CappuccinoFactory extends ProductFactory {

    public function getProduct($cust) {
        return new Cappuccino($cust['milk'], $cust['sugar'], $cust['coffee']);
    }

}