<?php

namespace App\Models;

use Eloquent as Model;
use App;
/**
 * Class Blogs
 * @package App\Models
 * @version February 5, 2020, 2:15 pm UTC
 *
 * @property string title
 * @property string des
 * @property string image
 */
class Blogs extends Model
{

    public $table = 'blog';
    


    public function getTitleAttribute($value) {
        if(App::getLocale()=="ar"){
           
            return $this->{'title_'.App::getLocale()};
       
    }else{
        return $value;
    }
    }

    public function getDesAttribute($value) {
        if(App::getLocale()=="ar"){
            return $this->{'des_'.App::getLocale()};
           
       
    }else{
        return $value;
    }
    }



    public $fillable = [
        'title',
        'title_ar',
        'des',
        'des_ar',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'des' => 'string',
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



