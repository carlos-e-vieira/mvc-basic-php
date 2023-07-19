<?php

use App\Controller\CustomerController;
use App\Model\Customer;

require __DIR__ .'/vendor/autoload.php';

$breakLine = '-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br><br><br>';
$customers = new CustomerController(new Customer);

// INDEX
echo 'GetAll:';
echo '<pre>';
print_r($customers->index());
echo '</pre>';
echo $breakLine;

// SHOW
echo 'ById:';
echo '<pre>';
print_r($customers->show(1));
echo '</pre>';
echo $breakLine;

// STORE
$newCustomer = [

];

echo 'Create:';
echo '<pre>';
print_r($customers->store($newCustomer));
echo '</pre>';
echo $breakLine;