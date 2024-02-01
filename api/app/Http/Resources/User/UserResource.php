<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'id'        => $this->id,
            'username'  => $this->username,
            'email'     => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'role'      => $this->role,
            'created_at'=> $this->created_at,
        ];
    }
}
