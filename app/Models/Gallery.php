<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Gallery
 * @package App\Models
 * @version February 5, 2020, 10:46 am UTC
 *
 * @property string image
 */
class Gallery extends Model
{

    public $table = 'gallery';
    
public $timestamps=false;


    public $fillable = [
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
