@extends('main')
@section('content')
    <!-- Elemen HTML untuk menampilkan data produk -->
    <p class="font-bold text-2xl mt-10 mx-24">Pengiriman</p>

    <div class="flex gap-10 justify-center">
        <div class="flex flex-col w-3/5">
            <div class="border p-5 rounded-xl mt-5 max-h-max">
                <p>Alamat Pengiriman</p>
                <div class="flex gap-2 mt-2">
                    <i class="fa-solid fa-location-dot mt-1"></i>
                    <p>Jl. Nangka, Kec. Patrang, Kabupaten Jember, Jawa Timur, 68111 , Patrang, Kab. Jember, Jawa Timur,
                        62895399757207</p>
                </div>
            </div>
            <div class="border p-5 rounded-xl mt-5 max-h-max relative group">
                <div class="flex gap-5">
                    <img id="productImage" width="120">
                    <div class="flex flex-col">
                        <h1 id="productName"></h1>
                        <p id="productPrice"></p>
                        <p id="productQuantity"></p>
                        <p id="totalProductPrice"></p>
                    </div>
                </div>

                <!-- Dropdown di bawah produk -->
                <div class="mt-4">
                    <label for="productOptions" class="font-semibold">Pilih Pengiriman:</label>
                    <select id="productOptions" class="mt-1 border rounded w-full p-3">
                        <option value="">Pilih Pengiriman</option>
                        <option value="J&T">J&T (Rp. 10.000)</option>
                        <option value="JNE">JNE (Rp. 15.000)</option>
                        <option value="Sicepat">Sicepat (Rp. 12.000)</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="border p-5 w-1/4 rounded-xl mt-5 max-h-max">
            <p>Ringkasan belanja</p>

            <div class="flex justify-between mt-2">
                <p>Biaya Pengiriman</p>
                <p id="shippingCost">Rp. 0</p> <!-- Tempat untuk biaya pengiriman -->
            </div>
            <div class="flex justify-between">
                <p>Total</p>
                <p id="summaryTotalPrice"></p>
            </div>
            <button id="paymentButton" class="bg-primary text-white p-2 rounded-lg mt-10 w-full">Pilih Pembayaran</button>
        </div>
    </div>

    <!-- Modal untuk ringkasan biaya -->
    <div id="paymentModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="paymentModalLabel"
        aria-hidden="true">
        <div class="flex items-center justify-center min-h-screen px-4 text-center">
            <div class="fixed inset-0 bg-black opacity-50"></div>
            <div class="inline-block w-full max-w-md p-6 my-8 bg-white rounded-lg shadow-lg z-20">
                <p class="text-start font-bold">Pembayaran</p>
                <!-- Daftar metode pembayaran -->
                <div class="mt-4">
                    <select id="paymentMethod" class="mt-1 border rounded w-full p-2">
                        <option value="">Pilih Metode Pembayaran</option>
                        <option value="bankTransfer">Transfer Bank</option>
                        <option value="creditCard">Gopay</option>
                        <option value="eWallet">E-Wallet</option>
                    </select>
                </div>
                <h5 class="mb-2text-lg font-medium text-gray-900 text-start mt-5" id="paymentModalLabel">Ringkasan
                    Pembayaran
                </h5>
                <div class="text-start mt-2">
                    <p id="modalShippingCost">Biaya Pengiriman: Rp. 0</p>
                    <p id="modalTotalPrice">Total: Rp. 0</p>
                </div>



                <div class="mt-6 flex justify-end">
                    <button type="button" class="mr-2 text-gray-500 hover:text-gray-700" id="closeModal">Tutup</button>
                    <button id="confirmPayment" type="button"
                        class="bg-primary text-white px-4 py-2 rounded">Bayar</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Biaya pengiriman berdasarkan opsi
        const shippingCosts = {
            "J&T": 10000,
            "JNE": 15000,
            "Sicepat": 12000
        };

        // Mengambil data dari localStorage
        const productData = localStorage.getItem('checkoutProduct');

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

        // Event listener untuk dropdown pengiriman
        document.getElementById('productOptions').addEventListener('change', function() {
            const selectedOption = this.value;
            const shippingCostElement = document.getElementById('shippingCost');
            const summaryTotalPriceElement = document.getElementById('summaryTotalPrice');

            if (selectedOption in shippingCosts) {
                const shippingCost = shippingCosts[selectedOption];
                shippingCostElement.innerText = `Rp. ${shippingCost.toLocaleString()}`;

                // Hitung total baru
                const totalProductPrice = JSON.parse(productData).subtotal;
                const totalWithShipping = totalProductPrice + shippingCost;
                summaryTotalPriceElement.innerText = `Rp. ${totalWithShipping.toLocaleString()}`;
            } else {
                shippingCostElement.innerText = `Rp. 0`;
                summaryTotalPriceElement.innerText = `Rp. ${JSON.parse(productData).subtotal.toLocaleString()}`;
            }
        });

        // Event listener untuk tombol pembayaran
        document.getElementById('paymentButton').addEventListener('click', function() {
            const shippingCost = document.getElementById('shippingCost').innerText;
            const totalPrice = document.getElementById('summaryTotalPrice').innerText;
            document.getElementById('modalShippingCost').innerText = `Biaya Pengiriman: ${shippingCost}`;
            document.getElementById('modalTotalPrice').innerText = `Total: ${totalPrice}`;

            // Tampilkan modal
            document.getElementById('paymentModal').classList.remove('hidden');
        });

        // Event listener untuk menutup modal
        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('paymentModal').classList.add('hidden');
        });

        // Event listener untuk tombol konfirmasi pembayaran
        document.getElementById('confirmPayment').addEventListener('click', function() {
            alert('Pembayaran berhasil!');
            window.location.href = '/produk';
            // Di sini Anda bisa menambahkan logika untuk mengalihkan pengguna ke halaman pembayaran yang sesuai
            document.getElementById('paymentModal').classList.add('hidden');
        });

        // Event listener untuk tombol hapus
        document.getElementById('deleteButton').addEventListener('click', function() {
            // Hapus data dari localStorage
            localStorage.removeItem('checkoutProduct');
            // Perbarui tampilan
            document.getElementById('productName').innerText = '';
            document.getElementById('productPrice').innerText = '';
            document.getElementById('totalProductPrice').innerText = '';
            document.getElementById('productQuantity').innerText = '';
            document.getElementById('productImage').src = '';
            document.getElementById('summaryTotalPrice').innerText = '';
            document.getElementById('shippingCost').innerText = 'Rp. 0';
            alert('Produk berhasil dihapus dari keranjang.');
        });
    </script>
@endsection
