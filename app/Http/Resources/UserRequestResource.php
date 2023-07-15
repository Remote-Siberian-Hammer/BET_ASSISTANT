<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserRequestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return array(
            'Id' => $this->id,
            'FirstName' => $this->FirstName,
            'LastName' => $this->LastName,
            'Email' => $this->Email,
            'Phone' => $this->Phone,
            'CreatedAt' => $this->created_at,
        );
    }
}
