<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Services\Menu\MenuServive;
use Illuminate\Http\JsonResponse;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;
class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuServive $menuService){
        $this->menuService = $menuService;
    }
    public function create(){
        return view('admin.menu.add',[
            'title'=>'Thêm Danh Mục',
            'menus'=>$this->menuService->getParent()
            ])->render();
        return response($content);
    }

    public function store(CreateFormRequest $request){
        $result = $this->menuService->create($request);

        return redirect()->back();
    }

    public function index(){
        $menus = Menu::paginate(20);
        
        return view('admin.menu.list',[
            'title'=>'Danh sách danh mục',
            'menus'=>$this->menuService->getAll()
        ]);
    }

    public function show(Menu $menu){
        return view('admin.menu.edit',[
            'title'=>'Chỉnh sửa danh mục'. $menu->name,
            'menu'=>$menu,
            'menus'=>$this->menuService->getParent()
        ]);
    }

    public function update(Menu $menu, CreateFormRequest $request)
    {
        $result = $this->menuService->update($request, $menu);
        if ($result) {
            Session::flash('success', 'Cập nhật thành công danh mục');
            return redirect('/admin/menus/list');
        } 
        
        Session::flash('error', 'Cập nhật không thành công');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        try {
            $menu = Menu::where('id', $request->input('id'))->first();
            if ($menu) {
                Menu::where('id', $request->input('id'))->delete();
                return response()->json([
                    'error' => false,
                    'message' => 'Xóa thành công menu'
                ]);
            }
            
            return response()->json([
                'error' => true,
                'message' => 'Menu không tồn tại'
            ]);
            
        } catch (\Exception $err) {
            return response()->json([
                'error' => true,
                'message' => 'Có lỗi xảy ra: ' . $err->getMessage()
            ]);
        }
    }
        
}
