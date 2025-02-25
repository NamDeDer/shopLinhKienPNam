<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\CartService;
use App\Http\Services\Menu\MenuServive;
use App\Models\Product; 
use Illuminate\Support\Facades\Session;
class MainController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;
    public function __construct(SliderService $slider, MenuServive $menu, ProductService $product){
        $this->slider=$slider;
        $this->menu=$menu;
        $this->product=$product;
    }


    public function index(){
        return view('home', [
            'title'=>'Shop Máy Tính Phương Nam',
            'sliders'=>$this->slider->show(),
            'menus'=>$this->menu->show(),
            'products'=>$this->product->get(),
        ]);
    }

    public function loadProduct(Request $request)
    {
        $page = $request->input('page', 0);
        $result = $this->product->get($page);
        if (count($result) != 0) {
            $html = view('products.list', ['products' => $result ])->render();

            return response()->json([ 'html' => $html ]);
        }

        return response()->json(['html' => '' ]);
    }
}
