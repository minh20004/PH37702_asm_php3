<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function aboutMe(){
        return view('client.page.about-me');
    }

    public function aboutUs(){
        return view('client.page.about-us');
    }

    public function contact(){
        return view('client.page.contact');
    }
    public function chitiet($id){
        $data = ['id' => $id];
        return view('client.page.post-details', $data);
    }
    public function SearchNotFound(){
        return view('client.page.search-not-found');
    }
}
