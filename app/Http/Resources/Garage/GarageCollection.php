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
            'href' =>[
                // 'mechanicians'=> route(api/garages/{garage})
                'mechanicians' => route('garage.mechanicians', $this->id),
                'services' => route('garages.index', $this->id),
            ]
        ];
    }
}
