<?php

namespace App\Domain\Users\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Users\Models\Tests\Factory\UsersFactory;
/**
* @property int $id
* @property string $name username
* @property string $email user email
* @property string $password user password
 *
* @property CarbonInterface|null $created_at
* @property CarbonInterface|null $updated_at
 */
class User extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password'];

    public static function factory(): UsersFactory
    {
        return UsersFactory::new();
    }
}