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

            <!-- Pelatihan Section -->
            <div class="border p-5 rounded-xl mt-5 max-h-max relative group" id="pelatihanCard">
                <div class="absolute top-2 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <button id="deletePelatihanButton" class="text-red-500">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
                <div class="flex gap-5">
                    <img id="pelatihanImage" width="200" class="rounded-xl">
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
            <button id="beliButton" class="bg-primary text-white p-2 rounded-lg mt-10 w-full">Beli</button>
        </div>
    </div>

    <!-- Modal -->
    <div id="beliModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-hidden="true">
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
                <h5 class="mb-2 text-lg font-medium text-gray-900 text-start mt-5" id="paymentModalLabel">Ringkasan Pembayaran</h5>
                <div class="text-start mt-2">
                    <p id="modalTotalPrice">Total: Rp. 0</p>
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="button" class="mr-2 text-gray-500 hover:text-gray-700" id="closeModal">Tutup</button>
                    <button id="confirmPayment" type="button" class="bg-primary text-white px-4 py-2 rounded">Bayar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mengambil data dari localStorage
        const pelatihanData = localStorage.getItem('cartPelatihan');

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

        // Hapus pelatihan
        document.getElementById('deletePelatihanButton').addEventListener('click', function() {
            localStorage.removeItem('cartPelatihan');
            document.getElementById('pelatihanCard').style.display = 'none';
            alert('Pelatihan berhasil dihapus dari keranjang.');
        });

        // Beli Button Click - Show Modal
        document.getElementById('beliButton').addEventListener('click', function() {
            // Ambil total harga dari ringkasan belanja
            const totalHarga = document.getElementById('summaryTotalPrice').innerText;
            
            // Tampilkan total harga di modal
            document.getElementById('modalTotalPrice').innerText = `Total: ${totalHarga}`;
            
            // Tampilkan modal
            document.getElementById('beliModal').classList.remove('hidden');
        });

        // Close Modal
        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('beliModal').classList.add('hidden');
        });

        // Confirm Payment Button
        document.getElementById('confirmPayment').addEventListener('click', function() {

            alert('Pembayaran berhasil!');
            // Hapus cartPelatihan dari localStorage
            localStorage.removeItem('cartPelatihan');
            
            // Alihkan pengguna ke halaman /pelatihan
            window.location.href = '/pelatihan';
        });
    </script>
@endsection
