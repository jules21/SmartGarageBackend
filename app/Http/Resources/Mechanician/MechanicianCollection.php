<?php

namespace App\Http\Resources\Mechanician;

// use Illuminate\Http\Resources\Json\ResourceCollection;
Use Illuminate\Http\Resources\Json\Resource ;

class MechanicianCollection extends Resource
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
        return[
            'id' => $this->id,
            'names' => $this->names,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            // 'href' => [
            //     'link' => route('api.mechanicians.show', $this->id)
            // ]
        ];
    }
}
