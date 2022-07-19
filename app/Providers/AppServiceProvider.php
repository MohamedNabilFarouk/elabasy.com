<?php



namespace App\Providers;



use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;



use App\Models\Category;

use App\Models\Product;

use App\Models\Statics;

use App;

class AppServiceProvider extends ServiceProvider

{

    /**

     * Register any application services.

     *

     * @return void

     */

    public function register()

    {

        //

    }



    /**

     * Bootstrap any application services.

     *

     * @return void

     */

    public function boot()

    {

        //

        

        $phone= Statics::where("code","=", "phone")->get();

        $email= Statics::where("code","=", "email")->get();

        $address= Statics::where("code","=", "address")->get();

        $abuttitle= Statics::where("code","=", "about-us-title")->get();

        $aboutdes= Statics::where("code","=", "about-us-des")->get();

        $fb= Statics::where("code","=", "facebook")->get();
        $ins= Statics::where("code","=", "instagram")->get();








         $allcat=Category::all();



    

        $allproducts= Product::all();

        

         View::share('allproducts',$allproducts);

         View::share('allcat',$allcat);

         View::share('phone',$phone);

         View::share('email',$email);

         View::share('address',$address);

         View::share('abuttitle',$abuttitle);

         View::share('aboutdes',$aboutdes);
         View::share('fb',$fb); View::share('ins',$ins);
         View::share('lang', App::getLocale());

         

    }

}

