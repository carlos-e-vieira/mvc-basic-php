<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Customer;

class CustomerController
{
    private $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function index(): array
    {
        return $this->customer->getAll();
    }

    public function show(int $id): array
    {     
        return $this->customer->getById($id);
    }

    public function store(array $data): array
    {
        return $this->customer->create($data);
    }
}
