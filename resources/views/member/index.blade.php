@extends('main')
@section('content')
    <div class="flex p-5 gap-10 mt-10">
        <div class="bg-gradient-to-r from-primary to-teal-800 w-1/3 rounded-3xl">
            <div class="p-5">
                <div class="flex text-2xl gap-2 text-white ">
                    <p>Hemat Energi </p>
                    <p class="font-bold">dan Uang </p>
                </div>
                <p class="text-2xl text-white font-bold">Anda Sekarang.</p>
                <p class="max-w-64 mt-3 text-white">Gunakan energi terbarukan dengan langkah mudah, bergabunglah dengan paket
                    Pro
                    kami untuk merasakan layanan
                    penuh
                    kami.</p>
                <p class="max-w-64 mt-3 text-white">Mulailah 14 hari uji coba Pro gratis, Anda dapat terus meningkatkan atau
                    tetap menggunakan versi Lite secara
                    gratis.</p>
                <button class="bg-white p-2 mt-3 rounded-lg">Coba Gratis</button>
            </div>
            <div class="flex justify-center">
                <img src="img/orang.png" alt="orang" width="200">
            </div>
        </div>
        <div>
            <p class="text-5xl">Mulai Sekarang Paket</p>
            <div class="flex text-5xl gap-3 mt-4">
                <p class="font-bold">Premium</p>
                <p>Kami.</p>
            </div>
            <div class="flex gap-10">
                <div class="bg-slate-200 p-5 rounded-3xl mt-10 flex flex-col min-h-full">
                    <p class="text-3xl text-center">Paket Silver</p>
                    <img src="img/Vector 3.png" alt="" class="mx-auto mt-2">
                    <p class="text-center mt-2 font-bold text-2xl">Rp. 150.000,00/Bulan</p>
                    
                    <!-- Gunakan flex-grow untuk memanfaatkan ruang kosong di atas button -->
                    <div class="mt-10 flex-grow">
                        <p>Benefit:</p>
                        <div class="mt-5">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-check"></i>
                                <p>Diskon 15% Harga Semua Kelas</p>
                            </div>
                            <div class="flex items-center gap-2 mt-2">
                                <i class="fa-solid fa-check"></i>
                                <p class="">Diskon 15% Harga Semua Produk</p>
                            </div>
                            <div class="flex gap-2 mt-2">
                                <i class="fa-solid fa-check mt-1"></i>
                                <p class="">Mendapatkan Paket Lengkap Video Kelas Untuk Via Online</p>
                            </div>
                        </div>
                    </div>
                
                    <!-- Posisi button di bagian bawah container -->
                    <div class="flex justify-center">
                        <button class="p-3 bg-primary mt-5 rounded-lg text-white font-bold w-80">Beli Paket Silver</button>
                    </div>
                </div>
                
                <div class="bg-secondary p-5 rounded-3xl mt-10 text-white flex flex-col min-h-full">
                    <p class="text-3xl text-center">Paket Gold</p>
                    <img src="img/Vector 3.png" alt="" class="mx-auto mt-2">
                    <p class="text-center mt-2 font-bold text-2xl">Rp. 250.000,00/Bulan</p>
                    <div class="mt-10 ">
                        <p>Benefit:</p>
                        <div class="mt-5">
                            <div class="flex items-center gap-2 mt-2">
                                <i class="fa-solid fa-check"></i>
                                <p> Diskon 25% Harga Semua Kelas</p>
                            </div>
                            <div class="flex items-center gap-2 mt-2">
                                <i class="fa-solid fa-check"></i>
                                <p class="mt-2"> Diskon 25% Harga Semua Produk</p>
                            </div>
                            <div class="flex gap-2 mt-2">
                                <i class="fa-solid fa-check mt-1"></i>
                                <p class=""> Mendapatkan Paket Lengkap Video Kelas Untuk
                                    Via Online</p>
                            </div>
                            <div class="flex items-center gap-2 mt-2">
                                <i class="fa-solid fa-check"></i>
                                <p class="">Mendapatkan 2x Lipat Point Pengumpulan</p>
                            </div>
                        </div>
                        <div class="flex justify-center mt-10">
                            <button class="p-3 bg-white mt-5 rounded-lg text-black font-bold w-80">Beli Paket Gold</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
