<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuServive;
use App\Http\Services\Slider\SliderService;  

class MenuUserController extends Controller
{
    protected $menuService;

    public function __construct(MenuServive $menuService, SliderService $sliderService)
    {
        $this->menuService = $menuService;
        $this->sliderService = $sliderService;
    }
    public function index(Request $request, $id, $slug=''){
        $menu = $this->menuService->getId($id);

        $products = $this->menuService->getProduct($menu, $request);
        $sliders = $this->sliderService->show();

        return view('menu', [
            'title'=>$menu->name,
            'products'=>$products,
            'menu'=>$menu,
            'sliders' => $sliders
        ]);
    }
}
