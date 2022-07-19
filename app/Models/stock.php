<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class stock
 * @package App\Models
 * @version January 23, 2020, 4:11 pm UTC
 *
 * @property integer product_id
 * @property integer size_id
 * @property integer color_id
 * @property integer stock
 */
class stock extends Model
{
    use SoftDeletes;

    public $table = 'stocks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_id',
        'size_id',
        'color_id',
        'stock'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'size_id' => 'integer',
        'color_id' => 'integer',
        'stock' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
