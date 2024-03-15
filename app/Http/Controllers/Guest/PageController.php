<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\train;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    //
    public function index(){
        $train=train::where('Orario_di_Partenza', '>', Carbon::now())->get();
        return view("layouts.app" ,compact('train'));
    }
}
