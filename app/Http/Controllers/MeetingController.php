<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function index()
    {
        return Meeting::all();
    }

    public function indexToIndex()
    {
        $meetings = Meeting::all();
        return $meetings;
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "imgUrl" => "required|url"
        ]);
        $meeting  = Meeting::create($request->all());
        $response = [
            "meeting" => $meeting,
            "Messaga" => "Success added this object"
        ];
        return response($response, 201);
    }


    public function show($id)
    {
        return Meeting::find($id);
    }


    public function update(Request $request, $id)
    {
        $product = Meeting::find($id);
        $product->update($request->all());
        return $product;
    }


    public function destroy($id)
    {
        return Meeting::destroy($id);
    }
}
