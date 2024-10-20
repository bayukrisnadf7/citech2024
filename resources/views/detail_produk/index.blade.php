@extends('main')
@section('content')
    <div class="flex gap-14 mt-5">
        <div class="flex flex-col gap-2">
            <img src="img/produk-1.png" alt="" class="w-24 rounded-xl">
            <img src="img/produk-1.png" alt="" class="w-24 rounded-xl">
            <img src="img/produk-1.png" alt="" class="w-24 rounded-xl">
            <img src="img/produk-1.png" alt="" class="w-24 rounded-xl">
        </div>
        <div>
            <img src="img/produk-1.png" alt="" width="620">
        </div>
        <div>
            <p class="text-3xl">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
            <div class="flex mt-5 gap-3">
                <div class="flex items-center">
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <p class="ml-2 text-slate-400">5.0</p>
                </div>
                <div class="flex items-center gap-2 text-slate-400">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p>1282 Terjual</p>
                </div>
            </div>
            <div class="flex items-center mt-5 gap-3">
                <div class="flex items-center gap-2">
                    <div class="flex gap-3 text-slate-400 items-center">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <p class="text-xl">Stok:</p>
                    </div>
                    <p class="font-bold">4350</p>
                </div>
                <div>
                    <p class="bg-tertiary p-1 w-36 text-center font-bold rounded-full">Produk Jadi</p>
                </div>
            </div>
            <div class="mt-5 bg-slate-200 max-w-max p-5 rounded-3xl">
                <p class="text-2xl">Checkout | Jumlah Pembelian</p>
                <div class="flex gap-5 items-center mt-5">
                    <div class="flex items-center gap-3 bg-white p-1 rounded-xl">
                        <button id="subButton" class="bg-primary p-1 rounded-xl w-12 text-center text-white">Sub</button>
                        <p id="quantity" class="w-6 text-center">1</p>
                        <button id="addButton" class="bg-primary p-1 rounded-xl w-12 text-center text-white">Add</button>
                    </div>
                    <div class="flex gap-2">
                        <p class="text-slate-400">Max Jumlah:</p>
                        <p id="maxQuantity" class="font-bold">10</p>
                    </div>
                </div>
                <div class="flex gap-14 mt-5 items-center">
                    <p class="text-slate-400">Subtotal Barang:</p>
                    <p id="subtotal" class="font-bold text-2xl">Rp. 220.000,00</p>
                </div>
                <div class="flex gap-5 mt-5 w-full">
                    <button id="checkoutButton" class="p-2 bg-secondary rounded-lg text-white text-center w-full">Checkout
                        Produk</button>
                    <button
                        class="p-2 bg-primary rounded-lg text-white text-center w-full flex items-center justify-center space-x-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Keranjang</span>
                    </button>
                </div>
                <p class="mt-5">
                    <i class="fa-brands fa-whatsapp fa-lg"></i>
                    <span class="underline">Chat Admin</span>
                </p>
            </div>
        </div>
    </div>
    <div class="max-w-max mt-10">
        <ul class="flex cursor-pointer bg-slate-100 p-2 rounded-full items-center">
            <li id="tab-description" class="hover:bg-white p-2 rounded-full w-28 text-center active-tab"
                onclick="showTabContent('description')">
                Deskripsi
            </li>
            <li id="tab-specification" class="hover:bg-white p-2 rounded-full w-28 text-center"
                onclick="showTabContent('specification')">
                Spesifikasi
            </li>
            <li id="tab-review" class="hover:bg-white p-2 rounded-full w-28 text-center" onclick="showTabContent('review')">
                Ulasan
            </li>
        </ul>
    </div>
    <!-- Tab Content Section -->
    <div id="tab-content" class="mt-10">
        <!-- Deskripsi -->
        <div id="content-description">
            <div class="w-full gap-10 mt-10 mb-10">
                <div class="border p-5 rounded-3xl">
                    <div class="mt-3">
                        <p>Terbuat dari Sel Silikon Monokristalin
                            Bagian solar panel terbuat dari sel silikon monokristalin yang terkenal akan efisiensi tinggi
                            serta tingkat konversi tinggi dan efisiensi keluaran yang tinggi. Membuat alat yang mengkonversi
                            cahaya matahari menjadi tenaga listrik ini dapat bekerja secara optimal.</p>
                    </div>
                    <div class="mt-3">
                        <p>Fitur
                            Menghasilkan Daya Mencapai 10 Watt
                            ​Dilengkapi dengan port USB yang dapat menghasilkan daya sebesar 10 watt sehingga dapat
                            digunakan untuk mengisi daya alat elektronik seperti smartphone, powerbank, dan lain-lain.</p>
                    </div>
                    <div class="mt-3">
                        <p>Terbuat dari Sel Silikon Monokristalin
                            Bagian solar panel terbuat dari sel silikon monokristalin yang terkenal akan efisiensi tinggi
                            serta tingkat konversi tinggi dan efisiensi keluaran yang tinggi. Membuat alat yang mengkonversi
                            cahaya matahari menjadi tenaga listrik ini dapat bekerja secara optimal.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Spesifikasi -->
        <div id="content-specification" class="hidden">
            <div class="w-full gap-10 mt-10 mb-10">
                <div class="border p-5 rounded-3xl">
                    <div class="flex flex-col mt-3">
                        <p>Material</p>
                        <p> Panel Surya: Silikon Monokristalin</p>
                        <p>Cover: Kain</p>
                        <p> Dimensi</p>
                        <p>Terlipat: Sekitar 18 x 10.8 x 3 cm</p>
                        <p>Terbuka: Sekitar 47 x 18 cm</p>
                        <p>Dimensi Panel: Sekitar 16 x 7.7 cm</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ulasan -->
        <div id="content-review" class="hidden">
            <p class="mt-10 text-xl font-bold">2 Ulasan Customer</p>
            <div class="flex gap-10 mt-3 mb-10">
                <div class="border p-5 rounded-3xl max-w-2xl">
                    <div class="flex gap-3">
                        <i class="fa-solid fa-user bg-slate-400 p-4 rounded-full"></i>
                        <div>
                            <p class="font-bold">Agung Kurniawan</p>
                            <div class="flex items-center gap-2 text-xs">
                                <div>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                </div>
                                <p>5.0</p>
                                <p class="bg-slate-400 p-1 rounded-full"></p>
                                <p>3 Hari Lalu</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>Produk ini menawarkan kualitas yang sangat baik, meskipun masih tergolong baru di pasaran. Dengan
                            daya
                            tahan yang luar biasa, produk ini dirancang untuk bertahan dalam jangka waktu yang lama,
                            sehingga
                            memberikan nilai lebih bagi para penggunanya. Keunggulannya tidak hanya terletak pada
                            performanya,
                            tetapi juga pada efisiensi yang dihadirkannya.</p>
                    </div>
                    <div class="flex items-center mt-3">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-thumbs-up"></i>
                            <p>24 Likes</p>
                        </div>
                        <div class="flex items-center gap-2 ml-3">
                            <i class="fa-regular fa-comment"></i>
                            <p>3 Komentar</p>
                        </div>
                        <div class="flex items-center gap-2 ml-3">
                            <i class="fa-solid fa-share-nodes"></i>
                            <p>Bagikan</p>
                        </div>
                        <div class="flex items-center gap-2 ml-3">
                            <i class="fa-regular fa-flag"></i>
                            <p>Laporkan</p>
                        </div>
                    </div>
                </div>
                <div class="border p-5 rounded-3xl max-w-2xl">
                    <div class="flex gap-3">
                        <i class="fa-solid fa-user bg-slate-400 p-4 rounded-full"></i>
                        <div>
                            <p class="font-bold">Agung Kurniawan</p>
                            <div class="flex items-center gap-2 text-xs">
                                <div>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                </div>
                                <p>5.0</p>
                                <p class="bg-slate-400 p-1 rounded-full"></p>
                                <p>3 Hari Lalu</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>Produk ini menawarkan kualitas yang sangat baik, meskipun masih tergolong baru di pasaran. Dengan
                            daya
                            tahan yang luar biasa, produk ini dirancang untuk bertahan dalam jangka waktu yang lama,
                            sehingga
                            memberikan nilai lebih bagi para penggunanya. Keunggulannya tidak hanya terletak pada
                            performanya,
                            tetapi juga pada efisiensi yang dihadirkannya.</p>
                    </div>
                    <div class="flex items-center mt-3">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-thumbs-up"></i>
                            <p>24 Likes</p>
                        </div>
                        <div class="flex items-center gap-2 ml-3">
                            <i class="fa-regular fa-comment"></i>
                            <p>3 Komentar</p>
                        </div>
                        <div class="flex items-center gap-2 ml-3">
                            <i class="fa-solid fa-share-nodes"></i>
                            <p>Bagikan</p>
                        </div>
                        <div class="flex items-center gap-2 ml-3">
                            <i class="fa-regular fa-flag"></i>
                            <p>Laporkan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Fungsi checkout dan simpan ke localStorage
        document.getElementById('checkoutButton').addEventListener('click', function() {
            const productData = {
                name: 'ROMAN Solar Panel Portable 10W 4 Folding Charging Board',
                price: pricePerItem,
                quantity: quantity,
                subtotal: pricePerItem * quantity,
                image: 'img/produk-1.png'
            };

            // Simpan data ke localStorage
            localStorage.setItem('checkoutProduct', JSON.stringify(productData));

            // Arahkan ke halaman pengiriman sesuai jumlah yang dibeli
            window.location.href = `/pengiriman?quantity=${quantity}`;
        });

        // Event listener untuk tombol keranjang
        document.querySelector('.p-2.bg-primary.flex.items-center.justify-center').addEventListener('click', function() {
            // Arahkan ke halaman keranjang
            window.location.href = '/keranjang';
        });
    </script>
    <script>
        function showTabContent(tab) {
            // Hapus semua konten yang sedang aktif
            document.getElementById('content-description').classList.add('hidden');
            document.getElementById('content-specification').classList.add('hidden');
            document.getElementById('content-review').classList.add('hidden');

            // Tampilkan konten berdasarkan tab yang diklik
            if (tab === 'description') {
                document.getElementById('content-description').classList.remove('hidden');
            } else if (tab === 'specification') {
                document.getElementById('content-specification').classList.remove('hidden');
            } else if (tab === 'review') {
                document.getElementById('content-review').classList.remove('hidden');
            }

            // Ganti class active pada tab yang diklik
            document.getElementById('tab-description').classList.remove('active-tab');
            document.getElementById('tab-specification').classList.remove('active-tab');
            document.getElementById('tab-review').classList.remove('active-tab');

            document.getElementById('tab-' + tab).classList.add('active-tab');
        }

        // Class untuk tab yang aktif
        const activeTabStyle = `
            .active-tab {
                background-color: white;
            }
        `;

        // Menambahkan style aktif ke halaman
        const styleSheet = document.createElement("style");
        styleSheet.type = "text/css";
        styleSheet.innerText = activeTabStyle;
        document.head.appendChild(styleSheet);
    </script>
    <script>
        // Inisialisasi
        let quantity = 1;
        const maxQuantity = parseInt(document.getElementById('maxQuantity').textContent);
        const pricePerItem = 220000; // Harga satu barang
        const subtotalElement = document.getElementById('subtotal');
        const quantityElement = document.getElementById('quantity');

        // Fungsi untuk memperbarui subtotal
        function updateSubtotal() {
            const subtotal = pricePerItem * quantity;
            subtotalElement.textContent = `Rp. ${subtotal.toLocaleString('id-ID')},00`;
        }

        // Event listener untuk tombol sub
        document.getElementById('subButton').addEventListener('click', function() {
            if (quantity > 1) {
                quantity--;
                quantityElement.textContent = quantity;
                updateSubtotal();
            }
        });

        // Event listener untuk tombol add
        document.getElementById('addButton').addEventListener('click', function() {
            if (quantity < maxQuantity) {
                quantity++;
                quantityElement.textContent = quantity;
                updateSubtotal();
            }
        });

        // Fungsi checkout dan simpan ke localStorage
        document.getElementById('checkoutButton').addEventListener('click', function() {
            const productData = {
                name: 'ROMAN Solar Panel Portable 10W 4 Folding Charging Board',
                price: pricePerItem,
                quantity: quantity,
                subtotal: pricePerItem * quantity,
                image: 'img/produk-1.png'
            };

            // Simpan data ke localStorage
            localStorage.setItem('checkoutProduct', JSON.stringify(productData));

            // Arahkan ke halaman pengiriman sesuai jumlah yang dibeli
            window.location.href = `/pengiriman?quantity=${quantity}`;
        });

        // Event listener untuk tombol keranjang
        document.querySelector('.p-2.bg-primary.flex.items-center.justify-center').addEventListener('click', function() {
            const productData = {
                name: 'ROMAN Solar Panel Portable 10W 4 Folding Charging Board',
                price: pricePerItem,
                quantity: quantity,
                subtotal: pricePerItem * quantity,
                image: 'img/produk-1.png'
            };

            // Simpan data ke localStorage
            localStorage.setItem('cartProduct', JSON.stringify(productData));

            // Arahkan ke halaman keranjang
            window.location.href = '/cart-produk';
        });
    </script>
@endsection
