<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view('client.home');
    }

    /* home controller */

    public function apropos(){
        return view('client.apropos');
    }

     /* apropos controller */

    public function categorie(){
        return view('client.categorie');
    }

     /* categorie controller */

    public function contact(){
        return view('client.contact');
    }

    /* contact controller */

    public function special(){
        return view('client.special');
    }

 /* special controller */

}