<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Order
 * @package App\Models
 * @version February 4, 2020, 12:13 pm UTC
 *
 * @property \App\Models\Account account
 * @property string product
 * @property integer quantity
 * @property integer price
 */
class Order extends Model
{

    public $table = 'order';




    public $fillable = [
        'product',
        'qty',
        'price',
        'account_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product' => 'string',
        'qty' => 'integer',
        'price' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function account()
    {
        return $this->belongsTo(\App\Models\Account::class, 'account_id', 'id');
    }

    public function product1()
    {
        return $this->belongsTo(\App\Models\Product::class, 'product');
    }
}
