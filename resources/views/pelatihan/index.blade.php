@extends('main')
@section('content')
    <div class="container mx-auto flex flex-col lg:flex-row gap-5 px-4 lg:px-2 justify-center">

        <div class="w-full lg:w-1/5 h-full p-4 rounded-lg shadow mb-6 lg:mb-0">
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-2">Tingkat Pelatihan</h3>
                <img src="{{ asset('img/pelatihan/vector (1).png') }}" class="h-2.5 w-auto -mt-2 mb-3">
                <ul>
                    <li>
                        <input type="radio" name="level" id="semua" value="semua" checked
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]" />
                        <label for="semua">Semua</label>
                    </li>
                    <li>
                        <input type="radio" name="level" id="pemula" value="pemula"
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]" />
                        <label for="pemula">Pemula</label>
                    </li>
                    <li>
                        <input type="radio" name="level" id="menengah" value="menengah"
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]" />
                        <label for="menengah">Menengah</label>
                    </li>
                    <li>
                        <input type="radio" name="level" id="ahli" value="ahli"
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]" />
                        <label for="ahli">Ahli</label>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-medium mb-2">Kategori Pelatihan</h3>
                <img src="{{ asset('img/pelatihan/vector-line.png') }}" class="h-2.5 w-auto -mt-2 mb-3">
                <ul>
                    <li><input type="radio" name="category" id="all" value="all" checked
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]">
                        <label for="all">Semua</label>
                    </li>
                    <li><input type="radio" name="category" id="online" value="online"
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]">
                        <label for="online">Online</label>
                    </li>
                    <li><input type="radio" name="category" id="offline" value="offline"
                            class="mr-2 rounded-full appearance-none checked:bg-[#12B28C] checked:border-[#12B28C] focus:ring-[#12B28C]">
                        <label for="offline">Workshop Offline</label>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-4/5">
            <div class="flex flex-col md:flex-row justify-between items-stretch md:items-center gap-4 mb-6">
                <div class="relative w-full">
                    <i class="fa-solid fa-magnifying-glass absolute top-4 left-3 text-slate-300"></i>
                    <input id="search-bar" type="text" placeholder="Cari pelatihan"
                        class="border p-3 px-10 w-full rounded-lg border-[#E1E1E1]">
                </div>
                <div class="flex items-center gap-2">
                    <p class="px-3 whitespace-nowrap hidden sm:block">URUTKAN:</p>
                    <select class="border rounded-md p-3 w-full md:w-auto h-auto border-[#E1E1E1]">
                        <option>Terbaru</option>
                        <option>Harga Terendah</option>
                        <option>Harga Tertinggi</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="pemula" data-category="online"
                    data-price="1100000">
                    <img src="{{ asset('img/pelatihan/pelatihan3.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Energi Terbarukan untuk Pemula</h3>
                        <p class="text-sm text-gray-400 mb-2">Kursus pengenalan energi terbarukan untuk pemula, yang
                            mencakup konsep...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir.
                                Ahmad Fajar, M.Eng</span></p>

                        <div class="flex items-center mb-3 mt-3">
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

                        <p class="text-lg font-medium text-black price">Rp. 1.100.000,00</p>

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

                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="pemula"
                    data-category="offline" data-price="1200000">
                    <img src="{{ asset('img/pelatihan/pelatihan2.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Desain Sistem Panel Surya Pemula</h3>
                        <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel
                            surya, cara instalasi...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir.
                                Ahmad Fajar, M.Eng</span></p>

                        <div class="flex items-center mb-3 mt-3">
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

                        <p class="text-lg font-medium text-black price">Rp. 1.200.000,00</p>

                        <div class="flex justify-between items-center mt-4">
                            <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                                <p class="text-sm text-black font-medium">Offline</p>
                            </div>
                            <div class="flex items-center ml-auto space-x-2">
                                <a href="#" class="cursor-pointer shop-chart">
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

                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="menengah"
                    data-category="online" data-price="800000">
                    <img src="{{ asset('img/pelatihan/pelatihan1.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-black mb-2">Pembuatan Sistem Hybrid Energi Terbarukan</h3>
                        <p class="text-sm text-gray-400 mb-2">Pelatihan yang mengajarkan cara menggabungkan beberapa
                            sumber...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir.
                                Ahmad Fajar, M.Eng</span></p>
                        <div class="flex items-center mb-3 mt-3">
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
                        <p class="text-lg font-medium text-black price">Rp. 800.000,00</p>
                        <div class="flex justify-between items-center mt-4">
                            <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                                <p class="text-sm text-black font-medium">Online</p>
                            </div>
                            <div class="flex items-center ml-auto space-x-2">
                                <a href="#" class="cursor-pointer shop-chart">
                                    <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                                </a>
                                <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar
                                    Kelas</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="menengah"
                    data-category="offline" data-price="900000">
                    <img src="{{ asset('img/pelatihan/pelatihan4.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Sistem Penyimpanan Energi (Baterai
                            dan Teknologi...</h3>
                        <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel
                            surya, cara instalasi...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir.
                                Ahmad Fajar, M.Eng</span></p>
                        <div class="flex items-center mb-3 mt-3">
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
                        <p class="text-lg font-medium text-black price">Rp. 900.000,00</p>
                        <div class="flex justify-between items-center mt-4">
                            <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                                <p class="text-sm text-black font-medium">Offline</p>
                            </div>
                            <div class="flex items-center ml-auto space-x-2">
                                <a href="#" class="cursor-pointer shop-chart">
                                    <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                                </a>
                                <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar
                                    Kelas</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="menengah"
                    data-category="online" data-price="700000">
                    <img src="{{ asset('img/pelatihan/pelatihan5.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Konstruksi Bangunan Berenergi
                            Terbarukan</h3>
                        <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel
                            surya, cara instalasi...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir.
                                Ahmad Fajar, M.Eng</span></p>
                        <div class="flex items-center mb-3 mt-3">
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
                        <p class="text-lg font-medium text-black price">Rp. 700.000,00</p>
                        <div class="flex justify-between items-center mt-4">
                            <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                                <p class="text-sm text-black font-medium">Online</p>
                            </div>
                            <div class="flex items-center ml-auto space-x-2">
                                <a href="#" class="cursor-pointer shop-chart">
                                    <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                                </a>
                                <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar
                                    Kelas</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="pemula"
                    data-category="online" data-price="850000">
                    <img src="{{ asset('img/pelatihan/pelatihan6.png') }}" alt="Pelatihan Image"
                        class="w-full h-40 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Energi Terbarukan untuk Sektor
                            Pertanian</h3>
                        <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel
                            surya, cara instalasi...</p>
                        <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir.
                                Ahmad Fajar, M.Eng</span></p>
                        <div class="flex items-center mb-3 mt-3">
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
                        <p class="text-lg font-medium text-black price">Rp. 850.000,00</p>
                        <div class="flex justify-between items-center mt-4">
                            <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                                <p class="text-sm text-black font-medium">Online</p>
                            </div>
                            <div class="flex items-center ml-auto space-x-2">
                                <a href="#" class="cursor-pointer shop-chart">
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
            const pelatihanCards = document.querySelectorAll('.pelatihan-card');

            pelatihanCards.forEach(function(card) {
                const pelatihanTitle = card.querySelector('h3').innerText.toLowerCase();

                if (pelatihanTitle.includes(searchValue)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
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
            const gridContainer = document.querySelector('.grid');

            function filterAndSortCards() {
                const selectedLevel = document.querySelector('input[name="level"]:checked').value;
                const selectedCategory = document.querySelector('input[name="category"]:checked').value;
                const sortOption = sortSelect.value;
                
                let visibleCards = Array.from(cards);

                // 1. Filter
                visibleCards.forEach(card => {
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

                // Get only the currently visible cards for sorting
                let cardsToSort = Array.from(gridContainer.children).filter(card => card.style.display !== 'none');

                // 2. Sort
                cardsToSort.sort((a, b) => {
                    if (sortOption === 'Terbaru') {
                        return 0; // Maintain original order if sorting by 'Terbaru'
                    }
                    const priceA = parseFloat(a.dataset.price);
                    const priceB = parseFloat(b.dataset.price);

                    if (sortOption === 'Harga Terendah') {
                        return priceA - priceB;
                    } else if (sortOption === 'Harga Tertinggi') {
                        return priceB - priceA;
                    }
                    return 0;
                });

                // 3. Re-append to the grid
                cardsToSort.forEach(card => gridContainer.appendChild(card));
            }

            function addToCart(event) {
                event.preventDefault();

                const card = event.target.closest('.pelatihan-card');
                const name = card.querySelector('h3').innerText;
                const price = card.querySelector('.price').innerText;
                const imageUrl = card.querySelector('img').src;

                const cartData = {
                    name: name,
                    price: price,
                    image: imageUrl
                };

                localStorage.setItem('cartPelatihan', JSON.stringify(cartData));
                alert('Pelatihan berhasil ditambahkan ke keranjang!');
                window.location.href = '/cart-pelatihan';
            }

            cartButtons.forEach(button => button.addEventListener('click', addToCart));
            levelRadios.forEach(radio => radio.addEventListener('change', filterAndSortCards));
            categoryRadios.forEach(radio => radio.addEventListener('change', filterAndSortCards));
            sortSelect.addEventListener('change', filterAndSortCards);
            
            // Initial filter and sort on page load
            filterAndSortCards();
        });
    </script>
@endsection