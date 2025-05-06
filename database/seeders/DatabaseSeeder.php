<?php

namespace Database\Seeders;

use App\Models\Contract;
use App\Models\Item;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        Contract::factory()->create();

        Item::factory()->create();

        $contract = Contract::first();
        $contract->items()->attach(
            Item::first(),
            [
                'role' => 'supplier1',
            ]
        );
        $contract->items()->attach(
            Item::first(),
            [
                'role' => 'supplier2',
            ]
        );
        $contract->items()->attach(
            Item::first(),
            [
                'role' => 'supplier3',
            ]
        );
    }
}
