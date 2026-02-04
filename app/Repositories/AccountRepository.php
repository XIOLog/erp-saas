<?php

namespace App\Repositories;

use App\Models\Account;

class AccountRepository
{
    public function findById(int $id): ?Account
    {
        return Account::query()->find($id);
    }

    public function firstOrCreateByName(string $name): Account
    {
        return Account::query()->firstOrCreate([
            'name' => $name,
        ]);
    }
}
