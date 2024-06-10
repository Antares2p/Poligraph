<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        return view('home');
    }

    public function comment(){
        return view('comment');
    }
    public function contact(){
        return view('contact');
    }
    public function design(){
        return view('design');
    }
    public function production(){
        return view('production');
    }

    public function tool(){
        return view('tool');
    }

    public function comment_check(Request $request){
        $valid = $request->validate([
            'email' =>'required|min:4|max:180',
            'subject' =>'required|min:4|max:100',
            'message' =>'required|min:15|max:500'
        ]);
    }
}
