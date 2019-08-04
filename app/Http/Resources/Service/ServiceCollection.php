<?php

namespace App\Http\Resources\Service;

use Illuminate\Http\Resources\Json\Resource;

class ServiceCollection extends Resource
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
            'description' =>$this->description,
        ];
                   
    }
}
