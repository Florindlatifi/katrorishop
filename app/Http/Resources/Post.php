<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Post extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'price' => $this->price,
            'contact' => $this->contact,
            'location' => $this->location,
            'user' => $this->user,
            'facebook' => $this->facebook,
            'img_1' => $this->img_1,
            'img_2' => $this->img_2,
            'img_3' => $this->img_3,
            'img_4' => $this->img_4,
            'img_5' => $this->img_5,
            'created' => $this->created_at,
            'updated' => $this->updated_at,
        ];
    }
}
