<?php
namespace App\Helpers;
use Illuminate\Support\Str;
class Helper
{
    public static function menu($menus, $parent_id = 0, $char = ''){

        $html = '';

        $menuCollection = collect($menus->items());
        foreach ($menus as $key => $menu){
            if($menu->parent_id == $parent_id){
                $html .= '
                    <tr>
                        <td>'. $menu->id .'</td>
                        <td>'. $char . $menu->name .'</td>
                        <td>'. self::active($menu->active) .'</td>
                        <td>'. $menu->updated_at .'</td>
                        <td>
                        <a class="btn btn-primary btn-sm" href="/admin/menus/edit/' . $menu->id . '"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger btn-sm" onclick="removeRow(' . $menu->id . ', \'/admin/menus/destroy\')" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                ';

                // Đệ quy với các menu con
                $html .= self::menu($menus, $menu->id, $char . '--');
            }
        }

        return $html;
    }

    public static function active($active = 0){
        return $active == 0 ? '<span class="btn btn-danger btn-xs">KHÔNG</span>' : '<span class="btn btn-success btn-xs">CÓ</span>';
        
    }

    public static function menus($menus, $parent_id = 0):string{
        $html = '';
        foreach ($menus as $key => $menu) {
            if($menu->parent_id == $parent_id){
                $html .='
                     <li class="nav-item">
                        <a class="dd-menu" 
                            style="cursor: pointer;"
                            onclick="window.location.href=\'/danh-muc/' . $menu->id . '-'. Str::slug($menu->name, '-') . '.html\'"
                            data-bs-toggle="collapse" 
                            data-bs-target="#submenu-1-2" 
                            aria-controls="navbarSupportedContent" 
                            aria-expanded="true" 
                            aria-label="Toggle navigation">
                            ' . $menu->name . '
                        </a>';
                unset($menus[$key]);
                if(self::isChild($menus, $menu->id)){
                    $html .='<ul class="sub-menu collapse" id="submenu-1-2">';
                        $html .= self::menus($menus, $menu->id);
                    $html .='</ul>';
                }
                $html .='</li>
                ';
            }
        }
        return $html;
    }

    public static function isChild($menus, $id):bool{
        foreach ($menus as $key => $menu) {
            if($menu->parent_id == $id){
                return true;
            }
        }
        return false;
    }

    // public static function price($price = 0, $priceSale = 0){
    //     if($priceSale != 0) return $priceSale;
    //     if($price != 0) return price;
    //     return '<a href="/lien-he.html">Liên hệ</a>';
    // }

    
}