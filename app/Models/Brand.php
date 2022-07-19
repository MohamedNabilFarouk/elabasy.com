<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Brand
 * @package App\Models
 * @version August 24, 2021, 6:53 pm UTC
 *
 * @property integer id
 * @property string name
 * @property string name_ar
 * @property string image
 * @property integer category_id
 */
class Brand extends Model
{

    public $table = 'brands';
    



    public $fillable = [
        'id',
        'name',
        'name_ar',
        'image',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'name_ar' => 'string',
        'image' => 'string',
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function product(){
        return $this->hasMany(Product::class);
    }
    
}
