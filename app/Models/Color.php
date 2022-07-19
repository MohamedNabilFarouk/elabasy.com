<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Color
 * @package App\Models
 * @version January 23, 2020, 4:04 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property string color
 */
class Color extends Model
{

    public $table = 'colors';
    



    public $fillable = [
        'color'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'color' => 'string'
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
    public function products()
    {
        return $this->belongsToMany(\App\Models\Product::class, 'stocks', 'color_id', 'product_id');
    }
}
