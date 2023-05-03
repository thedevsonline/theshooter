<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
                    $userid = Auth::user()->id;

                    $cart = cart::where("userid", "=", $userid)->get();

                    $user = Auth::user()->role;

                 
                    return view("user.cart", compact("cart"));
                  
                } else {
                    return redirect("login")->with('login', ' you Have to login First To work On tHis function');
                }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
       //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $cart)
    {
          if (Auth::check()) 
         {      
                $user = auth::user();
                $product = Product::find($cart);

            
                    $addcart = new cart();
                    $addcart->name = $user->name;
                    $addcart->userid = $user->id;
                    $addcart->product_name = $product->name;
                    $addcart->productid = $product->id;
                   
                    $addcart->price = $product->price ;
                 
                    if ($request->quantity) {
                        $total_amount= $product->price* $request->quantity;
                    }
                    else
                    {
                        $total_amount =$product->price;
                    }
                    $addcart->total_amount=$total_amount;
                    $addcart->image = $product->image;
                   
                    $addcart->save();
                    return redirect()->back()->with("success", "Your Product has successfully added to Cart. to check Click on the cart-'/'");
               
        }
        else
        {
            return redirect('login')->with('login', ' you Have to login First To work On tHis function');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Cart $cart)
{
    $cart->quantity = $request->input('quantity');
    $cart->total_amount = $cart->price * $cart->quantity;
    $cart->save();

    // Redirect the user to the cart page
    return redirect()->route('cart.index')->with('success', 'Cart item has been updated successfully.');
}



    /**
     * Remove the specified resource from storage.
     */
public function destroy($id)
{
    $cartItem = Cart::find($id);
    if (!$cartItem) {
        return redirect()->route('cart.index')->with('error', 'Cart item not found.');
    }
    $cartItem->delete();
    return redirect()->route('cart.index')->with('success', 'Cart item has been removed.');
}

}
