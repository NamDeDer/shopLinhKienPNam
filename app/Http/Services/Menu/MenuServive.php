<?php

namespace App\Http\Services\Menu;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
class MenuServive{
    public function getParent($parent_id=0){
        return Menu::where('parent_id',0)->get();
    }

    public function show(){
        return Menu::select('name', 'id')->orderbyDesc('id')->get();
    }
    public function getAll(){
        return Menu::orderbyDesc('id')->paginate(20);
    }
    public function create($request){
            try{
                Menu::create([
                    'name'=>(string) $request->input('name'),
                    'parent_id'=>(int) $request->input('parent_id'),
                    'description'=>(string) $request->input('description'),
                    'content'=>(string) $request->input('content'),
                    'active'=>(int) $request->input('active'),
                ]);

                Session::flash('success','Thêm danh mục thành công');
            } catch(\Exception $err){
                Session::flash('error',$err->getMessage());
                return false;
            }
            return true;
    }

    public function update($request, $menu)
    {
        try {
            if($request->input('parent_id')!= $menu->id){
                $menu->parent_id = (int) $request->input('parent_id');
            } 
            $menu->name = (string) $request->input('name');
            $menu->description = (string) $request->input('description');
            $menu->content = (string) $request->input('content');
            $menu->active = (int) $request->input('active');
            $menu->save();

            Session::flash('success', 'Cập nhật thành công danh mục');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Có lỗi xảy ra: ' . $err->getMessage());
            return false;
        }
    }
    public function destroy(){
        $id = (int) $request->input('id');
        $menu = Menu::where('id', $request->input('id'))->first();
        if($menu){
            return Menu::where('id', $id)->orWhere('parent_id', $id)->delete();
        }
        return false;
    }
    public function getId($id){
        return Menu::where('id', $id)->where('active', 1)->firstOrFail();
    }

    public function getProduct($menu, $request)
    {
        $query = $menu->products()
            ->select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1);

        if ($request->input('price')) {
            $query->orderBy('price', $request->input('price'));
        }

        return $query
            ->orderByDesc('id')
            ->paginate(12)
            ->withQueryString();
    }
}