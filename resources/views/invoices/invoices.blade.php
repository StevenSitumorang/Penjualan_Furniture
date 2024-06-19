@extends('layout.index')

@section('title', 'Invoices')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Invoices</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border-gray-200 shadow-md rounded-md">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border-b border-gray-200">Invoice Number</th>
                    <th class="py-2 px-4 border-b border-gray-200">User ID</th>
                    <th class="py-2 px-4 border-b border-gray-200">Total Amount</th>
                    <th class="py-2 px-4 border-b border-gray-200">Invoice Date</th>
                    <th class="py-2 px-4 border-b border-gray-200">Status</th>
                    <th class="py-2 px-4 border-b border-gray-200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $invoice)
                    <tr>
                        <td class="py-3 px-4 border-b border-gray-200">{{ $invoice->invoice_number }}</td>
                        <td class="py-3 px-4 border-b border-gray-200">{{ $invoice->user_id }}</td>
                        <td class="py-3 px-4 border-b border-gray-200">{{ $invoice->total_amount }}</td>
                        <td class="py-3 px-4 border-b border-gray-200">{{ $invoice->invoice_date }}</td>
                        <td class="py-3 px-4 border-b border-gray-200">{{ $invoice->status }}</td>
                        <td class="py-3 px-4 border-b border-gray-200">
                            <a href="{{ route('invoices.show', $invoice->id) }}"
                                class="text-blue-600 hover:underline mr-2">View</a>
                            @if ($invoice->status == 'pending')
                                <form action="{{ route('invoices.approve', $invoice->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="text-green-600 hover:underline">Approve</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection