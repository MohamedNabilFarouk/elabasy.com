<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Role
 * @package App\Models
 * @version January 27, 2020, 9:50 am UTC
 *
 * @property string role
 */
class Role extends Model
{

    public $table = 'roles';
    



    public $fillable = [
        'role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'role' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function user(){
        return $this->belongsToMany(\App\User::class, 'user_role', 'role_id', 'user_id');
    }
    
}
