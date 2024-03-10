<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\Redirect;

class SupplierController extends Controller
{
    public function index()
    {
        return view('supplier.index');

    }
}
