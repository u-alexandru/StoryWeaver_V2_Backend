<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserLoginDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'name' => $this->username,
            'roles' => $this->roles->pluck('name'),
            'permissions' => $this->roles->pluck('permissions')->flatten()->pluck('name'),
            'email_verified' => $this->hasVerifiedEmail(),
        ];
    }
}
