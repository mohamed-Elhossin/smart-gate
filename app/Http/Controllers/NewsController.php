<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return news::all();
    }

    public function store(Request $request)
    {   $request->validate([
        "news"=>"required",
     
    ]);

         return news::create($request->all());
    }


    public function show($id)
    {
        return news::find($id);
    }


    public function update(Request $request, $id)
    {
       $product = news::find($id);
       $product->update($request->all());
       return $product;
    }


    public function destroy($id)
    {
       return news::destroy($id);
    }
}
