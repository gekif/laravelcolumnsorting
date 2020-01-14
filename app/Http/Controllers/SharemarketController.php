<?php

namespace App\Http\Controllers;

use App\Sharemarket;
use Illuminate\Http\Request;

class SharemarketController extends Controller
{
    public function create()
    {
        return view('sharemarket');
    }


    public function store(Request $request)
    {
        $stock = new Sharemarket();

        $stock->companyname = $request->get('companyname');
        $stock->price = $request->get('price');
        $stock->save();

        return redirect('/sharemarket/index')->with('success', 'Stock has been added');
    }
}
