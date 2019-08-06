<?php

namespace App\Http\Resources\Garage;

use Illuminate\Http\Resources\Json\Resource;

class GarageCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
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
            'location' =>$this->location           // 'href' =>[
            //     'link' => route('api.garages.show', $this->id)
            //     // 'mechanicians' => route('garage.mechanicians', $this->id),
            //     // 'services' => route('garages.index', $this->id),
            // ]
        ];
    }
}
