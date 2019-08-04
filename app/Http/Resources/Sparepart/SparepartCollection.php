<?php

namespace App\Http\Resources\Sparepart;

use Illuminate\Http\Resources\Json\Resource;

class SparepartCollection extends Resource
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
                'link' => route('api.spareparts.show', $this->id)
            ]
        ];
    }
}
