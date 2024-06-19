<?php

namespace App\Http\Controllers;

use App\Models\PaymentValidation;
use App\Models\Invoice;
use Illuminate\Http\Request;

class PaymentValidationController extends Controller
{
    public function index()
    {
        $validations = PaymentValidation::all();
        return view('validations.index', compact('validations'));
    }

    public function validatePayment(Request $request, PaymentValidation $validation)
    {
        // Validate the request input
        $request->validate([
            'status' => 'required|string|in:approved,rejected,pending'
        ]);

        // Update the validation status
        $validation->update(['status' => $request->status]);

        // Generate an invoice if the payment is approved
        if ($request->status == 'approved') {
            Invoice::create([
                'invoice_number' => 'INV-' . time(),
                'user_id' => $validation->user_id,
                'total_amount' => $validation->amount,
                'status' => 'approved',
                'invoice_date' => now(),
            ]);
        }

        return redirect()->route('validations.index')->with('success', 'Payment validated successfully.');
    }
}
