<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Slider\SliderRequest;
use App\Http\Services\Slider\SliderService;
use App\Models\Slider;
class SliderController extends Controller
{
    protected $slider;

    public function __construct(SliderService $slider){
        $this->slider = $slider;
    }
    public function create(){
        return view('admin.slider.add', [
            'title' => 'Thêm SLider mới'
         ]);
    }

    public function store(SliderRequest $request){
        $this->slider->insert($request);
        return redirect()->back();
    }

    public function index(){
        return view('admin.slider.list', [
            'title' => 'Danh sách slider',
            'sliders' => $this->slider->get()
        ]);
    }

    public function show(Slider $slider)
    {
        return view('admin.slider.edit', [
            'title' => 'Chỉnh Sửa Slider',
            'slider' => $slider
        ]);
    }

    public function update(SliderRequest $request, Slider $slider){
        $result = $this->slider->update($request,$slider);
        if ($result) {
            return redirect('/admin/sliders/list');
        }

        return redirect()->back();
    }

    public function destroy(Request $request){
        $result = $this->slider->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công Slider'
            ]);
        }

        return response()->json([ 'error' => true ]);
    }
}
