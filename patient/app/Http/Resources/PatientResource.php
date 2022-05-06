<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            "id"=> $this->id,
            "medicine"=> $this->medicine,
            "notes"=> $this->notes,
            "img"=> $this->img ? asset($this->img):"",
            "user"=> PatientResource::collection($this->whenLoaded('patient_id')),

        ];
    }
}
