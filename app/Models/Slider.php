<?php



namespace App\Models;



use Eloquent as Model;

use App;

/**

 * Class Slider

 * @package App\Models

 * @version January 23, 2020, 6:33 am UTC

 *

 * @property string text

 * @property string image

 */

class Slider extends Model

{



    public $table = 'sliders';

    public $timestamps= false;





    public function getTextAttribute($value) {

        if(App::getLocale()=="ar"){

           

            return $this->{'text_'.App::getLocale()};

       

    }else{

        return $value;

    }

    }



    







    public $fillable = [

        'text',

        'text_ar',

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

        'text_ar' => 'string',

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

