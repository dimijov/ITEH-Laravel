<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GradResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID' => $this->resource->id,
            'Ime: ' => $this->resource->ime,
            'Drzava: ' => $this->resource->drzava,
            'Broj stanovnika: ' => $this->resource->brojStanovnika
        ];
    }
}
