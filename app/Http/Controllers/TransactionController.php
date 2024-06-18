<?php
// app/Http/Controllers/TransactionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction; // Make sure to import your Transaction model

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'postal_code' => 'required|string|max:10',
            'address' => 'required|string|max:255',
            'unit_no' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'delivery_method' => 'required|string',
            'payment_method' => 'required|string',
            'terms' => 'accepted',
        ]);

        // Create a new transaction record
        $transaction = new Transaction();
        $transaction->first_name = $validated['first_name'];
        $transaction->last_name = $validated['last_name'];
        $transaction->email = $validated['email'];
        $transaction->phone = $validated['phone'];
        $transaction->postal_code = $validated['postal_code'];
        $transaction->address = $validated['address'];
        $transaction->unit_no = $validated['unit_no'];
        $transaction->city = $validated['city'];
        $transaction->delivery_method = $validated['delivery_method'];
        $transaction->payment_method = $validated['payment_method'];

        // Save the transaction
        $transaction->save();

        // Redirect back with success message
        return redirect()->route('transaksi')->with('success', 'Transaction successful!');
    }
}
