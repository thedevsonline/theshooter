<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;
use App\Models\order;

use App\Models\order_shipping_details;
use App\Models\order_items;
use App\Models\User;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with("order_shipping_details", "order_items")->get();

        return view("admin.order", compact("orders"));
    }

    public function store(Request $request)
    {
        $cart = Cart::all();

        // Validate request
        $validated = $request->validate([
            "billing_first_name" => "required",
            "billing_last_name" => "required",
            "billing_email" => "required|email",
            "billing_phone" => "required|numeric",
            "billing_address_1" => "required",
            "billing_country" => "required",
            "billing_city" => "required",
            "billing_state" => "required",
            "billing_postcode" => "required",
            "order_comments" => "max:255",
        ]);

        // Create new order
        $order = new Order();
        $order->status = "pending";
        $order->user_id = Auth::id();
        $totalPrice = 0;

        // Calculate total price of all products
        foreach ($cart as $item) {
            $totalPrice += $item->price * $item->quantity;
        }

        $order->total_price = $totalPrice;
        $order->payment_status = "cash on delivery";
        $order->save();

        // Create new order shipping details
        $shippingDetails = new order_shipping_details();
        $shippingDetails->order_id = $order->id;
        $shippingDetails->billing_first_name = $validated["billing_first_name"];
        $shippingDetails->billing_last_name = $validated["billing_last_name"];
        $shippingDetails->billing_email = $validated["billing_email"];
        $shippingDetails->billing_phone = $validated["billing_phone"];
        $shippingDetails->billing_address_1 = $validated["billing_address_1"];
        $shippingDetails->billing_address_2 = $request->billing_address_2;
        $shippingDetails->billing_country = $validated["billing_country"];
        $shippingDetails->billing_city = $validated["billing_city"];
        $shippingDetails->billing_state = $validated["billing_state"];
        $shippingDetails->billing_pastcode = $validated["billing_postcode"];
        $shippingDetails->billing_company = $request->billing_company;
        $shippingDetails->order_comments_woocommerce_checkout_place_order =
            $validated["order_comments"];
        $shippingDetails->save();

        // Create new order items
        foreach ($cart as $item) {
            $orderItem = new order_items();
            $orderItem->order_id = $order->id;
            $orderItem->quantity = $item->quantity;
            $orderItem->image = $item->image;
            $orderItem->user_id = Auth::id();
            $orderItem->product_id = $item->productid;
            $orderItem->price = $item->price * $item->quantity;

            // set other order item details
            $orderItem->save();
        }

        // Clear cart after creating order
        Cart::truncate();

        // Redirect to thank you page or somewhere else

        // Redirect to thank you page or somewhere else
        return redirect(route("user.shop"))->with(
            "success",
            "Your Order Has Been Successfully Added"
        );
    }
}
