<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    public function approve(Request $request, Invoice $invoice)
    {
        $invoice->update([
            'status' => 'approved',
            'invoice_date' => now(),
        ]);

        return redirect()->route('invoices.index')->with('success', 'Invoice approved successfully.');
    }
}
