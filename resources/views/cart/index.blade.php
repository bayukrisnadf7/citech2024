@extends('main')
@section('content')
    <p class="font-bold text-2xl mt-10 mx-24">Keranjang</p>

    <div class="flex gap-10 justify-center">
        <div class="flex flex-col w-3/5">
            <!-- Produk Section -->
            <div class="border p-5 rounded-xl mt-5 max-h-max">
                <div class="flex items-center justify-between">
                    <div class="flex gap-5 items-center">
                        <input type="checkbox">
                        <p>Pilih semua</p>
                    </div>
                    <button class="text-primary font-bold">Hapus</button>
                </div>
            </div>
            <div class="border p-5 rounded-xl mt-5 max-h-max relative group" id="productCard">
                <div class="absolute top-2 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <button id="deleteProductButton" class="text-red-500">
                        <i class="fa fa-trash"></i>
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
            
            <!-- Pelatihan Section -->
            <div class="border p-5 rounded-xl mt-5 max-h-max relative group" id="pelatihanCard">
                <div class="absolute top-2 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <button id="deletePelatihanButton" class="text-red-500">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
                <div class="flex gap-5">
                    <img id="pelatihanImage" width="120">
                    <div class="flex flex-col">
                        <h1 id="pelatihanName"></h1>
                        <p id="pelatihanPrice"></p>
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
        const pelatihanData = localStorage.getItem('cartPelatihan');

        // Mengisi data produk
        if (productData) {
            const product = JSON.parse(productData);
            document.getElementById('productCard').style.display = 'block';
            document.getElementById('productName').innerText = product.name;
            document.getElementById('productPrice').innerText = `Harga: Rp. ${product.price.toLocaleString()}`;
            document.getElementById('totalProductPrice').innerText = `Total: Rp. ${product.subtotal.toLocaleString()}`;
            document.getElementById('productQuantity').innerText = `Jumlah: ${product.quantity}`;
            document.getElementById('productImage').src = product.image;
            document.getElementById('summaryTotalPrice').innerText = `Rp. ${product.subtotal.toLocaleString()}`;
        } else {
            document.getElementById('productCard').style.display = 'none';
        }

        // Mengisi data pelatihan
        if (pelatihanData) {
            const pelatihan = JSON.parse(pelatihanData);
            document.getElementById('pelatihanCard').style.display = 'block';
            document.getElementById('pelatihanName').innerText = pelatihan.name;
            document.getElementById('pelatihanImage').src = pelatihan.image;
            document.getElementById('pelatihanPrice').innerText = `Harga: Rp. ${pelatihan.price.toLocaleString()}`;
            document.getElementById('summaryTotalPrice').innerText = `Rp. ${pelatihan.price.toLocaleString()}`;
        } else {
            document.getElementById('pelatihanCard').style.display = 'none';
        }

        // Hapus produk
        document.getElementById('deleteProductButton').addEventListener('click', function() {
            localStorage.removeItem('cartProduct');
            document.getElementById('productCard').style.display = 'none';
            alert('Produk berhasil dihapus dari keranjang.');
        });

        // Hapus pelatihan
        document.getElementById('deletePelatihanButton').addEventListener('click', function() {
            localStorage.removeItem('cartPelatihan');
            document.getElementById('pelatihanCard').style.display = 'none';
            alert('Pelatihan berhasil dihapus dari keranjang.');
        });
    </script>
@endsection
