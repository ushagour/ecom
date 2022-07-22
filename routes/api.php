<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products',function (Request $request) {

    //Todo problem of conflict between  products  name and  categories name. 
    // $products = DB::table('products')
    // ->join('categories as CAT', 'products.category_id', '=', 'CAT.id')
    // ->get('products.name as products_name ,regular_price,stock_status,created_at,categories.name as category_name');
    //  ->get();
    $products = Product::with("category")->get();//the parametre is the name of model relationship not the table 
    $result["aaData"]=[]; //there is a difference between echo  $result["aaData"] and echo  $result
    foreach ($products as $key=>$product) {
  array_push($result["aaData"],[$product->name,$product->regular_price,$product->stock_status,$product->category->name,$product->created_at]);

    }


    return response($result,200);

});
