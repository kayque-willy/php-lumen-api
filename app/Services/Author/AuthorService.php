<?php

namespace App\Services\Author;

use App\Services\AbstractService;

class AuthorService extends AbstractService
{
    public function create(array $data): array
    {
        $data['password'] = encrypt($data['password']);
        return $this->repository->create($data);
    }

    public function editBy(string $param, array $data): bool
    {
        $data['password'] = encrypt($data['password']);
        return $this->repository->editBy($param, $data);
    }
}
