<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view("admin.products", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.addProduct", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "product_name" => "required|max:255",
            "long_description" => "required",
            "short_description" => "required",
            "singleProductPrice" => "required|numeric",
            "weight" => "string",
            "length" => "string",
            "width" => "string",
            "height" => "string",
            "isstock" => "required",
            "discountedPrice" => "numeric",
            "category" => "required",
            "totalstock" => "required|numeric",
            "image" => "required|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        // Save the product data to the database
        $product = new Product();
        $image = $validatedData["image"];
        $imageName = time() . "." . $image->getClientOriginalExtension();
        $request->image->move("images", $imageName);

        $product->image = $imageName;
        // $dispercentage=($validatedData['discountedPrice']/$validatedData['singleProductPrice'])*100;
        // $product->dispercentage=$dispercentage;
        // $product->discountedPrice=$validatedData['discountedPrice'];
        $product->name = $validatedData["product_name"];
        $product->long_description = $validatedData["long_description"];
        $product->description = $validatedData["short_description"];
        $product->price = $validatedData["singleProductPrice"];
        // $product->weight = $validatedData['weight'];
        // $product->lenght = $validatedData['length'];
        // $product->width = $validatedData['width'];
        // $product->height = $validatedData['height'];
        $product->stock = $validatedData["isstock"];
        $product->category = $validatedData["category"];
        $product->totalstock = $validatedData["totalstock"];

        $product->save();

        // Redirect the user to the newly created product page
        return redirect()
            ->back()
            ->with("success", "Product has been created successfully.");
    }
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("admin.detail", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view("admin.productEdit", compact("categories", "product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            "product_name" => "required|max:255",
            "long_description" => "required",
            "short_description" => "required",
            "singleProductPrice" => "required|numeric",
            "weight" => "string",
            "length" => "string",
            "width" => "string",
            "height" => "string",
            "isstock" => "required",
            "discountedPrice" => "numeric",
            "isstock" => "required",
            "category" => "required",
            "totalstock" => "required|numeric",
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Save the product data to the database

        // $image = $validatedData['image'];
        // $

        $image = $request->image;
        if ($image) {
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $request->image->move("images", $imageName);

            $product->image = $imageName;
        }
        $dispercentage =
            ($validatedData["discountedPrice"] /
                $validatedData["singleProductPrice"]) *
            100;
        $product->dispercentage = $dispercentage;
        $product->discountedPrice = $validatedData["discountedPrice"];

        $product->name = $validatedData["product_name"];
        $product->long_description = $validatedData["long_description"];
        $product->description = $validatedData["short_description"];
        $product->price = $validatedData["singleProductPrice"];
        // $product->weight = $validatedData['weight'];
        // $product->lenght = $validatedData['length'];
        // $product->width = $validatedData['width'];
        // $product->height = $validatedData['height'];
        $product->stock = $validatedData["isstock"];
        $product->category = $validatedData["category"];
        $product->totalstock = $validatedData["totalstock"];

        $product->save();

        // Redirect the user to the newly created product page
        return redirect()
            ->back()
            ->with("success", "Product has been UPDATED successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route("products.index"))->with(
            "success",
            "Category deleted successfully!"
        );
    }
}
