<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('customers')
            ->select('customers.name', 'customers.email', 'products.product', 'categories.name as category', 'customers.quantity', 'products.price', DB::raw('(customers.quantity * products.price) AS total'))
            ->join('products', 'customers.cart', '=', 'products.code_product')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->orderBy('total', 'desc')
            ->get();
        return response()->json($data);
    }

    public function show()
    {

        $customers = DB::table('customers')
            ->select('customers.name', 'customers.email', 'products.product', 'categories.name as category', 'customers.quantity', 'products.price', DB::raw('(customers.quantity * products.price) AS total'))
            ->join('products', 'customers.cart', '=', 'products.code_product')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->orderBy('total', 'desc')
            ->get();
        return view('customer.index', compact('customers'));
    }

    public function showData()
    {
        return view('customer.customer');
    }
}