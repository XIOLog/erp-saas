<?php

namespace Database\Seeders;

use App\Repositories\AccountRepository;
use App\Repositories\UserRepository;
use Illuminate\Database\Seeder;

class DemoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accounts = app(AccountRepository::class);
        $users = app(UserRepository::class);

        $account = $accounts->firstOrCreateByName('Demo Workshop');

        $users->createForAccount($account, [
            'name' => 'Demo User',
            'email' => 'demo@example.com',
            'password' => 'password',
        ]);
    }
}
