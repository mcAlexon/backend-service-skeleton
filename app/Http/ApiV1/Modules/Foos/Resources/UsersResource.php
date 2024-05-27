<?php

namespace App\Http\ApiV1\Modules\Foos\Resources;

use App\Domain\Users\Models\User;
use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin User
 */
class UsersResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }
}
