@extends('main')
@section('content')
    {{-- 
        LAYOUT UTAMA:
        - Default (mobile): Tampilan kolom vertikal (flex-col).
        - Layar besar (lg): Tampilan baris horizontal (lg:flex-row).
    --}}
    <div class="flex flex-col lg:flex-row gap-8 lg:gap-14 mt-5">
        
        {{-- BAGIAN GAMBAR PRODUK --}}
        <div class="flex flex-col-reverse lg:flex-row lg:gap-4 w-full lg:w-2/3 gap-5">
            <div class="flex flex-row lg:flex-col gap-2 mt-2 lg:mt-0 overflow-x-auto order-1 lg:order-none">
                <img src="img/produk-1.png" alt="Thumbnail 1" class="w-24 h-24 object-cover rounded-xl cursor-pointer">
                <img src="img/produk-1.png" alt="Thumbnail 2" class="w-24 h-24 object-cover rounded-xl cursor-pointer">
                <img src="img/produk-1.png" alt="Thumbnail 3" class="w-24 h-24 object-cover rounded-xl cursor-pointer">
                <img src="img/produk-1.png" alt="Thumbnail 4" class="w-24 h-24 object-cover rounded-xl cursor-pointer">
            </div>

            {{-- GAMBAR UTAMA --}}
            <div class="w-full">
                 <img src="img/produk-1.png" alt="" width="620">
            </div>
        </div>

        {{-- BAGIAN DETAIL & CHECKOUT --}}
        <div class="w-full lg:w-1/3">
            <p class="text-2xl lg:text-3xl font-semibold">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
            <div class="flex flex-wrap mt-4 gap-x-4 gap-y-2">
                <div class="flex items-center">
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <p class="ml-2 text-slate-500">5.0</p>
                </div>
                <div class="flex items-center gap-2 text-slate-500">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p>1282 Terjual</p>
                </div>
            </div>

            <div class="flex items-center mt-4 gap-3">
                <div class="flex items-center gap-2">
                    <div class="flex gap-3 text-slate-500 items-center">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <p class="text-lg">Stok:</p>
                    </div>
                    <p class="font-bold">4350</p>
                </div>
                <div>
                    <p class="bg-tertiary p-1 px-3 text-sm text-center font-bold rounded-full">Produk Jadi</p>
                </div>
            </div>

            {{-- KOTAK CHECKOUT --}}
            <div class="mt-5 bg-slate-100 p-5 rounded-2xl">
                <p class="text-xl font-medium">Checkout | Jumlah Pembelian</p>
                <div class="flex flex-wrap gap-5 items-center mt-4">
                    <div class="flex items-center gap-3 bg-white p-1 rounded-xl shadow-sm">
                        <button id="subButton" class="bg-primary p-1 rounded-lg w-10 text-center text-white font-bold text-lg">-</button>
                        <p id="quantity" class="w-8 text-center font-bold text-lg">1</p>
                        <button id="addButton" class="bg-primary p-1 rounded-lg w-10 text-center text-white font-bold text-lg">+</button>
                    </div>
                    <div class="flex gap-2">
                        <p class="text-slate-500">Max Jumlah:</p>
                        <p id="maxQuantity" class="font-bold">10</p>
                    </div>
                </div>

                <div class="flex justify-between mt-5 items-center">
                    <p class="text-slate-500">Subtotal Barang:</p>
                    <p id="subtotal" class="font-bold text-2xl">Rp. 220.000,00</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 mt-5 w-full">
                    <button id="checkoutButton" class="p-3 bg-secondary rounded-lg text-white text-center w-full font-semibold">Checkout Produk</button>
                    <button id="addToCartButton" class="p-3 bg-primary rounded-lg text-white text-center w-full flex items-center justify-center space-x-2 font-semibold">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Keranjang</span>
                    </button>
                </div>

                <p class="mt-5 text-center sm:text-left">
                    <a href="#" class="inline-flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                        <span class="underline">Chat Admin</span>
                    </a>
                </p>
            </div>
        </div>
    </div>

    {{-- BAGIAN TABS (Deskripsi, Spesifikasi, Ulasan) --}}
    <div class="w-full mt-10">
        <ul class="flex cursor-pointer bg-slate-100 p-2 rounded-full items-center max-w-md">
            <li id="tab-description" class="hover:bg-white p-2 rounded-full w-full text-center active-tab" onclick="showTabContent('description')">Deskripsi</li>
            <li id="tab-specification" class="hover:bg-white p-2 rounded-full w-full text-center" onclick="showTabContent('specification')">Spesifikasi</li>
            <li id="tab-review" class="hover:bg-white p-2 rounded-full w-full text-center" onclick="showTabContent('review')">Ulasan</li>
        </ul>
    </div>

    {{-- KONTEN TABS --}}
    <div id="tab-content" class="mt-8 mb-10">
        <div id="content-description" class="border p-5 rounded-2xl space-y-3">
            <p><strong>Terbuat dari Sel Silikon Monokristalin</strong><br>Bagian solar panel terbuat dari sel silikon monokristalin yang terkenal akan efisiensi tinggi serta tingkat konversi tinggi dan efisiensi keluaran yang tinggi. Membuat alat yang mengkonversi cahaya matahari menjadi tenaga listrik ini dapat bekerja secara optimal.</p>
            <p><strong>Menghasilkan Daya Mencapai 10 Watt</strong><br>Dilengkapi dengan port USB yang dapat menghasilkan daya sebesar 10 watt sehingga dapat digunakan untuk mengisi daya alat elektronik seperti smartphone, powerbank, dan lain-lain.</p>
        </div>

        <div id="content-specification" class="hidden border p-5 rounded-2xl">
            <p><strong>Material:</strong> Panel Surya: Silikon Monokristalin, Cover: Kain</p>
            <p><strong>Dimensi Terlipat:</strong> Sekitar 18 x 10.8 x 3 cm</p>
            <p><strong>Dimensi Terbuka:</strong> Sekitar 47 x 18 cm</p>
            <p><strong>Dimensi Panel:</strong> Sekitar 16 x 7.7 cm</p>
        </div>

        <div id="content-review" class="hidden">
            <p class="text-xl font-bold">2 Ulasan Customer</p>
            {{-- 
                LAYOUT ULASAN:
                - Default (mobile): Kolom vertikal (flex-col).
                - Layar medium (md): Baris horizontal (md:flex-row).
            --}}
            <div class="flex flex-col md:flex-row gap-5 mt-3">
                {{-- Ulasan 1 --}}
                <div class="border p-5 rounded-2xl w-full">
                    <div class="flex gap-3">
                        <i class="fa-solid fa-user bg-slate-200 p-4 rounded-full h-fit"></i>
                        <div>
                            <p class="font-bold">Agung Kurniawan</p>
                            <div class="flex items-center gap-2 text-xs flex-wrap">
                                <div class="text-yellow-400"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                <p>5.0</p>
                                <p class="bg-slate-300 p-1 rounded-full"></p>
                                <p>3 Hari Lalu</p>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 text-slate-700">Produk ini menawarkan kualitas yang sangat baik, meskipun masih tergolong baru di pasaran. Dengan daya tahan yang luar biasa, produk ini dirancang untuk bertahan dalam jangka waktu yang lama.</p>
                    <div class="flex items-center mt-3 gap-x-4 gap-y-2 text-sm text-slate-500 flex-wrap">
                        <div class="flex items-center gap-2"><i class="fa-solid fa-thumbs-up"></i><p>24 Likes</p></div>
                        <div class="flex items-center gap-2"><i class="fa-regular fa-comment"></i><p>3 Komentar</p></div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-share-nodes"></i><p>Bagikan</p></div>
                        <div class="flex items-center gap-2"><i class="fa-regular fa-flag"></i><p>Laporkan</p></div>
                    </div>
                </div>
                {{-- Ulasan 2 --}}
                <div class="border p-5 rounded-2xl w-full">
                    {{-- Konten ulasan kedua bisa ditambahkan di sini --}}
                    <p class="text-slate-400">Ulasan lainnya...</p>
                </div>
            </div>
        </div>
    </div>

    {{-- SCRIPT UNTUK FUNGSI HALAMAN (SUDAH DIRAPIKAN) --}}
    <script>
        // SCRIPT UNTUK TAB
        function showTabContent(tab) {
            // Sembunyikan semua konten
            document.getElementById('content-description').classList.add('hidden');
            document.getElementById('content-specification').classList.add('hidden');
            document.getElementById('content-review').classList.add('hidden');

            // Hapus class 'active-tab' dari semua tab
            document.getElementById('tab-description').classList.remove('active-tab');
            document.getElementById('tab-specification').classList.remove('active-tab');
            document.getElementById('tab-review').classList.remove('active-tab');

            // Tampilkan konten dan tambahkan class 'active-tab' ke tab yang dipilih
            document.getElementById('content-' + tab).classList.remove('hidden');
            document.getElementById('tab-' + tab).classList.add('active-tab');
        }
        
        // CSS untuk tab aktif
        const styleSheet = document.createElement("style");
        styleSheet.innerText = `.active-tab { background-color: white; font-weight: 600; }`;
        document.head.appendChild(styleSheet);
        
        
        // SCRIPT UNTUK KUANTITAS, SUBTOTAL, CHECKOUT, DAN KERANJANG
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi variabel dan elemen
            let quantity = 1;
            const pricePerItem = 220000;
            const maxQuantity = parseInt(document.getElementById('maxQuantity').textContent);
            
            const quantityElement = document.getElementById('quantity');
            const subtotalElement = document.getElementById('subtotal');
            const subButton = document.getElementById('subButton');
            const addButton = document.getElementById('addButton');
            const checkoutButton = document.getElementById('checkoutButton');
            const addToCartButton = document.getElementById('addToCartButton');

            // Fungsi untuk memperbarui subtotal
            function updateSubtotal() {
                const subtotal = pricePerItem * quantity;
                subtotalElement.textContent = `Rp. ${subtotal.toLocaleString('id-ID')},00`;
                quantityElement.textContent = quantity;
            }

            // Event listener untuk tombol kurang (-)
            subButton.addEventListener('click', function() {
                if (quantity > 1) {
                    quantity--;
                    updateSubtotal();
                }
            });

            // Event listener untuk tombol tambah (+)
            addButton.addEventListener('click', function() {
                if (quantity < maxQuantity) {
                    quantity++;
                    updateSubtotal();
                }
            });

            // Fungsi untuk membuat objek data produk
            function createProductData() {
                return {
                    name: 'ROMAN Solar Panel Portable 10W 4 Folding Charging Board',
                    price: pricePerItem,
                    quantity: quantity,
                    subtotal: pricePerItem * quantity,
                    image: 'img/produk-1.png'
                };
            }

            // Event listener untuk tombol "Checkout Produk"
            checkoutButton.addEventListener('click', function() {
                const productData = createProductData();
                localStorage.setItem('checkoutProduct', JSON.stringify(productData));
                window.location.href = `/pengiriman?quantity=${quantity}`;
            });

            // Event listener untuk tombol "Keranjang"
            addToCartButton.addEventListener('click', function() {
                const productData = createProductData();
                localStorage.setItem('cartProduct', JSON.stringify(productData));
                alert(`Produk ditambahkan ke keranjang! (Jumlah: ${quantity})`);
                window.location.href = '/cart-produk';
            });
        });
    </script>
@endsection