<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\Meeting;
class Home extends Controller
{
    public function indexToIndex()
    {
        $allData = [news::all(), Meeting::all()];
        return view('index')->with('allData', $allData);
    }

}
