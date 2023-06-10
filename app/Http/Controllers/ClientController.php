<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Product;

class ClientController extends Controller
{
    public function home(){
        $produits = product::orderBy('product_name','desc')->paginate(2);
        return view('client.home')->with('produits',$produits);
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


 public function login(){
    return view('client.login');
}

  /* login controller */


   public function register(){
    return view('client.register');
}

  /* register controller */

public function show($id){
    print('ID du produit est'.$id);
}
public function save(){
    return view('client.creer');
}
public function creerproduit(Request $request){
    $produit = New product();


    $produit->product_name = $request->product_name;
    $produit->product_price = $request->product_price;
    $produit->description = $request->product_description;

    $produit->save();
    Session::put('message','le produit '.$request->product_name.' a été inséré avec succès');
    return redirect('/save');
}
public function edit(){
    return view('client.edit');

}


}