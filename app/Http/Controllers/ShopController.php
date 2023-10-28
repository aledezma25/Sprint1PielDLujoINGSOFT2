<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Tag;
use DB;

class ShopController extends Controller
{
    

    public function index() {
        $pagination = 12;
        if(request()->category) {
            $category = Category::where('slug', request()->category)->get()->first();
            $products = Product::where('category_id', $category->id);
            $categoryName = $category->name;
        } else if(request()->tag) {
            $tag = Tag::where('slug', request()->tag)->get()->first();
            $products = $tag->products();
            $tagName = $tag->name;
        } else {
            $products = Product::where('featured', true);
            $categoryName = 'Artículos';
        }
            $products = $products->inRandomOrder()->paginate($pagination);
            
        $categories = Category::all();
        $tags = Tag::all();
        return view('shop')->with([
            'products' => $products,
            'categories'=> $categories,
            'tags'=> $tags,
        'categoryName' => $categoryName ?? null,
            'tagName' => $tagName ?? null
            ]);
    }

    public function show($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        $images = json_decode($product->images);
        $mightLike = Product::where('slug', '!=', $product->slug)->mightAlsoLike()->get();
        $stockLevel = getStockLevel($product->quantity);
        return view('product')->with([
            'product' => $product,
            'mightLike' => $mightLike,
            'images' => $images,
            'stockLevel' => $stockLevel
        ]);
    }
        public function search($query) {
            if(strlen($query) < 3) return back()->with('error', 'la longitud mínima de la consulta es 3 caracteres');
            // $products = Product::search($query)->paginate(10);
            $products = Product::where('name', 'like', "%$query%")
            ->orWhere('details', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->paginate(10);
            return view('search')->with(['products' => $products, 'query' => $query]);
        }
    
    
    
    

}
