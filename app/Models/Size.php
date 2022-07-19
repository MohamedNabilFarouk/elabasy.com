<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Size
 * @package App\Models
 * @version January 23, 2020, 4:01 pm UTC
 *
 * @property string size
 */
class Size extends Model
{

    public $table = 'sizes';
    



    public $fillable = [
        'size'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'size' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function products()
    {
        return $this->belongsToMany(\App\Models\Product::class, 'stocks', 'size_id', 'product_id');
    }
    
}
