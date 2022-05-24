<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;

final class UserCreatorWithoutRepository
{
    public function __invoke(array $data): User
    {
        return User::create($data);
    }
}