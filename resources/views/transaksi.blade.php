@extends('layout.transaksi')

@section('title', 'Aplikasi Web Penjualan Furniture')

@section('content')
<div class="main px-20 py-10">
    <div class="checkout-container flex justify-between mx-40">
        <div class="checkout-section billing-details w-full md:w-3/5 mb-4 md:mb-0">
            <h2 class="text-xl border-b-2 border-gray-300 pb-2 mb-4 mt-4">Orderer Details</h2>
            <form id="checkoutForm" method="POST" action="{{ route('transactions.store') }}" class="p-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="first_name" placeholder="First Name" class="w-full px-4 py-2 mb-4 border rounded-md">
                    <input type="text" name="last_name" placeholder="Last Name" class="w-full px-4 py-2 mb-4 border rounded-md">
                    <input type="email" name="email" placeholder="Email" class="w-full px-4 py-2 mb-4 border rounded-md">
                    <input type="tel" name="phone" placeholder="No. Hp" class="w-full px-4 py-2 mb-4 border rounded-md">
                    <input type="text" name="postal_code" placeholder="Postal Code" class="w-full px-4 py-2 mb-4 border rounded-md">
                    <input type="text" name="address" placeholder="Address" class="w-full px-4 py-2 mb-4 border rounded-md">
                    <input type="text" name="unit_no" placeholder="Unit No." class="w-full px-4 py-2 mb-4 border rounded-md">
                    <select name="city" class="w-full px-4 py-2 mb-4 border rounded-md">
                        <option value="batam">Batam</option>
                        <option value="tanjungpinang">Tanjung Pinang</option>
                        <option value="bintan">Bintan</option>
                        <option value="riau">Riau</option>
                    </select>
                </div>
            </div>

            <div class="checkout-section payment-method w-full md:w-2/6 mb-4 md:mb-0">
                <h2 class="text-xl border-b-2 border-gray-300 pb-2 mb-4 mt-4">Shipping Method</h2>
                <form class="p-4">
                    <label for="standard_shipping" class="mb-2 flex items-center">
                        <input type="radio" id="standard_shipping" name="delivery_method" value="standard_shipping" class="mr-2">
                        Standard Shipping
                    </label>
                    <label for="on_site_pick_up" class="mb-2 flex items-center">
                        <input type="radio" id="on_site_pick_up" name="delivery_method" value="on_site_pick_up" class="mr-2">
                        On-Site Pick Up
                    </label>

                    <h2 class="text-xl border-b-2 border-gray-300 pb-2 mb-4 mt-4">Payment Method</h2>
                    <label for="bank_transfer" class="mb-2 flex items-center">
                        <input type="radio" id="bank_transfer" name="payment_method" value="bank_transfer" class="mr-2">
                        Bank Transfer
                    </label>
                    <label for="card" class="mb-2 flex items-center">
                        <input type="radio" id="card" name="payment_method" value="card" class="mr-2">
                        Credit or Debit Card (Processed securely by Stripe)
                    </label>
                    <label for="paypal" class="mb-4 flex items-center">
                        <input type="radio" id="paypal" name="payment_method" value="paypal" class="mr-2">
                        PayPal Express
                    </label>

                    <input type="checkbox" id="terms" name="terms" class="mr-2">
                    <label for="terms">I have read and agree to the Terms & Conditions</label><br>
                    <button type="button" onclick="validateForm()" class="submit-btn mt-4 bg-black text-white px-10 py-2 rounded cursor-pointer">Proceed to payment</button>
                </form>
            </div>
        </form>
    </div>

    <div class="checkout-container flex justify-between mx-40">
        <div class="checkout-section billing-details w-full md:w-3/5 mb-4 md:mb-0">
            <h2 class="text-xl border-b-2 border-gray-300 pb-2 mb-4 mt-4">Order Details</h2>
            <table class="invoice-table w-full">
                <tr>
                    <th class="px-4 py-2">IMAGE</th>
                    <th class="px-4 py-2">PRODUCT NAME</th>
                    <th class="px-4 py-2">QUANTITY</th>
                    <th class="px-4 py-2">PRICE</th>
                </tr>
                <!-- Tambahkan baris produk di sini -->
                <tr>
                    <td class="px-4 py-2 align-top"><img src="{{ asset('images/') }}" alt="" width="100"></td>
                    <td class="px-4 py-2 align-top">
                        <p class="font-bold ml-10">LEIRVIK</p>
                        <p class="text-sm ml-10">Tepi kasur, putih, 200 cm</p>
                    </td>
                    <td class="px-4 py-2 align-top">
                        <p class="text-center">x 1</p>
                    </td>
                    <td class="px-4 py-2 align-top text-right">Rp400,000</td>
                </tr>
            </table>
            <div class="totals mt-4">
                <table class="totals-table w-full border-t border-gray-300">
                    <tr class="line-item">
                        <td class="label text-right">Sub-Total:</td>
                        <td class="px-4 py-2 text-right">Rp400,000,000</td>
                    </tr>
                    <tr class="line-item">
                        <td class="label text-right">Standard Delivery:</td>
                        <td class="px-4 py-2 text-right">Rp100,000</td>
                    </tr>
                    <tr class="line-item">
                        <td class="label text-right">Total:</td>
                        <td class="px-4 py-2 text-right">Rp545,000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function validateForm() {
        var form = document.getElementById('checkoutForm');
        var inputs = form.getElementsByTagName('input');
        var selects = form.getElementsByTagName('select');
        var terms = document.getElementById('terms');

        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].type === 'text' || inputs[i].type === 'email' || inputs[i].type === 'tel') {
                if (inputs[i].value.trim() === '') {
                    alert('All fields cannot be empty');
                    return;
                }
            }
        }

        for (var j = 0; j < selects.length; j++) {
            if (selects[j].value.trim() === '') {
                alert('All fields cannot be empty');
                return;
            }
        }

        if (!terms.checked) {
            alert('Please agree to the Terms & Conditions');
            return;
        }

        form.submit();
    }
</script>

@endsection
