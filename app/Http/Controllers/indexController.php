<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\FooterAds;
use App\Models\Gallery;
use App\Models\Blogs;
use App\Models\Contactus;
use App;
use Config;
use App\Models\account;


class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

     public function index()
    {  
        
       

        $ads = Ads::limit(2)->get();
            $onsaleProduct =  Product::where('on_sale','=', '1')->get();
            //dd($onsaleProduct);
        $homepro =  Product::where('home','=' ,'1')->limit(12)->get();
        $deals =  Product::where('deal','=' ,'1')->get();
        $Gallery =  Gallery::all();
        $blogs= Blogs::all();
        //dd($deals);
// $bran1= Brand::where('home1','=','1')->limit(1)->with('category')->with('product')->get();
// $bran2= Brand::where('home2','=','1')->limit(1)->with('category')->with('product')->get();

$Ads=Ads::all();
$slider=Slider::all();



// if($lang=="ar"){
//     $deals['name']= $deals['name_ar'];
//     $deals['des']= $deals['des_ar'];


// }

            return view('blades.index')->with('deals', $deals)
            ->with('onsaleProduct', $onsaleProduct)
            ->with('homepro', $homepro)
            ->with('blogs', $blogs)
            ->with('slider', $slider)
            ->with('Ads', $Ads)
            ->with('Gallery', $Gallery);
    }
public function  getblog($id){
  
    $blog= Blogs::where('id','=', $id)->get();
   $recentblog= Blogs::take(6)->get();
   
//   $colors  = $pro[0]->color->unique();
//   $sizes  = $pro[0]->size->unique();
    return view('blades.blogdetails')->with('blog',$blog)->with('recentblog',$recentblog);



}

public function Contactus(){
    return view('blades.contactus');
}

public function aboutus(){
    return view('blades.Aboutus');
}


public function CategoryProduct($id){
        $category = Category::where('id','=', $id)->with('product')->get();
        $allcat= Category::all();
//         foreach($category[0]->product as $p){
//             echo $p['name'];
//         }
// exit();
        return view('blades.catproducts')->with('category', $category)->with('allcat' , $allcat);
    }
    public function Product($id){

        $pro= Product::where('id','=', $id)->get();
        $categorypro= Category::where('id','=', $pro[0]->category_id)->get();
        $cat= Category::all();
    //   $colors  = $pro[0]->color->unique();
    //   $sizes  = $pro[0]->size->unique();
        return view('blades.Product')->with('pro',$pro)->with('categorypro' ,$categorypro)->with('cat' ,$cat);
    }


    public function BrandProduct($id){
        $product = Product::where('brand_id',$id)->get();
        $allcat= Category::all();
        $brands= Brand::all();
        
        return view('blades.brandproducts',compact('product','allcat','brands'));
    }
  

    public function allproduct(Request $request){

        $products = Product::Query();


        if ($request->has('name')) {
            $products = $products->ByName($request->name);

        }


        if($request->has('min') && $request->has('max')){
            $products->ByPrice($request->min,$request->max);
        }
        $products= $products->get();

        return view('blades.AllProducts')->with('products',$products);
    }


    public function counters(){
        $products = Product::all();
        $categories =Category::all();
        $order= account::all();
        $message = Contactus::all();
        return view('home')->with('products',$products)
                            ->with('categories',$categories)
                            ->with('order',$order)
                            ->with('message',$message);

    }
    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
