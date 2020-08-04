<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\facture;
use App\Product;
use Barryvdh\DomPDF\PDF;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class Productcontroller extends Controller
{
    public $product;
    public function index()
    {
        // $prod = Product::paginate(5);

        return view('pages.farming');
    }

    public function showelevage(Request $request)
    {
        ($request->id ? $request->id :$request->id=1);
        $category = Category::all();
        $this->product = Product::where('categorie_id',$request->id)->paginate(12);
        
       return view('pages.elevage', ['product'=>$this->product,'category'=>$category]);
    }

    public function show(Request $request)
    {
        $producShow = Product::findOrFail(request('id'));
        return view('pages.details', compact('producShow'));
    }
    public function pdf (Request $request)
    {
        $data = [
            'fullname' => strtoupper(request('fname')).' '.ucwords(request('lname')),
            'email' => request('userEmail'),
            'phone' => request('phone'),
            'delivery_location' => request('home')
        ];
        $cart = \Cart::getContent();
        $price = \Cart::getTotal();
        // $pdf = \PDF::loadView('pages.facture');
        // $pdf = \PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = \PDF::loadView('pages.facture',compact('data','cart','price'));
        $data = ['name'=>'KAKOU MALACHIE'];
        Mail::to('ordyra.info@gmail.com')->cc('noelsouame@gmail.com')->send( new facture($data));
        return $pdf->download('Facture_ordyra.pdf');
        
        // return $pdf->stream();
    }
    public function checkout()
    {
        return view('pages.register');
    }

    public function OneArticle(Request $request)
    {
        $detail = Product::findOrFail(request('id'));
        // dd($details);
        return view('pages.details',compact('detail'));
    }
}
