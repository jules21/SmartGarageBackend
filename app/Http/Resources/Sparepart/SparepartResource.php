<?php

namespace App\Http\Resources\Sparepart;

use Illuminate\Http\Resources\Json\JsonResource;

class SparepartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' =>$this->name,
            'address' =>$this->address,
            'phone' =>$this->phone,
            'description' =>$this->description,
        ];
    }
}
