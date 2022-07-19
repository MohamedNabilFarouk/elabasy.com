<?php

namespace App\Http\Controllers;

use App\DataTables\ProductDataTable;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductGallery;
use DB;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param ProductDataTable $productDataTable
     * @return Response
     */
    public function index(ProductDataTable $productDataTable)
    {

        return $productDataTable->render('products.index');

    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        //   $category= Category::pluck('name','id');
           $category_ar= Category::pluck('name_ar','id');
           $category= Category::all();
        //   dd($category);
           $brand = Brand::all();
       
           // $brands = Brand::pluck('name', 'id');
        return view('products.create',compact('category','category_ar','brand'));
    }

 public function getCategoryBrand($id){
        $brand=[];
    $brands = Brand::where('category_id',$id)->get();
    foreach($brands as $p){
    
        $brand[] = $p;
 

}

    return response()->json(['data' => $brand]);    
    }


    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    
    
     public function store(CreateProductRequest $request)
    {
        DB::transaction(function () use  ($request) {
           
        $input = $request->all();
        
        $File=$request-> file('image');
        $destination= public_path('/images');
        $newfile = rand(1, 999) . $File -> getClientOriginalName();
        $File ->move ($destination , $newfile);
        $input['image'] = $newfile;
        
        $product = $this->productRepository->create($input);

        if($request->hasFile('gallery')){
           
        $Files=$request-> file('gallery');
        foreach ($Files as $File){
        $productGallery= new ProductGallery;
        $destination= public_path('/images');
        $newfile = rand(1, 999) . $File -> getClientOriginalName();
        $File ->move ($destination , $newfile);
        $productGallery['image'] = $newfile; 
        $productGallery['product_id']= $product->id;     

        $productGallery->save();
        }
        }
    });
        Flash::success('Product saved successfully.');

        return redirect(route('products.index'));
    }
    
    /**
     * Display the specified Product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);
        
        $brand = Brand::all();
        // $category= Category::pluck('name','id');
        $category_ar= Category::pluck('name_ar','id');
         $category= Category::all();
        // $brands = Brand::pluck('name', 'id');

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('product', $product)->with('category' , $category)->with('category_ar',$category_ar)->with('brand', $brand);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param  int              $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
       
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

         $pro=$request->all();
        if($request->hasFile('image')) {
        $File=$request-> file('image');
        $destination= public_path('/images');
        $newfile = rand(1, 999) . $File -> getClientOriginalName();
        $File ->move ($destination , $newfile);
        $pro["image"]= $newfile;
        }
        
        if($request->hasFile('gallery')){
           
        $Files=$request-> file('gallery');
        foreach ($Files as $File){
        $productGallery= new ProductGallery;
        $destination= public_path('/images');
        $newfile = rand(1, 999) . $File -> getClientOriginalName();
        $File ->move ($destination , $newfile);
        $productGallery['image'] = $newfile; 
        $productGallery['product_id']= $id;     

        $productGallery->save();
        }
        }


        $product = $this->productRepository->update($pro, $id);

        Flash::success('Product updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }

    public function addToCart(Product $product ) {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }

        $cart->add($product);

         //dd($cart);
        session()->put('cart', $cart);
        return back()->with('success', 'Product was added');
    }

    public function showCart() {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }

        return view('blades.cart', compact('cart'));
    }
    public function delFromCart($id)
    {
        $cart = new Cart( session()->get('cart'));
        $cart->remove($id);

        if( $cart->totalQty <= 0 ) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }

        //return redirect()-('blades.cart')->with('success', 'Product was removed');
        return redirect(route('cart'));
    }

    public function updateCart(Request $request, Product $product)
    {
        $request->validate([
            'qty' => 'required|numeric|min:1'
        ]);

        $cart = new Cart(session()->get('cart'));
        $cart->updateQty($product->id, $request->qty);

        session()->put('cart', $cart);
        return back();
    }

}
