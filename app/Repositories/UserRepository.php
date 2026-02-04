<?php

namespace App\Repositories;

use App\Models\Account;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RuntimeException;

class UserRepository
{
    public function current(): User
    {
        $user = Auth::user();

        if (! $user instanceof User) {
            throw new RuntimeException('Authenticated user is required.');
        }

        return $user;
    }

    /**
     * @param  array{email: string, name: string, password?: string}  $attributes
     */
    public function createForAccount(Account $account, array $attributes): User
    {
        return User::query()->firstOrCreate(
            [
                'email' => $attributes['email'],
            ],
            [
                'account_id' => $account->id,
                'name' => $attributes['name'],
                'password' => Hash::make($attributes['password'] ?? 'password'),
            ],
        );
    }
}
