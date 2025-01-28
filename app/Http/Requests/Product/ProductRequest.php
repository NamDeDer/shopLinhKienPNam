<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>'required',
            'thumb'=>'required',
            'menu_id'=>'required',
            'price' => 'required|numeric|min:0',
            'price_sale' => 'numeric|min:0'
        ];
    }
    public function messages():array{
        return [
            'name.required'=>'Tên sản phẩm không được để trống',
            'thumb.required' => 'Ảnh sản phẩm không được trống',
            'menu_id.required' => 'Danh mục không được trống',
            'price.required' => 'Giá không được trống',
            'price.numeric' => 'Giá phải là số',
            'price.min' => 'Giá không được âm',
            'price_sale.numeric' => 'Giá khuyến mãi phải là số',
            'price_sale.min' => 'Giá khuyến mãi không được âm'
        ];
    }
}
