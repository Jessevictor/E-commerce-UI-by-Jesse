<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seller()
    {
        $orders=Order::where('shop_id',auth()->id())->get();
        $order=count($orders);
       $ordersPerDay=Order::whereDate('created_at', Carbon::today())->get();
        return view('Backend.Shops.index',compact('ordersPerDay','orders','order'));
        //
    }
    public function updateo($itemid){
        $affected = \DB::table('orders')
        ->where('id', $itemid)
        ->update(['status' => 'processing']);
    return back();
    }
    public function completed($itemid){
        $affected = \DB::table('orders')
        ->where('id', $itemid)
        ->update(['status' => 'completed']);
        return back();
    }
    public function processedorders(){
        $orders=Order::where('shop_id',auth()->id())
                         ->where('status','processing')
                         ->get();
        $order=count($orders);
       $ordersPerDay=Order::whereDate('created_at', Carbon::today())->get();
        return view('Backend.Shops.processed-orders',compact('ordersPerDay','orders','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Shops.auth.register');
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
       return redirect()->route('dashboard');
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
    public function loginn()
    {

      return view('Shops.auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout() {
      Auth::logout();
      return redirect()->route('login');
    }
    public function getsellerProduct(){
        $sellerproducts=Product::where('shop_id',auth()->id())->get();
        return view('Backend.Shops.products',compact('sellerproducts'));
    }
}
