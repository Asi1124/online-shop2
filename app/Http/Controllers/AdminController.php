<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function show(){
        return Inertia::render('admin');
    }

    public function create(Request $request){

        $product = Product::create($request->validate([
            'name' => ['required', 'max:50'],
            'description' => ['required', 'max:255'],
            'price' => ['required', 'max:50'],
        ]));
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $name = ($file->getClientOriginalName());
                $file->move(public_path() . '/uploads/', $name);
                $fileModal = new ProductImages();
                $fileModal->name = $name;
                $fileModal->image_path = (public_path() . '/uploads/'. $name);
                $fileModal->product_id = $product->id;
                $fileModal->save();
                $name = null;

            }
        }

    }

}
