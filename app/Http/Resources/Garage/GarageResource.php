<?php

namespace App\Http\Resources\Garage;

use Illuminate\Http\Resources\Json\JsonResource;

class GarageResource extends JsonResource
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
            'href' =>[
                'mechanicians' => $this->mechanicians,
                'services' => $this->services,
            ]
        ];
    }
}
