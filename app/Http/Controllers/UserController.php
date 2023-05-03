<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\order;

use App\Models\order_shipping_details;
use App\Models\order_items;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view("user.index");
    }
    public function shop()
    {
        $products = Product::paginate(12);

        return view("user.shop", compact("products"));
    }
    public function singleProduct(Product $product)
    {
        return view("user.product-single", compact("product"));
    }
    public function checkout()
    {
        if (Auth::check()) {
            $userid = Auth::user()->id;

            $cart = cart::where("userid", "=", $userid)->get();

            return view("user.checkout", compact("cart"));
        } else {
            return redirect("login")->with(
                "login",
                " you Have to login First To work On tHis function"
            );
        }
    }
    public function order()
    {
        if (Auth::check()) {
            $userOrders = Order::where("user_id", auth()->id())
                ->with(["order_items.product", "order_shipping_details"])
                ->get();
            // dd($userOrders);
            return view("user.order", compact("userOrders"));
        } else {
            return redirect("login")->with(
                "login",
                "You have to log in first to access this function."
            );
        }
    }
}
