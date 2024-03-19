<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    //
    public function index(){
        $train=Train::where('Orario_di_Partenza', '>', Carbon::now())->get();
        return view("layouts.app" ,compact('train'));
    }
}
