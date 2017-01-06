<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('customer_name', function() {
    $customer = App\Customer::where('name', '=', 'Tony')->first();
    $customer = $customer->getAttributes();
    echo "hali: ".$customer['name'];
});

Route::get('customer/{id}', function ($id){
    $customer = App\Customer::find($id);
    echo $customer->name;

    echo "<ul>";
    foreach ($customer->orders as $order) {
        echo '<li>' . $order->name . '</li>';
    }
    echo "</ul>";
});

Route::get('orders', function () {
    $orders = App\Order::all();
    foreach ($orders as $order) {
        echo $order->name. "belongs to". $order->customer->name;
    }
});