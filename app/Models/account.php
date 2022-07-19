<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class account
 * @package App\Models
 * @version February 4, 2020, 12:09 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection orders
 * @property string name
 * @property string phone
 * @property string email
 * @property integer note
 */
class account extends Model
{

    public $table = 'account';




    public $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'address' => 'string',
        'note' => 'text'
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
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'account_id', 'id');
    }
}
