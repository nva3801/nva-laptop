<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
            ],
            'slug' => [
                'required',
                'string',
            ],
            'category_id' => [
                'required',
            ],
            'description' => [
                'required',
                'string',
            ],
            'trailer' => [
                'nullable',
            ],
            'manufacturer' => [
                'required',
                'string',
            ],
            'partNumber' => [
                'required',
                'string',
            ],
            'color' => [
                'required',
                'string',
            ],
            'cpu' => [
                'required',
                'string',
            ],
            'chipset' => [
                'required',
                'string',
            ],
            'ram' => [
                'required',
                'string',
            ],
            'slotram' => [
                'required',
                'string',
            ],
            'maxram' => [
                'required',
                'string',
            ],
            'vga' => [
                'required',
                'string',
            ],
            'hard_disk' => [
                'required',
                'string',
            ],
            'security' => [
                'required',
                'string',
            ],
            'screen' => [
                'required',
                'string',
            ],
            'webcam' => [
                'required',
                'string',
            ],
            'audio' => [
                'required',
                'string',
            ],
            'wireless' => [
                'required',
                'string',
            ],
            'ports' => [
                'required',
                'string',
            ],
            'battery' => [
                'required',
                'string',
            ],
            'size' => [
                'required',
                'string',
            ],
            'weight' => [
                'required',
                'string',
            ],
            'operating_system' => [
                'required',
                'string',
            ],
            'accessory' => [
                'required',
                'string',
            ],
            'price_new' => [
                'required',
                'string',
            ],
            'price_old' => [
                'required',
                'string',
            ],
            'image' => [
                'required',
                'file',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}