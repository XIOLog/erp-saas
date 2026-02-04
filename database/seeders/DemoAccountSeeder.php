<?php

namespace Database\Seeders;

use App\Repositories\AccountRepository;
use Illuminate\Database\Seeder;

class DemoAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accounts = app(AccountRepository::class);

        $accounts->firstOrCreateByName('Demo Workshop');
    }
}
