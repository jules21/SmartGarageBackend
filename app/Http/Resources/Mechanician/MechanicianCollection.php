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
            'names' => $this->names,
            'email' => $this->email,
            'href' => [
                'link' => route('mechanicians.show', $this->id)
            ]
        ];
    }
}
