<?php

use App\Models\Account;
use App\Models\User;

test('guests are redirected to the login page', function () {
    $response = $this->get(route('dashboard'));
    $response->assertRedirect(route('login'));
});

test('authenticated users can visit the dashboard', function () {
    $account = Account::factory()->create([
        'name' => 'Acme Workshop',
    ]);

    $user = User::factory()->for($account)->create([
        'name' => 'Taylor Otwell',
    ]);
    $this->actingAs($user);

    $response = $this->get(route('dashboard'));
    $response->assertOk();
    $response->assertSeeText('Acme Workshop');
    $response->assertSeeText('Taylor Otwell');
});
