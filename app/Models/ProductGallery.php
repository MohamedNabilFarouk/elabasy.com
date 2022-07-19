<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ProductGallery
 * @package App\Models
 * @version January 23, 2020, 9:42 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property string image
 * @property integer product_id
 */
class ProductGallery extends Model
{

    public $table = 'product_galleries';
    
public $timestamps=false;


    public $fillable = [
        'image',
        'product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'product_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->belongsTo(\App\Models\product::class, 'product_id', 'id');
    }
}
