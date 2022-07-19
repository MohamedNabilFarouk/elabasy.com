<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Builder;
use App;

/**
 * Class Product
 * @package App\Models
 * @version January 21, 2020, 10:48 am UTC
 *
 * @property string name
 * @property string des
 * @property string image
 * @property integer category_id
 * @property integer brand_id
 */
class Product extends Model
{

    public $table = 'products';
    public $timestamps = false;


    public function getNameAttribute($value) {
        if(App::getLocale()=="ar"){
        return $this->{'name_'.App::getLocale()};
       
    }else{
        return $value;
    }
    }

    public function getDesAttribute($value) {
        if(App::getLocale()=="ar"){
            return $this->{'des_'.App::getLocale()};       
       
    }else{
        return $value;
    }
    }

    public $fillable = [
        'name',
        'des',
        'name_ar',
        'des_ar',
        'image',
        'category_id',
        'brand_id',
        'quantity',
        'on_sale',
        'price',
        'offer_price',
        'home',
        'deal_price',
        'deal',
        'deal_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'des' => 'text',
        'name_ar' => 'string',
        'des_ar' => 'text',
        'image' => 'string',
        'category_id' => 'integer',
        'brand_id' => 'integer',
        'quantity' => 'integer',
        'on_sale' => 'integer',
        'home' => 'integer',
        'price' => 'integer',
        'offer_price' => 'integer'


    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id','id');
    }

    public function brand(){
        return $this->belongsTo('App\Models\Brand','brand_id','id');
    }

    public function productGallery(){
        return $this->hasMany('App\Models\ProductGallery','product_id','id');
    }

    public function order()
    {
        return $this->hasOne(\App\Models\Order::class , 'product');
    }
    // public function color()
    // {
    //     return $this->belongsToMany(\App\Models\Color::class, 'stocks', 'product_id', 'color_id');
    // }

    // public function size()
    // {
    //     return $this->belongsToMany(\App\Models\Size::class, 'stocks', 'product_id', 'size_id');
    // }


    public function scopeByName(Builder $builder,$product) {
        return $builder->where('name','Like',"%$product%");
    }

    public function scopeByPrice(Builder $builder,$min,$max) {
        return $builder->whereBetween('price',[$min - 1,$max+1])->orWhereBetween('offer_price',[$min,$max]);
    }

}
