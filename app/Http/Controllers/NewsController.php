<?php

namespace App\Http\Controllers;

use App\news;
use App\Meeting;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return news::all();
    }
    public function indexToIndex()
    {
        $allData = [news::all(), Meeting::all()];
        return view('index')->with('allData', $allData);
    }


    public function store(Request $request)
    {
        $request->validate([
            "news" => "required",
            'imgUrl' => "required|url"
        ]);
        $user  = news::create($request->all());
        $response = [
            "user" => $user,
            "Messaga" => "Success added this object"
        ];
        return response($response, 201);
    }


    public function show($id)
    {
        return news::find($id);
    }


    public function update(Request $request, $id)
    {
        $News = news::find($id);
        $News->update($request->all());
        return $News;
    }


    public function destroy($id)
    {
        return news::destroy($id);
    }
}
