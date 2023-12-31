<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "duration" => __("words." . $this->duration),
            "date" => $this->date ?? "",
            "from" => date('h:i A', strtotime($this->from)),
            "to" => date('h:i A', strtotime($this->to)),
            "created_at" => $this->created_at,
        ];
    }
}
