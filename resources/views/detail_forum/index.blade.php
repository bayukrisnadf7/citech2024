@extends('main')
@section('content')
    <div class="flex justify-center px-4">
        {{--
            Konten Forum:
            - Lebar diatur agar nyaman dibaca di semua layar (w-full max-w-4xl).
        --}}
        <div class="p-5 rounded-xl w-full max-w-4xl">
            {{--
                Postingan Utama:
                - Default (mobile): Avatar dan konten tersusun vertikal (flex-col).
                - Layar kecil (sm): Kembali ke tampilan baris (sm:flex-row).
            --}}
            <div class="flex flex-col sm:flex-row gap-5 animate-on-scroll">
                <img src="img/foto.png" alt="Avatar" class="w-12 h-12 sm:w-16 sm:h-16 rounded-full">
                <div class="flex flex-col w-full">
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-sm">
                        <p class="font-semibold">Agung</p>
                        <p class="bg-slate-300 p-1 rounded-full max-h-max"></p>
                        <p class="text-slate-400">Diposting 2 jam yang lalu</p>
                    </div>
                    <div class="mt-4 space-y-4">
                        <p>Halo semua, saya tertarik untuk memasang panel surya di rumah saya sebagai alternatif
                            sumber listrik.
                            Apakah ada yang sudah punya pengalaman mengenai ini? Bagaimana efisiensinya untuk
                            kebutuhan listrik
                            sehari-hari, dan berapa lama pengembalian investasi dari biaya instalasi?</p>
                        {{-- Gambar dibuat responsif --}}
                        <img src="img/forum.png" alt="Panel Surya di Atap Rumah" class="mt-5 w-full h-auto rounded-lg object-cover max-h-[500px]">
                    </div>

                    <div class="mt-5">
                        <hr>
                    </div>
                    <div class="flex items-center gap-5 mt-4 text-slate-400">
                        <div class="flex items-center gap-2">
                            <i class="fa-regular fa-comment fa-lg"></i>
                            <p>5 Komentar</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-thumbs-up fa-lg"></i>
                            <p>30</p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <hr>
                    </div>
                    
                    {{-- Input Komentar Dibuat Responsif --}}
                    <div class="flex mt-5 items-start sm:items-center gap-3 animate-on-scroll delay-100">
                        <img src="img/foto.png" alt="Avatar Anda" class="w-12 h-12 rounded-full">
                        <div class="flex flex-col sm:flex-row w-full gap-2">
                           <input type="text" name="" id="" class="w-full p-3 border rounded-lg"
                            placeholder="Tulis Komentar">
                           <button class="bg-secondary p-3 rounded-xl text-white font-medium whitespace-nowrap">Tambah Komentar</button>
                        </div>
                    </div>
                    <div class="mt-5">
                        <hr>
                    </div>

                    {{-- Bagian Komentar Balasan --}}
                    <div class="w-full rounded-xl mt-5 space-y-6">
                        <div class="flex flex-col sm:flex-row gap-5 animate-on-scroll delay-200">
                            <img src="img/foto.png" alt="Avatar Komentator" class="w-12 h-12 sm:w-16 sm:h-16 rounded-full">
                            <div class="flex flex-col w-full">
                                <p class="font-semibold">Agung</p>
                                <div class="mt-2">
                                    <p>Saya sudah menggunakan panel surya selama setahun. Untuk kebutuhan listrik harian,
                                        efisiensinya bisa mencapai 50-70%, terutama jika rumahmu mendapat banyak sinar
                                        matahari. Pengembalian investasi biasanya sekitar 5-7 tahun, tergantung pada
                                        konsumsi listrik dan kondisi di lokasi.</p>
                                </div>
                                <div class="flex items-center gap-5 mt-4 text-slate-400">
                                    <div class="flex items-center gap-2 cursor-pointer">
                                        <i class="fa-regular fa-comment fa-lg"></i>
                                        <p>5 Balasan</p>
                                    </div>
                                    <div class="flex items-center gap-2 cursor-pointer">
                                        <i class="fa-solid fa-thumbs-up fa-lg"></i>
                                        <p>30</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-5 animate-on-scroll delay-300">
                            <img src="img/foto.png" alt="Avatar Komentator" class="w-12 h-12 sm:w-16 sm:h-16 rounded-full">
                            <div class="flex flex-col w-full">
                                <p class="font-semibold">Agung</p>
                                <div class="mt-2">
                                    <p>Panel surya di rumah saya menutup 80% kebutuhan listrik, terutama di siang hari.
                                        Tagihan listrik jadi jauh lebih rendah. Pengembalian investasi saya perkirakan
                                        sekitar 6 tahun. Pastikan pilih panel dan pemasang berkualitas untuk hasil
                                        maksimal!.</p>
                                </div>
                                <div class="flex items-center gap-5 mt-4 text-slate-400">
                                    <div class="flex items-center gap-2 cursor-pointer">
                                        <i class="fa-regular fa-comment fa-lg"></i>
                                        <p>1 Balasan</p>
                                    </div>
                                    <div class="flex items-center gap-2 cursor-pointer">
                                        <i class="fa-solid fa-thumbs-up fa-lg"></i>
                                        <p>20</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SCRIPT BARU UNTUK ANIMASI ON-SCROLL --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1 // Animasi terpicu saat 10% elemen terlihat
            });

            const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');
            elementsToAnimate.forEach(el => {
                observer.observe(el);
            });
        });
    </script>

    {{-- STYLE BARU UNTUK ANIMASI & DELAY --}}
    <style>
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .animate-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
    </style>
@endsection