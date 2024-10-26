<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class BookResource extends JsonResource
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
           'title' => $this->title,
           'subtitle' => $this->subtitle,
            'ISBN' => $this->isbn,
            'description' => Str::limit($this->description, 20)
        ];
    }
}
