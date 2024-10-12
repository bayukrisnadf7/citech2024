@extends('main')
@section('content')
{{-- <div class="container mx-auto p-4">
    <div class="flex flex-col md:flex-row gap-4">
        <div class="w-full md:w-1/4 bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-bold mb-4">Tingkat Pelatihan</h2>
            <div class="flex flex-col gap-2">
                <div class="flex items-center">
                    <input type="radio" id="semua" name="tingkat" value="semua" checked>
                    <label for="semua" class="ml-2">Semua</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="pemula" name="tingkat" value="pemula">
                    <label for="pemula" class="ml-2">Pemula</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="menengah" name="tingkat" value="menengah">
                    <label for="menengah" class="ml-2">Menengah</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="ahli" name="tingkat" value="ahli">
                    <label for="ahli" class="ml-2">Ahli</label>
                </div>
            </div>
            <h2 class="text-xl font-bold mt-4 mb-4">Kategori Pelatihan</h2>
            <div class="flex flex-col gap-2">
                <div class="flex items-center">
                    < input type="checkbox" id="it" name="kategori" value="it">
                    <label for="it" class="ml-2">IT</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="non-it" name="kategori" value="non-it">
                    <label for="non-it" class="ml-2">Non-IT</label>
                </div>
            </div>
        </div>
        <div class="w-full md:w-3/4 bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-bold mb-4">Daftar Pelatihan</h2>
            <div class="flex flex-col gap-2">
                <div class="flex items-center">
                    <input type="checkbox" id="pelatihan-1" name="pelatihan" value="pelatihan-1">
                    <label for="pelatihan-1" class="ml-2">Pelatihan 1</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="pelatihan-2" name="pelatihan" value="pelatihan-2">
                    <label for="pelatihan-2" class="ml-2">Pelatihan 2</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="pelatihan-3" name="pelatihan" value="pelatihan-3">
                    <label for="pelatihan-3" class="ml-2">Pelatihan 3</label>
                </div>
            </div>
        </div>
    </div>
</div>   --}}

<!-- Container -->
<div class="container mx-auto flex gap-5 px-2 justify-center">
        
    <!-- Sidebar Filters -->
    <div class="w-1/5 h-full p-4 rounded-lg shadow">
        <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2">Tingkat Pelatihan</h3>
            <ul>
                <li><input type="radio" name="level" id="semua" checked class="mr-2"><label for="semua">Semua</label></li>
                <li><input type="radio" name="level" id="pemula" class="mr-2"><label for="pemula">Pemula</label></li>
                <li><input type="radio" name="level" id="menengah" class="mr-2"><label for="menengah">Menengah</label></li>
                <li><input type="radio" name="level" id="ahli" class="mr-2"><label for="ahli">Ahli</label></li>
            </ul>
        </div>

        <div>
            <h3 class="text-lg font-semibold mb-2">Kategori Pelatihan</h3>
            <ul>
                <li><input type="radio" name="category" id="all" checked class="mr-2"><label for="all">Semua</label></li>
                <li><input type="radio" name="category" id="online" class="mr-2"><label for="online">Online</label></li>
                <li><input type="radio" name="category" id="offline" class="mr-2"><label for="offline">Workshop Offline</label></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="w-4/5">
        <!-- Search & Sort Bar -->
        <div class="flex justify-between items-center mb-6">
            <div class="relative w-2/3">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="ph-magnifying-glass text-gray-500 text-xl"></i>
                </span>
                <input type="text" placeholder="Cari Pelatihan" class="w-full p-2 pl-10 border rounded-md">
            </div>
            <select class="border rounded-md p-2">
                <option>Terbaru</option>
                <option>Harga Terendah</option>
                <option>Harga Tertinggi</option>
            </select>
            <i class="ph-magnifying-glass"></i>

        </div>

        <!-- Training Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <!-- Pelatihan 1 -->
            <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="pemula" data-category="online">
                {{-- Gambar Pelatihan --}}
                <img src="{{ asset('img/pelatihan/pelatihan3.png') }}" alt="Pelatihan Image" class="w-full h-40 object-cover rounded-t-lg">
                
                <a href="{{ url('/produk') }}">
                <div class="p-2">
                    {{-- Judul Pelatihan --}}
                    <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Energi Terbarukan untuk Pemula</h3>
                    {{-- Deskripsi Pelatihan --}}
                    <p class="text-sm text-gray-400 mb-2">Kursus pengenalan energi terbarukan untuk pemula, yang mencakup konsep...</p>
                    {{-- Mentor Pelatihan --}}
                    <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir. Ahmad Fajar, M.Eng</span></p>
                    
                    <div class="flex items-center mb-3">
                        {{-- Level --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/bar-level-pemula.png') }}" class="w-auto h-3.5">
                            <p class="text-sm font-semibold">Level: <span class="font-normal">Pemula</span></p>
                        </div>
                        {{-- Divide  Bar--}}
                        <div class="px-2">
                            <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                        </div>  
                        {{-- Durasi --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                            <p class="text-sm font-semibold">Durasi: <span class="font-normal">3 Jam</span></p>
                        </div>
                    </div>
                    
                    {{-- Harga Kelas --}}
                    <p class="text-lg font-medium text-black">Rp. 1.100.000,00</p>

                    <div class="flex justify-between items-center mt-4">
                        {{-- Kategori Pelatihan --}}
                        <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                            <p class="text-sm text-black font-medium">Online</p>
                        </div>
                        {{-- Icon Shop Chart dan Button Daftar--}}
                        <div class="flex items-center ml-auto space-x-2"> 
                            <a href="#" class="cursor-pointer">
                                <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                            </a>
                            <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar Kelas</button>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- Pelatihan 2 -->
            <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="menengah" data-category="online">
                {{-- Gambar Pelatihan --}}
                <img src="{{ asset('img/pelatihan/pelatihan1.png') }}" alt="Pelatihan Image" class="w-full h-40 object-cover rounded-t-lg">
                
                <div class="p-2">
                    {{-- Judul Pelatihan --}}
                    <h3 class="text-lg font-semibold text-black mb-2">Pembuatan Sistem Hybrid Energi Terbarukan</h3>
                    {{-- Deskripsi Pelatihan --}}
                    <p class="text-sm text-gray-400 mb-2">Pelatihan yang mengajarkan cara menggabungkan beberapa sumber...</p>
                    {{-- Mentor Pelatihan --}}
                    <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir. Ahmad Fajar, M.Eng</span></p>
                    
                    <div class="flex items-center mb-3">
                        {{-- Level --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/bar-level-menengah.png') }}" class="w-auto h-3.5">
                            <p class="text-sm font-semibold">Level: <span class="font-normal">Menengah</span></p>
                        </div>
                        {{-- Divide  Bar--}}
                        <div class="px-2">
                            <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                        </div>  
                        {{-- Durasi --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                            <p class="text-sm font-semibold">Durasi: <span class="font-normal">7 Jam</span></p>
                        </div>
                    </div>
                    
                    {{-- Harga Kelas --}}
                    <p class="text-lg font-medium text-black">Rp. 1.100.000,00</p>

                    <div class="flex justify-between items-center mt-4">
                        {{-- Kategori Pelatihan --}}
                        <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                            <p class="text-sm text-black font-medium">Online</p>
                        </div>
                        {{-- Icon Shop Chart dan Button Daftar--}}
                        <div class="flex items-center ml-auto space-x-2"> 
                            <a href="#" class="cursor-pointer">
                                <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                            </a>
                            <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar Kelas</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pelatihan 3 -->
            <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="pemula" data-category="offline">
                {{-- Gambar Pelatihan --}}
                <img src="{{ asset('img/pelatihan/pelatihan2.png') }}" alt="Pelatihan Image" class="w-full h-40 object-cover rounded-t-lg">
                
                <div class="p-2">
                    {{-- Judul Pelatihan --}}
                    <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Desain Sistem Panel Surya</h3>
                    {{-- Deskripsi Pelatihan --}}
                    <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel surya, cara instalasi...</p>
                    {{-- Mentor Pelatihan --}}
                    <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir. Ahmad Fajar, M.Eng</span></p>
                    
                    <div class="flex items-center mb-3">
                        {{-- Level --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/bar-level-pemula.png') }}" class="w-auto h-3.5">
                            <p class="text-sm font-semibold">Level: <span class="font-normal">Pemula</span></p>
                        </div>
                        {{-- Divide  Bar--}}
                        <div class="px-2">
                            <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                        </div>  
                        {{-- Durasi --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                            <p class="text-sm font-semibold">Durasi: <span class="font-normal">3 Hari</span></p>
                        </div>
                    </div>
                    
                    {{-- Harga Kelas --}}
                    <p class="text-lg font-medium text-black">Rp. 1.100.000,00</p>

                    <div class="flex justify-between items-center mt-4">
                        {{-- Kategori Pelatihan --}}
                        <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                            <p class="text-sm text-black font-medium">Offline</p>
                        </div>
                        {{-- Icon Shop Chart dan Button Daftar--}}
                        <div class="flex items-center ml-auto space-x-2"> 
                            <a href="#" class="cursor-pointer">
                                <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                            </a>
                            <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar Kelas</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pelatihan 4 -->
            <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="menengah" data-category="offline">
                {{-- Gambar Pelatihan --}}
                <img src="{{ asset('img/pelatihan/pelatihan4.png') }}" alt="Pelatihan Image" class="w-full h-40 object-cover rounded-t-lg">
                
                <div class="p-2">
                    {{-- Judul Pelatihan --}}
                    <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Sistem Penyimpanan Energi (Baterai dan Teknologi...</h3>
                    {{-- Deskripsi Pelatihan --}}
                    <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel surya, cara instalasi...</p>
                    {{-- Mentor Pelatihan --}}
                    <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir. Ahmad Fajar, M.Eng</span></p>
                    
                    <div class="flex items-center mb-3">
                        {{-- Level --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/bar-level-menengah.png') }}" class="w-auto h-3.5">
                            <p class="text-sm font-semibold">Level: <span class="font-normal">Menengah</span></p>
                        </div>
                        {{-- Divide  Bar--}}
                        <div class="px-2">
                            <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                        </div>  
                        {{-- Durasi --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                            <p class="text-sm font-semibold">Durasi: <span class="font-normal">6 Bulan</span></p>
                        </div>
                    </div>
                    
                    {{-- Harga Kelas --}}
                    <p class="text-lg font-medium text-black">Rp. 1.100.000,00</p>

                    <div class="flex justify-between items-center mt-4">
                        {{-- Kategori Pelatihan --}}
                        <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                            <p class="text-sm text-black font-medium">Offline</p>
                        </div>
                        {{-- Icon Shop Chart dan Button Daftar--}}
                        <div class="flex items-center ml-auto space-x-2"> 
                            <a href="#" class="cursor-pointer">
                                <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                            </a>
                            <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar Kelas</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pelatihan 5 -->
            <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="menengah" data-category="online">
                {{-- Gambar Pelatihan --}}
                <img src="{{ asset('img/pelatihan/pelatihan5.png') }}" alt="Pelatihan Image" class="w-full h-40 object-cover rounded-t-lg">
                
                <div class="p-2">
                    {{-- Judul Pelatihan --}}
                    <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Konstruksi Bangunan Berenergi Terbarukan</h3>
                    {{-- Deskripsi Pelatihan --}}
                    <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel surya, cara instalasi...</p>
                    {{-- Mentor Pelatihan --}}
                    <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir. Ahmad Fajar, M.Eng</span></p>
                    
                    <div class="flex items-center mb-3">
                        {{-- Level --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/bar-level-menengah.png') }}" class="w-auto h-3.5">
                            <p class="text-sm font-semibold">Level: <span class="font-normal">Menengah</span></p>
                        </div>
                        {{-- Divide  Bar--}}
                        <div class="px-2">
                            <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                        </div>  
                        {{-- Durasi --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                            <p class="text-sm font-semibold">Durasi: <span class="font-normal">6 Bulan</span></p>
                        </div>
                    </div>
                    
                    {{-- Harga Kelas --}}
                    <p class="text-lg font-medium text-black">Rp. 1.100.000,00</p>

                    <div class="flex justify-between items-center mt-4">
                        {{-- Kategori Pelatihan --}}
                        <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                            <p class="text-sm text-black font-medium">Online</p>
                        </div>
                        {{-- Icon Shop Chart dan Button Daftar--}}
                        <div class="flex items-center ml-auto space-x-2"> 
                            <a href="#" class="cursor-pointer">
                                <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                            </a>
                            <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar Kelas</button>
                        </div>
                    </div>
                </div>
            </div>
             
            <!-- Pelatihan 6 -->
            <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="pemula" data-category="online">
                {{-- Gambar Pelatihan --}}
                <img src="{{ asset('img/pelatihan/pelatihan6.png') }}" alt="Pelatihan Image" class="w-full h-40 object-cover rounded-t-lg">
                
                <div class="p-2">
                    {{-- Judul Pelatihan --}}
                    <h3 class="text-lg font-semibold text-black mb-2">Pelatihan Energi Terbarukan untuk Sektor Pertanian</h3>
                    {{-- Deskripsi Pelatihan --}}
                    <p class="text-sm text-gray-400 mb-2">Kelas ini memberikan dasar-dasar teknis tentang panel surya, cara instalasi...</p>
                    {{-- Mentor Pelatihan --}}
                    <p class="text-sm text-gray-400">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir. Ahmad Fajar, M.Eng</span></p>
                    
                    <div class="flex items-center mb-3">
                        {{-- Level --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/bar-level-pemula.png') }}" class="w-auto h-3.5">
                            <p class="text-sm font-semibold">Level: <span class="font-normal">Pemula</span></p>
                        </div>
                        {{-- Divide  Bar--}}
                        <div class="px-2">
                            <img src="{{ asset('img/pelatihan/divide-bar.png') }}" class="w-auto h-3.5">
                        </div>  
                        {{-- Durasi --}}
                        <div class="flex items-center gap-x-1">
                            <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                            <p class="text-sm font-semibold">Durasi: <span class="font-normal">6 Bulan</span></p>
                        </div>
                    </div>
                    
                    {{-- Harga Kelas --}}
                    <p class="text-lg font-medium text-black">Rp. 1.100.000,00</p>

                    <div class="flex justify-between items-center mt-4">
                        {{-- Kategori Pelatihan --}}
                        <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                            <p class="text-sm text-black font-medium">Online</p>
                        </div>
                        {{-- Icon Shop Chart dan Button Daftar--}}
                        <div class="flex items-center ml-auto space-x-2"> 
                            <a href="#" class="cursor-pointer">
                                <img src="{{ asset('img/pelatihan/shop-chart.png') }}" class="h-11 w-auto">
                            </a>
                            <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar Kelas</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Ambil semua radio button
        const levelRadios = document.querySelectorAll('input[name="level"]');
        const categoryRadios = document.querySelectorAll('input[name="category"]');
        const cards = document.querySelectorAll('.pelatihan-card');

        function filterCards() {
            // Ambil nilai level dan category yang terpilih
            const selectedLevel = Array.from(levelRadios).find(radio => radio.checked)?.id;
            const selectedCategory = Array.from(categoryRadios).find(radio => radio.checked)?.id;

            cards.forEach(card => {
                const cardLevel = card.getAttribute('data-level');
                const cardCategory = card.getAttribute('data-category');

                // Periksa apakah card sesuai dengan filter
                const levelMatch = selectedLevel === 'semua' || cardLevel === selectedLevel;
                const categoryMatch = selectedCategory === 'all' || cardCategory === selectedCategory;

                // Tampilkan atau sembunyikan card
                if (levelMatch && categoryMatch) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Tambahkan event listener pada semua radio button
        levelRadios.forEach(radio => {
            radio.addEventListener('change', filterCards);
        });
        categoryRadios.forEach(radio => {
            radio.addEventListener('change', filterCards);
        });
    });
</script>

@endsection