<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function addCart(Request $request, Article $article){
        $request-> validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $new_cart = new Cart();

        $new_cart->user_id = Auth::id();
        $new_cart->article_id = $article->id;
        $new_cart->quantity = $request->quantity;
        $new_cart->save();

        return redirect()->back()->with('success', 'Prodotto aggiunto al carrello');


    }
}
