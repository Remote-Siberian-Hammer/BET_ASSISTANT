<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SessionLanguageResource extends JsonResource
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
            'LanguageId' => $this->LanguageId,
            'UserId' => $this->UserId,
            'CreatedAt' => $this->created_at,
        );
    }
}