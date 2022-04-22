<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Property;

class PagesController extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }
    public function dashboard()
    {
        return view('backend.index');
    }
    public function contact()
    {
        return view('backend.contact');
    }
    public function properties()
    {
        return view('backend.properties');
    }
    // public function detail()
    // {
    //     return view('property.detail');
    // }

   

}
