<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'menu_id',
        'price',
        'price_sale',
        'description',
        'content',
        'thumb',
        'active'
    ];

    public function menu(){
        return $this->hasOne(Menu::class, 'id', 'menu_id')->withDefault(['name'=>'']);
    }

    public function getFormattedPriceAttribute(){
        return number_format($this->price, 0, ',', '.');
    }

    public function getFormattedPriceSaleAttribute(){
        return number_format($this->price_sale, 0, ',', '.');
    }
}
