<?php

namespace Database\Seeders;

use App\enums\AccessLevel;
use App\Models\User;
use App\Models\UserList;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $devUser = User::factory()->create([
            'access_level' => AccessLevel::Admin->value,
            'name' => 'dev',
            'email' => config('auth.admin_user.email'),
            'password' => config('auth.admin_user.password'),
        ]);

        UserList::factory()->for($devUser)->create();

        $users = User::factory(10)->create();

        $users->each(function ($user) {
            UserList::factory()
                ->visible()
                ->for($user)
                ->create();
        });

    }
}
