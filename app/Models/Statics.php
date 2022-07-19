<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Statics
 * @package App\Models
 * @version February 5, 2020, 10:06 am UTC
 *
 * @property string code
 * @property string value
 */
class Statics extends Model
{

    public $table = 'static';
    

public $timestamps =false;

    public $fillable = [
        'code',
        'value',
        'ar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'value' => 'string',
        'ar'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
