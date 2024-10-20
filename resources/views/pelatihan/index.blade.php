@extends('main')
@section('content')
    <!-- Container -->
    <div class="container mx-auto flex gap-5 px-2 justify-center">

        <!-- Sidebar Filters -->
        <div class="w-1/5 h-full p-4 rounded-lg shadow">
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-2">Tingkat Pelatihan</h3>
                <img src="{{ asset('img/pelatihan/vector (1).png') }}" class="h-2.5 w-auto -mt-2 mb-3">
                <ul>
                    <li>
                        <input type="radio" name="level" id="semua" checked
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]" />
                        <label for="semua">Semua</label>
                    </li>
                    <li>
                        <input type="radio" name="level" id="pemula"
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]" />
                        <label for="pemula">Pemula</label>
                    </li>
                    <li>
                        <input type="radio" name="level" id="menengah"
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]" />
                        <label for="menengah">Menengah</label>
                    </li>
                    <li>
                        <input type="radio" name="level" id="ahli"
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]" />
                        <label for="ahli">Ahli</label>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-medium mb-2">Kategori Pelatihan</h3>
                <img src="{{ asset('img/pelatihan/vector-line.png') }}" class="h-2.5 w-auto -mt-2 mb-3">
                <ul>
                    <li><input type="radio" name="category" id="all" checked
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]">
                        <label for="all">Semua</label>
                    </li>
                    <li><input type="radio" name="category" id="online"
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]">
                        <label for="online">Online</label>
                    </li>
                    <li><input type="radio" name="category" id="offline"
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]">
                        <label for="offline">Workshop Offline</label>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-4/5">
            <!-- Search & Sort Bar -->
            <div class="flex justify-between items-center mb-6">
                <div class="relative w-full">
                    <i class="fa-solid fa-magnifying-glass absolute top-4 left-3 text-slate-300"></i>
                    <input id="search-bar" type="text" placeholder="Cari pelatihan"
                        class="border p-3 px-10 w-full rounded-lg border-[#E1E1E1]">
                </div>
                <p class="px-3">URUTKAN:</p>
                <select class="border rounded-md p-2 w-28 h-auto border-[#E1E1E1]">
                    <option>Terbaru</option>
                    <option>Harga Terendah</option>
                    <option>Harga Tertinggi</option>
                </select>
                <i class="ph-magnifying-glass"></i>
            </div>

            <!-- List Pelatihan -->
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <!-- Pelatihan 1 -->
                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="pemula" data-category="online">
                    <img src="{{ asset('img/pelatihan/pelatihan3.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">
                    <div class="p-2">
                        <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Energi Terbarukan untuk Pemula</h3>
                        <p class="text-sm text-gray-400 mb-2">Kursus pengenalan energi terbarukan untuk pemula, yang
                            mencakup konsep...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir. Ahmad
                                Fajar, M.Eng</span></p>

                        <div class="flex items-center mb-3">
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/bar-level-pemula.png') }}" class="w-auto h-3.5">
                                <p class="text-sm font-semibold">Level: <span class="font-normal">Pemula</span></p>
                            </div>
                            <div class="px-2">
                                <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                            </div>
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                                <p class="text-sm font-semibold">Durasi: <span class="font-normal">1 Jam 26 M</span></p>
                            </div>
                        </div>

                        <p class="text-lg font-medium text-black">Rp. 1.100.000,00</p>

                        <div class="flex justify-between items-center mt-4">
                            <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                                <p class="text-sm text-black font-medium">Online</p>
                            </div>
                            <div class="flex items-center ml-auto space-x-2">
                                <a href="#" class="cursor-pointer shop-chart">
                                    <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                                </a>
                                <a href="{{ url('/pelatihan-online') }}">
                                    <button
                                        class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar
                                        Kelas</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pelatihan 2 -->
                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="pemula" data-category="offline">
                    <img src="{{ asset('img/pelatihan/pelatihan2.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">

                    <div class="p-2">
                        <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Desain Sistem Panel Surya Pemula</h3>
                        <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel surya,
                            cara instalasi...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir.
                                Ahmad Fajar, M.Eng</span></p>

                        <div class="flex items-center mb-3">
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/bar-level-pemula.png') }}" class="w-auto h-3.5">
                                <p class="text-sm font-semibold">Level: <span class="font-normal">Pemula</span></p>
                            </div>
                            <div class="px-2">
                                <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                            </div>
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                                <p class="text-sm font-semibold">Durasi: <span class="font-normal">1 Minggu</span></p>
                            </div>
                        </div>

                        <p class="text-lg font-medium text-black">Rp. 1.200.000,00</p>

                        <div class="flex justify-between items-center mt-4">
                            <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                                <p class="text-sm text-black font-medium">Offline</p>
                            </div>
                            <div class="flex items-center ml-auto space-x-2">
                                <a href="#" class="cursor-pointer">
                                    <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                                </a>
                                <a href="{{ url('/pelatihan-offline') }}">
                                    <button
                                        class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar
                                        Kelas</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pelatihan 3 -->
                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="menengah"
                    data-category="online">
                    <img src="{{ asset('img/pelatihan/pelatihan1.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">

                    <div class="p-2">
                        <h3 class="text-lg font-semibold text-black mb-2">Pembuatan Sistem Hybrid Energi Terbarukan</h3>
                        <p class="text-sm text-gray-400 mb-2">Pelatihan yang mengajarkan cara menggabungkan beberapa
                            sumber...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir.
                                Ahmad Fajar, M.Eng</span></p>

                        <div class="flex items-center mb-3">
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/bar-level-menengah.png') }}" class="w-auto h-3.5">
                                <p class="text-sm font-semibold">Level: <span class="font-normal">Menengah</span></p>
                            </div>
                            <div class="px-2">
                                <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                            </div>
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                                <p class="text-sm font-semibold">Durasi: <span class="font-normal">3 Jam</span></p>
                            </div>
                        </div>

                        <p class="text-lg font-medium text-black">Rp. 800.000,00</p>

                        <div class="flex justify-between items-center mt-4">
                            <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                                <p class="text-sm text-black font-medium">Online</p>
                            </div>
                            <div class="flex items-center ml-auto space-x-2">
                                <a href="#" class="cursor-pointer">
                                    <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                                </a>
                                <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar
                                    Kelas</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pelatihan 4 -->
                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="menengah"
                    data-category="offline">
                    <img src="{{ asset('img/pelatihan/pelatihan4.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">

                    <div class="p-2">
                        <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Sistem Penyimpanan Energi (Baterai dan
                            Teknologi...</h3>
                        <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel surya,
                            cara instalasi...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir.
                                Ahmad Fajar, M.Eng</span></p>

                        <div class="flex items-center mb-3">
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/bar-level-menengah.png') }}" class="w-auto h-3.5">
                                <p class="text-sm font-semibold">Level: <span class="font-normal">Menengah</span></p>
                            </div>
                            <div class="px-2">
                                <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                            </div>
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                                <p class="text-sm font-semibold">Durasi: <span class="font-normal">5 Hari</span></p>
                            </div>
                        </div>

                        <p class="text-lg font-medium text-black">Rp. 900.000,00</p>

                        <div class="flex justify-between items-center mt-4">
                            <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                                <p class="text-sm text-black font-medium">Offline</p>
                            </div>
                            <div class="flex items-center ml-auto space-x-2">
                                <a href="#" class="cursor-pointer">
                                    <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                                </a>
                                <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar
                                    Kelas</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pelatihan 5 -->
                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="menengah"
                    data-category="online">
                    <img src="{{ asset('img/pelatihan/pelatihan5.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">

                    <div class="p-2">
                        <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Konstruksi Bangunan Berenergi
                            Terbarukan</h3>
                        <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel surya,
                            cara instalasi...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir.
                                Ahmad Fajar, M.Eng</span></p>

                        <div class="flex items-center mb-3">
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/bar-level-menengah.png') }}" class="w-auto h-3.5">
                                <p class="text-sm font-semibold">Level: <span class="font-normal">Menengah</span></p>
                            </div>
                            <div class="px-2">
                                <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                            </div>
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                                <p class="text-sm font-semibold">Durasi: <span class="font-normal">2 Jam</span></p>
                            </div>
                        </div>

                        <p class="text-lg font-medium text-black">Rp. 700.000,00</p>

                        <div class="flex justify-between items-center mt-4">
                            <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                                <p class="text-sm text-black font-medium">Online</p>
                            </div>
                            <div class="flex items-center ml-auto space-x-2">
                                <a href="#" class="cursor-pointer">
                                    <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                                </a>
                                <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar
                                    Kelas</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pelatihan 6 -->
                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="pemula" data-category="online">
                    <img src="{{ asset('img/pelatihan/pelatihan6.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">

                    <div class="p-2">
                        <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Energi Terbarukan untuk Sektor
                            Pertanian</h3>
                        <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel surya,
                            cara instalasi...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir.
                                Ahmad Fajar, M.Eng</span></p>

                        <div class="flex items-center mb-3">
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/bar-level-pemula.png') }}" class="w-auto h-3.5">
                                <p class="text-sm font-semibold">Level: <span class="font-normal">Pemula</span></p>
                            </div>
                            <div class="px-2">
                                <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                            </div>
                            <div class="flex items-center gap-x-1">
                                <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                                <p class="text-sm font-semibold">Durasi: <span class="font-normal">3 Jam 30 M</span></p>
                            </div>
                        </div>

                        <p class="text-lg font-medium text-black">Rp. 850.000,00</p>

                        <div class="flex justify-between items-center mt-4">
                            <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                                <p class="text-sm text-black font-medium">Online</p>
                            </div>
                            <div class="flex items-center ml-auto space-x-2">
                                <a href="#" class="cursor-pointer">
                                    <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                                </a>
                                <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar
                                    Kelas</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script>
        // Fungsi untuk filter berdasarkan pencarian
        document.getElementById('search-bar').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase();
            const pelatihanCards = document.querySelectorAll('.pelatihan-card'); // Ubah selektor ke .pelatihan-card
    
            pelatihanCards.forEach(function(card) {
                const pelatihanTitle = card.querySelector('h3').innerText.toLowerCase(); // Cari di elemen judul
    
                // Periksa apakah judul pelatihan sesuai dengan input pencarian
                if (pelatihanTitle.includes(searchValue)) {
                    card.style.display = 'block'; // Tampilkan pelatihan jika cocok
                } else {
                    card.style.display = 'none'; // Sembunyikan pelatihan jika tidak cocok
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const levelRadios = document.querySelectorAll('input[name="level"]');
            const categoryRadios = document.querySelectorAll('input[name="category"]');
            const cards = document.querySelectorAll('.pelatihan-card');
            const cartButtons = document.querySelectorAll('.pelatihan-card .shop-chart');
            const sortSelect = document.querySelector('select');

            function filterCards() {
                const selectedLevel = Array.from(levelRadios).find(radio => radio.checked)?.id;
                const selectedCategory = Array.from(categoryRadios).find(radio => radio.checked)?.id;

                cards.forEach(card => {
                    const cardLevel = card.getAttribute('data-level');
                    const cardCategory = card.getAttribute('data-category');

                    const levelMatch = selectedLevel === 'semua' || cardLevel === selectedLevel;
                    const categoryMatch = selectedCategory === 'all' || cardCategory === selectedCategory;

                    if (levelMatch && categoryMatch) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            function addToCart(event) {
                event.preventDefault(); // Prevent default link behavior

                const card = event.target.closest('.pelatihan-card');
                const name = card.querySelector('h3').innerText;
                const price = card.querySelector('.text-lg.font-medium.text-black').innerText;
                const imageUrl = card.querySelector('img').src;
                // Simpan sebagai satu objek, bukan array
                const cartData = {
                    name: name,
                    price: price,
                    image: imageUrl
                };

                localStorage.setItem('cartPelatihan', JSON.stringify(cartData));

                alert('Pelatihan berhasil ditambahkan ke keranjang!');
                window.location.href = '/cart-pelatihan'; // Redirect to the cart page
            }

            function sortCards() {
                const sortOption = sortSelect.value;
                const sortedCards = Array.from(cards);

                sortedCards.sort((a, b) => {
                    const priceA = parseFloat(a.querySelector('.text-lg.font-medium.text-black').innerText
                        .replace(/[Rp.,]/g, ''));
                    const priceB = parseFloat(b.querySelector('.text-lg.font-medium.text-black').innerText
                        .replace(/[Rp.,]/g, ''));

                    if (sortOption === 'Harga Terendah') {
                        return priceA - priceB;
                    } else if (sortOption === 'Harga Tertinggi') {
                        return priceB - priceA;
                    }
                    return 0; // No sorting for "Terbaru" (default behavior)
                });

                const container = document.querySelector('.grid');
                container.innerHTML = ''; // Clear the container before re-appending sorted cards
                sortedCards.forEach(card => container.appendChild(card)); // Append sorted cards
            }

            cartButtons.forEach(button => {
                button.addEventListener('click', addToCart);
            });

            levelRadios.forEach(radio => {
                radio.addEventListener('change', filterCards);
            });
            categoryRadios.forEach(radio => {
                radio.addEventListener('change', filterCards);
            });

            sortSelect.addEventListener('change', sortCards); // Event listener for sorting
        });
    </script>
@endsection
