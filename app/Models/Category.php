<?php

namespace App\Models;

use Eloquent as Model;
use App;

/**
 * Class Category
 * @package App\Models
 * @version January 21, 2020, 10:02 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection brands
 * @property string name
 * @property string des
 * @property string image
 */
class Category extends Model
{

    public $table = 'categories';
    public $timestamps= false;
    
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
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'des' => 'string',
        'name_ar' => 'string',
        'des_ar' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
  
   

    public function product(){
        return $this->hasMany(\App\Models\Product::class,'category_id','id');
    }
    //  public function brands()
    // {
    //     return $this->belongsToMany(\App\Models\Brand::class, 'brand_category', 'category_id', 'brand_id');
    // }

    public function brand(){
        return $this->hasMany(Brand::class);
    }
    
}
