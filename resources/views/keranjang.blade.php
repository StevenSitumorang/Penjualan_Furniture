@extends('layout.keranjang')

@section('title', 'Aplikasi Web Penjualan Furniture')

@section('content')
<div class="main px-20 py-10">
  <h2 class="text-center text-3xl font-bold mb-8">Shopping Cart</h2>
  <div class="shopping-cart w-3/4 mx-auto">
    <div class="product-header flex font-bold pb-4">
      <div class="w-1/2 px-6 py-3 bg-gray-100 text-left block tracking-wider border-b">PRODUCT</div>
      <div class="w-1/4 px-6 py-3 bg-gray-100 text-left block tracking-wider border-b">QUANTITY</div> 
      <div class="w-1/4 px-6 py-3 bg-gray-100 text-left block tracking-wider border-b">PRICE</div> 
    </div>

    @foreach($cartItems as $item)
    <div class="bg-white shadow-md rounded-md overflow-hidden mb-6" data-id="{{ $item->id }}">
      <div class="flex items-center py-4 px-6 border-b border-gray-200">
        <div class="flex items-center w-1/2">
          <input type="checkbox" class="item-checkbox ml-4 mr-8">
          <img src="{{ asset('images/' . $item->product_image) }}" alt="Product Image" class="w-24 h-24 mr-8">
          <div>
            <strong class="block">{{ $item->product_name }}</strong>
            <p class="text-gray-600">{{ $item->product_description }}</p>
          </div>
        </div>  
        <div class="flex items-center w-1/4 justify-center">
          <button class="bg-gray-300 px-3 py-1 rounded-l-md quantity-decrease" data-id="{{ $item->id }}">-</button>
          <input type="text" value="{{ $item->quantity }}" class="text-center w-10 h-8 border border-gray-300 item-quantity" data-id="{{ $item->id }}">
          <button class="bg-gray-300 px-3 py-1 rounded-r-md quantity-increase" data-id="{{ $item->id }}">+</button>
        </div>
        <p class="w-1/4 text-center">Rp<span class="item-price">{{ number_format($item->price * $item->quantity, 2, ',', '.') }}</span></p>
        <button class="bg-red-500 text-white px-4 py-2 rounded-md delete-button" data-id="{{ $item->id }}">Delete</button>
        
      </div>
    </div>
    @endforeach
  </div>

  <table class="invoice-table w-full">
  <div class="shopping-cart w-1/3 mx-auto float-right mr-40">
    <div class="bg-white shadow-md rounded-md p-6 mb-6">
      <div class="flex items-center justify-between">
        <div>
          <input type="checkbox" id="select-all" class="mr-2">
          <label for="select-all">Choose All</label>
        </div>
        <div class="text-right">
          <label class="font-semibold">Total:</label>
          <span class="text-xl font-bold ml-2" id="total-price">Rp0</span>
        </div>
      </div>
      <button class="bg-black text-white px-4 py-2 rounded-md mt-4 w-full checkout-button">Checkout</button>
    </div>
  </div>
</div>
</table>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const selectAllCheckbox = document.getElementById('select-all');
    const itemCheckboxes = document.querySelectorAll('.item-checkbox');
    const deleteButtons = document.querySelectorAll('.delete-button');
    const quantityIncreases = document.querySelectorAll('.quantity-increase');
    const quantityDecreases = document.querySelectorAll('.quantity-decrease');
    const quantityInputs = document.querySelectorAll('.item-quantity');
    const totalPriceElement = document.getElementById('total-price');
    const checkoutButton = document.querySelector('.checkout-button');

    // Event listener untuk tombol checkout
    checkoutButton.addEventListener('click', function () {
        const anyChecked = Array.from(itemCheckboxes).some(checkbox => checkbox.checked);
        if (!anyChecked) {
            alert('You have not selected an item yet');
        } else {
            window.location.href = '/transaksi';
        }
    });

    // Event listener untuk checkbox pilih semua
    selectAllCheckbox.addEventListener('change', function () {
        itemCheckboxes.forEach(checkbox => {
            checkbox.checked = selectAllCheckbox.checked;
        });
        updateTotalPrice();
    });

    // Event listener untuk setiap checkbox item
    itemCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateTotalPrice);
    });

    // Event listener untuk tombol hapus
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const itemId = button.getAttribute('data-id');

            fetch(`/keranjang/hapus/${itemId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.querySelector(`[data-id="${itemId}"]`).remove();
                    updateTotalPrice();
                }
            });
        });
    });

    // Event listener untuk tombol tambah jumlah
    quantityIncreases.forEach(button => {
        button.addEventListener('click', function () {
            const itemId = button.getAttribute('data-id');
            const quantityInput = document.querySelector(`.item-quantity[data-id="${itemId}"]`);
            let quantity = parseInt(quantityInput.value);
            quantityInput.value = ++quantity;
            updateItemQuantity(itemId, quantity);
        });
    });

    // Event listener untuk tombol kurang jumlah
    quantityDecreases.forEach(button => {
        button.addEventListener('click', function () {
            const itemId = button.getAttribute('data-id');
            const quantityInput = document.querySelector(`.item-quantity[data-id="${itemId}"]`);
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = --quantity;
                updateItemQuantity(itemId, quantity);
            }
        });
    });

    // Event listener untuk input jumlah langsung
    quantityInputs.forEach(input => {
        input.addEventListener('change', function () {
            const itemId = input.getAttribute('data-id');
            let quantity = parseInt(input.value);
            if (quantity < 1) {
                quantity = 1;
                input.value = quantity;
            }
            updateItemQuantity(itemId, quantity);
        });
    });

    // Fungsi untuk mengupdate jumlah item di database
    function updateItemQuantity(itemId, quantity) {
        fetch(`/keranjang/update/${itemId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ quantity: quantity })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const itemElement = document.querySelector(`[data-id="${itemId}"]`);
                const priceElement = itemElement.querySelector('.item-price');
                const price = data.price * quantity;
                priceElement.textContent = `Rp${number_format(price, 2, ',', '.')}`;
                updateTotalPrice();
            }
        });
    }

    // Fungsi untuk menghitung total harga
    function updateTotalPrice() {
        let total = 0;

        itemCheckboxes.forEach(checkbox => {
            if (checkbox.checked) {
                const itemElement = checkbox.closest('[data-id]');
                const priceElement = itemElement.querySelector('.item-price');
                const price = parseFloat(priceElement.textContent.replace('Rp', '').replace(/\./g, '').replace(',', '.'));
                total += price;
            }
        });

        totalPriceElement.textContent = `Rp${total.toLocaleString('id-ID', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
    }

    // Fungsi untuk format angka dengan ribuan dan desimal
    function number_format(number, decimals, dec_point, thousands_sep) {
        number = parseFloat(number).toFixed(decimals);
        let nstr = number.toString();
        let x = nstr.split('.');
        let x1 = x[0];
        let x2 = x.length > 1 ? dec_point + x[1] : '';
        let rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');
        }
        return x1 + x2;
    }

    // Inisialisasi perhitungan harga total saat halaman dimuat
    updateTotalPrice();
});
</script>
@endsection
