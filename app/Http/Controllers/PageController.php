<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index(){
        $Recomindations = Product::orderBy('created_at')->take(4)->get();
        $Photos = ProductImages::whereIn('product_id', $Recomindations->pluck('id'))->get();
        return Inertia::render('Home',[
            'Recomindations' => $Recomindations,
            'Photos' => $Photos,
        ]);
    }

    public function shop(){
        return Inertia::render('Shop');
    }
}
