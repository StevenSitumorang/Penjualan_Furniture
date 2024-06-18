<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::all();
        return view('keranjang', compact('cartItems'));
    }

    public function destroy($id)
    {
        $cartItem = CartItem::find($id);
        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

    public function update(Request $request, $id)
    {
        $cartItem = CartItem::find($id);
        if ($cartItem) {
            $cartItem->quantity = $request->quantity;
            $cartItem->save();
            return response()->json(['success' => true, 'price' => $cartItem->price]);
        }
        return response()->json(['success' => false], 404);
    }

    public function hapusItem($id)
{
    $item = CartItem::findOrFail($id);
    $item->delete();

    return response()->json(['success' => true]);
}

public function updateQuantity(Request $request, $id)
{
    $item = CartItem::findOrFail($id);
    $item->quantity = $request->quantity;
    $item->save();

    return response()->json([
        'success' => true,
        'price' => $item->price * $item->quantity
    ]);
}

}