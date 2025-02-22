<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Sahan Kaushalya',
            'email' => 'sahan@tute.lk',
            'password' => Hash::make('12345678'),
            'is_admin' => true,
        ]);
    }
}
