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
<div class="container mx-auto flex gap-5 px-2">
        
    <!-- Sidebar Filters -->
    <div class="w-1/5 bg-white p-4 rounded-lg shadow">
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
                <li><input type="radio" name="category" id="workshop" class="mr-2"><label for="workshop">Workshop Offline</label></li>
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
        <div class="grid grid-cols-3 gap-6">
            <!-- Training Card 1 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="your-image1.jpg" alt="Pelatihan Image" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold">Pembuatan Sistem Hybrid Energi Terbarukan</h3>
                <p class="text-sm text-gray-500 mb-4">Pelatihan yang mengajarkan cara menggabungkan beberapa sumber energi terbarukan...</p>
                <p class="text-sm font-semibold">Pengajar: <span class="font-normal">Prof. Dr. Ir. Ahmad Fajar, M.Eng</span></p>
                <p class="text-sm font-semibold">Level: <span class="font-normal">Pemula</span></p>
                <p class="text-sm font-semibold">Durasi: <span class="font-normal">3 Hari</span></p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-green-500 font-semibold">Rp. 100.000,00</span>
                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg">Daftar Kelas</button>
                </div>
            </div>

            <!-- Training Card 2 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="your-image2.jpg" alt="Pelatihan Image" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold">Pelatihan Desain Sistem Panel Surya</h3>
                <p class="text-sm text-gray-500 mb-4">Kelas ini memberikan dasar-dasar teknis tentang panel surya, cara instalasi...</p>
                <p class="text-sm font-semibold">Pengajar: <span class="font-normal">Prof. Dr. Ir. Ahmad Fajar, M.Eng</span></p>
                <p class="text-sm font-semibold">Level: <span class="font-normal">Pemula</span></p>
                <p class="text-sm font-semibold">Durasi: <span class="font-normal">6 Bulan</span></p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-green-500 font-semibold">Rp. 1.200.000,00</span>
                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg">Daftar Kelas</button>
                </div>
            </div>

            <!-- Training Card 3 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="your-image3.jpg" alt="Pelatihan Image" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold">Pelatihan Energi Terbarukan untuk Pemula</h3>
                <p class="text-sm text-gray-500 mb-4">Kursus pengenalan energi terbarukan untuk pemula...</p>
                <p class="text-sm font-semibold">Pengajar: <span class="font-normal">Prof. Dr. Ir. Ahmad Fajar, M.Eng</span></p>
                <p class="text-sm font-semibold">Level: <span class="font-normal">Pemula</span></p>
                <p class="text-sm font-semibold">Durasi: <span class="font-normal">2 Minggu</span></p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-green-500 font-semibold">Rp. 1.200.000,00</span>
                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg">Daftar Kelas</button>
                </div>
            </div>
            
            <!-- Add more cards similarly -->
        </div>
    </div>
    
</div>
@endsection