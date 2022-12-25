<?php
require('connect.php');
include('function.php');

$product = fetch("select * from product where id = '9'");
print_r($product);
?>