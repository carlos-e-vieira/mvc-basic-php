<?php

declare(strict_types=1);

namespace App\Model;

class Customer
{
    private $customers = [
        0 => [
            'name' => 'Carlos Vieira',
            'email' => 'carlos@teste.com',
            'phone' => '1185859696',
        ],
        1 => [
            'name' => 'Mariazinha',
            'email' => 'maria@teste.com',
            'phone' => '11988887777',
        ]
    ];

    public function getAll(): array
    {
        return $this->customers;
    }

    public function getById(int $id): array
    {
        return $this->customers[$id];
    }

    public function create(array $data): void
    {
        $this->customers[]= $data;
    }
}
