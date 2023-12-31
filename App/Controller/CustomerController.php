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

    public function store(array $data): void
    {
        $this->customer->create($data);
    }

    public function edit(array $data, int $id): array
    {
        return $this->customer->update($data, $id);
    }

    public function destroy(int $id): void
    {     
        $this->customer->delete($id);
    }
}
