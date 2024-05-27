<?php

namespace App\Domain\Users\Models\Tests\Factory;

use App\Domain\Users\Models\User;
use Ensi\LaravelTestFactories\BaseModelFactory;

class UsersFactory extends BaseModelFactory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->title(),
            'email' => $this->faker->title(),
            'password' => $this->faker->title(),
        ];
    }
}