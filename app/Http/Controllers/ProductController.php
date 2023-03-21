<?php
    
namespace App\Http\Controllers;
    
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use File;

class ProductController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('admin.products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_color = ProductColor::get();
        $list_size = ProductSize::get();
        return view('admin.products.create', compact('list_color', 'list_size'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'product_name' => 'required',
            'product_detail' => 'required',
            'product_image' => 'required',
            'product_real_amount' => 'required',
            'product_percentage_discount' => 'required',
            'product_discounted_amount' => 'required',
        ]);


        $create_product = $request->all();

        if($request->hasFile('product_image')){

            $file = $request->file('product_image');

            $path = public_path("uploads/products");
            
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }

            $file_name_arr = [];

            foreach ($file as $file_value) {
                $extension = $file_value->getClientOriginalExtension();
                
                $randomstr = uniqid();
                
                $filename = $randomstr.".".$extension;
                
                $file_value->move($path, $filename);

                $file_name_arr[] = $filename;
            }

            $create_product["product_image"] = json_encode($file_name_arr);
        }

        $create_product["product_colors"] = json_encode($create_product["product_colors"]);
        $create_product["product_sizes"] = json_encode($create_product["product_sizes"]);
        
        Product::create($create_product);
        
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show',compact('product'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $list_color = ProductColor::get();
        $list_size = ProductSize::get();
        return view('admin.products.edit',compact('product', 'list_color', 'list_size'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'product_name' => 'required',
            'product_detail' => 'required',
            'product_real_amount' => 'required',
            'product_percentage_discount' => 'required',
            'product_discounted_amount' => 'required',
        ]);


        $create_product = $request->all();
        // dd($create_product);
        // dd($request->hasFile('product_image'));

        if($request->hasFile('product_image')){

            $file = $request->file('product_image');

            $path = public_path("uploads/products");
            
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }

            $file_name_arr = [];

            foreach ($file as $file_value) {
                $extension = $file_value->getClientOriginalExtension();
                
                $randomstr = uniqid();
                
                $filename = $randomstr.".".$extension;
                
                $file_value->move($path, $filename);

                $file_name_arr[] = $filename;
            }

            $create_product["product_image"] = json_encode($file_name_arr);
        }else{
            unset($create_product["product_image"]);
        }

        unset($create_product["_token"]);
        unset($create_product["_method"]);

        if($request->product_colors){
            $create_product["product_colors"] = json_encode($create_product["product_colors"]);
        }

        if($request->product_sizes){
            $create_product["product_sizes"] = json_encode($create_product["product_sizes"]);
        }

        Product::where("id", $id)->update($create_product);
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }



    public function listProduct()
    {
        $latest_product = Product::orderBy("id", "DESC")->limit(8)->get();
        return view("products.index", compact("latest_product"));
    }

    public function productDetail($id)
    {
        $detail_product = Product::where("id", $id)->first();
        
        if($detail_product->product_image){
            $number_pic = $detail_product->product_image;
            $number_pic = json_decode($number_pic);
            $number_pic = count($number_pic);
        }else{
            $number_pic = 0;
        }

        return view("products.product-detail", compact('detail_product', 'number_pic'));
    }

    public function productCart()
    {
        return view("products.product-checkout");
    }
}