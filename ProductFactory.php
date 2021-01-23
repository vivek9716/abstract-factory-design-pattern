<?php

abstract class ProductFactory {

    abstract function getProduct($cust);
    static function getFactoryProduct($factoryType) {
        return $factoryType;
    }


}