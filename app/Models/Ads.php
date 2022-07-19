<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Ads
 * @package App\Models
 * @version January 21, 2020, 11:52 am UTC
 *
 * @property string image
 * @property string text
 * @property string link
 */
class Ads extends Model
{

    public $table = 'ads';
    public $timestamps= false;



    public $fillable = [
        'image',
        'text',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'text' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
