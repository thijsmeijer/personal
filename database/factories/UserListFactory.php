<?php

namespace Database\Factories;

use App\enums\ListStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserList>
 */
class UserListFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->name(),
            'description' => fake()->paragraph(),
            'status' => ListStatus::Private,
        ];
    }

    public function visible(): self
    {
        return $this->state([
            'status' => ListStatus::Public,
        ]);
    }
}
