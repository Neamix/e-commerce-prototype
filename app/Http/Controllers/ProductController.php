<?php

namespace App\Http\Controllers;

use App\Http\Requests\products\ProductUpsertRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*** Update/Create Product */
    public function upsert(Product $product,ProductUpsertRequest $request)
    {
        $product = $product->upsert($request->all());
        return response()->json($product,200);
    }

    /*** List Product */
    public function list(Request $request)
    {
        $filteredProducts = Product::filter($request)->paginate(4);
        return view('pages.list',[
            'products' => $filteredProducts
        ]);
    }
}
