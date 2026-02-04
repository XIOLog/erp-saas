<?php

namespace App\Services;

use App\Models\Account;
use RuntimeException;

class AccountContext
{
    private ?Account $account = null;

    public function set(Account $account): void
    {
        $this->account = $account;
    }

    public function get(): Account
    {
        if (! $this->account instanceof Account) {
            throw new RuntimeException('Account context has not been initialized.');
        }

        return $this->account;
    }

    public function id(): int
    {
        return $this->get()->id;
    }
}
