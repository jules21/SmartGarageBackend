<?php

namespace App\Http\Resources\Mechanician;

use Illuminate\Http\Resources\Json\JsonResource;

class MechanicianResource extends JsonResource
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
        return[
            'names' => $this->names,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            // 'garage' => $this->garage->name
            'href' => [
                'specialities' => route('specialities.index', $this->id)
            ]
        ];
    }
}
