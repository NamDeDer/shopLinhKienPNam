<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class SLiderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules():array{
        return [
            'name'=>'required',
            'thumb'=>'required',
            'url'=>'required'
        ];
    }
    public function messages():array{
        return [
            'name.required'=>'Tiêu đề không được để trống',
            'thumb.required' => 'Ảnh slider không được trống',
            'url.required' => 'Đường dẫn không được trống',
        ];
    }
}