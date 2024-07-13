<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CatergoryResources;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        // return parent::toArray(array_push($request, $request['categories'] = CatergoryResources::collection($this->productCategories)));
        return [
            "unique_id"	=> $this->unique_id,
            "admin_id"	=> $this->admin_id,
            "brand_id"	=> $this->brand_id,
            "product_name"	=> $this->product_name,
            "product_price"	=> $this->product_price,
            "product_discount_price" => $this->product_discount_price,
            "promo_id" => $this->promo_id,
            "product_image_1" => $this->product_image_1,
            "categories"  => CatergoryResources::collection($this->productCategories),
        ];
    }
}
