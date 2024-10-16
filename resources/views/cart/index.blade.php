@extends('main')
@section('content')
    <!-- Elemen HTML untuk menampilkan data produk -->
    <p class="font-bold text-2xl mt-10 mx-24">Keranjang</p>

    <div class="flex gap-10 justify-center">
        <div class="flex flex-col w-3/5">
            <div class="border p-5 rounded-xl mt-5 max-h-max">
                <div class="flex items-center justify-between">
                    <div class="flex gap-5 items-center">
                        <input type="checkbox">
                        <p>Pilih semua</p>
                    </div>
                    <button class="text-primary font-bold">Hapus</button>
                </div>
            </div>
            <div class="border p-5 rounded-xl mt-5 max-h-max relative group">
                <div class="absolute top-2 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <button id="deleteButton" class="text-red-500">
                        <i class="fa fa-trash"></i> <!-- Ganti dengan ikon trash sesuai kebutuhan -->
                    </button>
                </div>
                <div class="flex gap-5">
                    <img id="productImage" width="120">
                    <div class="flex flex-col">
                        <h1 id="productName"></h1>
                        <p id="productPrice"></p>
                        <p id="productQuantity"></p>
                        <p id="totalProductPrice"></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="border p-5 w-1/4 rounded-xl mt-5 max-h-max">
            <p>Ringkasan belanja</p>
            <div class="flex justify-between mt-5">
                <p>Total</p>
                <p id="summaryTotalPrice"></p>
            </div>
            <button onclick="location.href='/pengiriman'" class="bg-primary text-white p-2 rounded-lg mt-10 w-full">Beli</button>
        </div>

    </div>

    <script>
        // Mengambil data dari localStorage
        const productData = localStorage.getItem('cartProduct');

        // Jika data ditemukan di localStorage
        if (productData) {
            // Parse data dari string menjadi objek
            const product = JSON.parse(productData);
            // Memasukkan data produk ke dalam elemen HTML
            document.getElementById('productName').innerText = product.name;
            document.getElementById('productPrice').innerText = `Harga: Rp. ${product.price.toLocaleString()}`;
            document.getElementById('totalProductPrice').innerText = `Total: Rp. ${product.subtotal.toLocaleString()}`;
            document.getElementById('productQuantity').innerText = `Jumlah: ${product.quantity}`;
            document.getElementById('productImage').src = product.image;

            // Setel total di ringkasan belanja
            document.getElementById('summaryTotalPrice').innerText = `Rp. ${product.subtotal.toLocaleString()}`;
        } else {
            // Jika tidak ada data di localStorage
            console.log('No product data found in localStorage.');
        }

        // Event listener untuk tombol hapus
        document.getElementById('deleteButton').addEventListener('click', function() {
            // Hapus data dari localStorage
            localStorage.removeItem('cartProduct');
            // Perbarui tampilan
            document.getElementById('productName').innerText = '';
            document.getElementById('productPrice').innerText = '';
            document.getElementById('totalProductPrice').innerText = '';
            document.getElementById('productQuantity').innerText = '';
            document.getElementById('productImage').src = '';
            document.getElementById('summaryTotalPrice').innerText = '';
            alert('Produk berhasil dihapus dari keranjang.');
        });
    </script>
@endsection
