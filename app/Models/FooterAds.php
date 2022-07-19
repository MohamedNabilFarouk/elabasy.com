<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class FooterAds
 * @package App\Models
 * @version January 23, 2020, 6:32 am UTC
 *
 * @property string text
 * @property string image
 */
class FooterAds extends Model
{

    public $table = 'footer_ads';
    



    public $fillable = [
        'link',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'text' => 'string',
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
