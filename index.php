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
    'name' => 'Flavio2',
    'email' => 'flavio@teste.com',
    'phone' => '1145456363',
];

echo 'Create:';
echo '<pre>';
$customers->store($newCustomer);
print_r($customers->index());
echo '</pre>';
echo $breakLine;

// UPDATE
$updateCustomer = [
    'name' => 'Raquel',
    'email' => 'raquel@teste.com',
    'phone' => '1123234477',
];

$idUpdateCustomer = 2;

echo 'Update:';
echo '<pre>';
print_r($customers->edit($updateCustomer, $idUpdateCustomer));
echo '</pre>';

echo 'Todos após a atalização:';
echo '<pre>';
print_r($customers->index());
echo '</pre>';
echo $breakLine;