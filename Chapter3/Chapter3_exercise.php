<?php

$price = 0;
$tax = 0;
$price_with_tax = 0;


$price = 1800;
$tax = $price * 0.1;
$price_with_tax = $price + $tax;

echo "{$price} + {$tax} = {$price_with_tax}\n";


$family_name = "hoge";
$first_name = "foo";

echo "{$first_name}{$family_name}\n";