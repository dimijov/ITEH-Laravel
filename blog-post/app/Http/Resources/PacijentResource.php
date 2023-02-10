<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PacijentResource extends JsonResource
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
            'ID: ' => $this->resource->id,
            'Ime: ' => $this->resource->ime,
            'Prezime: ' => $this->resource->prezime,
            'Dijagnoza: ' => $this->resource->dijagnoza,
            'Godine: ' => $this->resource->godine,
            'Lekar: ' => new LekarResource($this->resource->lekar)
        ];
    }
}
