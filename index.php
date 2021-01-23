<?php

require_once './loadClass.php';

ProductFactory::getFactoryProduct(CappuccinoFactory::getProduct(
    ['milk' => 1, 'sugar' => 1, 'coffee' => 1]
))->make();