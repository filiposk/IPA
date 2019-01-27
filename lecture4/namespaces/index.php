<?php

use \Inchoo\Catalog\Product as InchooProduct;
use \Magento\Catalog\Product as MagentoProduct;

include '../function.php';
require 'Inchoo/Catalog/Product.php';
require 'Magento/Catalog/Product.php';

$product = new InchooProduct();
echo $product->getType();

$product = new MagentoProduct();
echo $product->getType();