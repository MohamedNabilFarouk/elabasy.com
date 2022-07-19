<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Contactus
 * @package App\Models
 * @version February 6, 2020, 10:54 am UTC
 *
 * @property string name
 * @property string email
 * @property string phone
 * @property string subject
 * @property string message
 */
class Contactus extends Model
{

    public $table = 'contactus';
    



    public $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'subject' => 'string',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
