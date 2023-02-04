<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;


class CustomerContoller extends Controller
{
    //
    public function index()
    {

        $customers = DB::table('customers')
            ->select('customers.name', 'customers.email', 'products.product', 'categories.name as category', 'customers.quantity', 'products.price', DB::raw('(customers.quantity * products.price) AS total'))
            ->join('products', 'customers.cart', '=', 'products.code_product')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->orderBy('total', 'desc')
            ->get();
        return view('customer.index', compact('customers'));
    }

    public function show()
    {
        $data = DB::table('customers')
            ->select('customers.name', 'customers.email', 'products.product', 'categories.name as category', 'customers.quantity', 'products.price', DB::raw('(customers.quantity * products.price) AS total'))
            ->join('products', 'customers.cart', '=', 'products.code_product')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->orderBy('total', 'desc')
            ->get();
        return response()->json($data);
    }
}