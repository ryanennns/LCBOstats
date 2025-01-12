<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlcoholResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'permanent_id' => $this->permanent_id,
            'title' => $this->title,
            'brand' => $this->brand,
            'category' => $this->category,
            'subcategory' => $this->subcategory,
            'price' => $this->price,
            'volume' => $this->volume,
            'price_index' => $this->price_index,
            'alcohol_content' => $this->alcohol_content,
            'country' => $this->country,
            'url' => $this->url,
            'thumbnail_url' => $this->thumbnail_url,
            'image_url' => $this->image_url,
            'rating' => $this->rating,
            'reviews' => $this->reviews,
            'out_of_stock' => (bool)$this->out_of_stock,
            'description' => $this->description,
            'is_buyable' => $this->is_buyable,
            'price_changes' => $this->priceChanges
        ];
    }
}
