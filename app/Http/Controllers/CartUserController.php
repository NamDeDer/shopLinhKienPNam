<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use Illuminate\Support\Facades\Session;

class CartUserController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(Request $request){
        $result = $this->cartService->create($request);
        if ($result === false) {
            return redirect()->back();
        }
        return redirect('/carts');
    }

    public function show(){
        $product = $this->cartService->getProduct();
        return view('carts.list',[
            'title'=>'Giỏ hàng',
            'products'=>$product,
            'carts'=>Session::get('carts'),
        ]);
    }

    public function update(Request $request){
        $this->cartService->update($request);

        return redirect()->back();
    }

    public function remove($id=0){
        $this->cartService->remove($id);

        return redirect('/carts');
    }

    public function checkout(){

        $cart = Session::get('carts', []); // Lấy giỏ hàng từ session
        $products = $this->cartService->getProduct(); // Lấy thông tin chi tiết các sản phẩm trong giỏ hàng

        return view('carts.checkout', [
            'title' => 'Trang thanh toán',
            'carts' => $cart,
            'products' => $products,
        ]);
}


    public function addCart(Request $request)
    {
        $this->cartService->addCart($request);

        return redirect()->back();
    }
}
