<?php

namespace App\Http\Resources;

use App\Http\Resources\Category;
use App\Http\Resources\DeliveryType;
use App\Http\Resources\PlaceType;
use App\Http\Resources\RCM;
use App\Http\Resources\Region;
use Illuminate\Http\Resources\Json\JsonResource;

class Place extends JsonResource
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
            'name' => $this->name,
            'slug' => $this->slug,
            'address' => [
                'postal' => $this->hide_address ? false : [
                    'line_1' => $this->address,
                    'line_2' => $this->address_2,
                    'city' => $this->city,
                    'province' => $this->province,
                    'postal_code' => $this->postalCode,
                    'country_code' => $this->countryCode,
                ],
                'administrative' => [
                    'region' => new Region($this->region),
                    'rcm' => new RCM($this->rcm),
                ],
            ],
            'geo' => $this->hide_address == true ? false : [
                'lat' => $this->lat,
                'lng' => $this->long,
                'plus_code' => $this->plus_code,
            ],
            'contact' => [
                'email' => is_null($this->email) ? null : false,
                'phone' => [
                    'main' => is_null($this->phoneNumber) ? null : false,
                    'additionnal' => is_null($this->additionnalPhoneNumber) ? null : false,
                ],
                'urls' => [
                    'site' => $this->url,
                    'facebook' => $this->facebook_url,
                ],
            ],
            'place_types' => PlaceType::collection($this->types),
            'categories' => Category::collection($this->categories),
            'covid19' => [
                'delivery_zone' => $this->deliveryZone,
                'delivery_types' => DeliveryType::collection($this->delivery),
            ],
            'source' => [
                'public' => is_null($this->partner_id),
                'partner' =>  is_null($this->partner) ? null : false, //new Partner($this->partner),
            ],
            'url' => "https://solutionlocale.ca/places/{$this->slug}",
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
