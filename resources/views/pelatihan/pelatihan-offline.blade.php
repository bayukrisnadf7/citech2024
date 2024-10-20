@extends('main')
@section('content')
    <!-- Container -->
    <div class="container mx-auto flex gap-5 px-2 justify-center">
        <div class="w-2/3 p-4">
            <h1 class="text-3xl font-semibold mb-2 text-black">Pelatihan Desain Sistem Panel Surya Pemula</h1>
            <p class="mb-5 text-justify text-black">
                Pelatihan ini dirancang untuk memberikan pemahaman mendalam mengenai desain dan implementasi sistem panel
                surya,
                termasuk komponen utama, perhitungan kebutuhan energi, instalasi, dan pemeliharaan sistem.
                Peserta akan mendapatkan pengalaman langsung dalam merancang dan membangun sistem panel surya yang efektif
                dan berkelanjutan
            </p>

            <div class="mb-5">
                <h2 class="text-lg font-semibold text-black">Waktu & Lokasi Pelatihan</h2>
                <p>Pelatihan ini dilaksanakan selama 1 minggu di Aula Hotel ABC</p>
            </div>

            <div class="mb-5">
                <h2 class="text-lg font-semibold text-black">Silabus Pelatihan</h2>
                <ul class="list-none -space-y-2 text-black">
                    <li>
                        <p class="font-medium">1. Pengantar Teknologi Panel Surya</p>
                        <ul class="list-disc pl-8 space-y-1 text-black mb-5">
                            <li class="leading-relaxed">Dasar-dasar energi surya dan panel fotovoltaik</li>
                            <li class="leading-relaxed">Prinsip kerja panel surya</li>
                            <li class="leading-relaxed">Manfaat energi terbarukan</li>
                            <li class="leading-relaxed">Studi kasus penerapan panel surya</li>
                        </ul>
                    </li>
                    <li>
                        <p class="font-medium">2. Perencanaan Kebutuhan Energi</p>
                        <ul class="list-disc pl-8 space-y-1 text-black mb-5">
                            <li class="leading-relaxed">Menghitung kebutuhan energi rumah tangga/industri</li>
                            <li class="leading-relaxed">Menghitung kapasitas panel yang dibutuhkan</li>
                            <li class="leading-relaxed">Perhitungan daya tahan dan efisiensi</li>
                        </ul>
                    </li>
                    <li>
                        <p class="font-medium">3. Perencanaan Kebutuhan Energi</p>
                        <ul class="list-disc pl-8 space-y-1 text-black mb-5">
                            <li class="leading-relaxed">Penjelasan komponen: inverter, baterai, panel, dan lainnya</li>
                            <li class="leading-relaxed">Fungsi dan cara memilih komponen yang sesuai</li>
                            <li class="leading-relaxed">Pengkabelan dan pengaturan sistem panel surya</li>
                        </ul>
                    </li>
                    <li>
                        <p class="font-medium">4. Desain dan Simulasi Sistem Panel Surya</p>
                        <ul class="list-disc pl-8 space-y-1 text-black mb-5">
                            <li class="leading-relaxed">Penggunaan perangkat lunak untuk simulasi desain</li>
                            <li class="leading-relaxed">Merancang sistem sesuai kebutuhan spesifik</li>
                            <li class="leading-relaxed">Diskusi hasil simulasi dan optimasi desain</li>
                        </ul>
                    </li>
                    <li>
                        <p class="font-medium">5. Instalasi dan Uji Coba Sistem</p>
                        <ul class="list-disc pl-8 space-y-1 text-black mb-5">
                            <li class="leading-relaxed">Proses instalasi sistem panel surya</li>
                            <li class="leading-relaxed">Uji coba dan pengujian sistem secara langsung</li>
                            <li class="leading-relaxed">Uji coba dan pengujian sistem secara langsung</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-1/3 p-4">
            <div class="bg-white rounded-lg shadow-md">
                <div class="text-center mb-2">
                    <iframe class="w-full h-48 rounded-lg"
                        src="https://www.youtube.com/embed/zL-H5FnZ9OU?si=1EThOd0a8YC2tsQw" title="Thumbnail Pelatihan"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <!-- Mentor Section -->
                <div class="px-2 py-5">
                    <h2 class="text-xl font-semibold mb-2 text-black">Mentor Pelatihan</h2>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/150" alt="Mentor" class="rounded-full w-16 h-auto mr-2">
                        <div class="flex-col">
                            <p class="text-black">Prof. Dr. Ir. Ahmad Fajar, M.Eng</p>
                            <p class="text-gray-400 text-sm">Engineer Energi Terbarukan</p>
                        </div>
                    </div>
                </div>
                <button onclick="addToCart(event)"
                    class="mt-5 w-full font-medium bg-[#307B74] text-white py-4 rounded-lg cursor-pointer shop-chart">Daftar
                    Kelas</button>
            </div>

        </div>



    </div>

    {{-- Ulasan User --}}
    <div class="container mx-auto px-5 justify-center">
        <h2 class="text-lg font-semibold text-black">3 Komentar</h2>
        <div class="flex"></div>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-3">
            <div class="border border-gray-300 rounded-lg p-4">
                <div class="flex items-center space-x-2 mb-2">
                    <img src="{{ asset('img/pelatihan/user1.png') }}" class="w-auto h-10 rounded-full">
                    <div class="flex-col items-center">
                        <p class="font-medium">Budi Santoso</p>
                        <div class="flex items-center -mt-1 space-x-1">
                            <img src="{{ asset('img/pelatihan/five-star.png') }}" class="w-auto h-2.5">
                            <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                            <p class="text-sm">3 Hari Lalu</p>
                        </div>
                    </div>
                </div>
                <p class="mb-6 text-justify text-black">
                    Kursus ini benar-benar membuka wawasan saya tentang implementasi sistem energi terbarukan.
                    Penjelasannya sangat mendetail, dan saya bisa langsung menerapkannya di proyek kecil di rumah saya.
                    Penggunaan panel surya dan turbin angin dijelaskan dengan sangat baik. Sangat direkomendasikan untuk
                    siapa saja yang ingin terjun di bidang energi terbarukan!
                </p>
                <div class="flex space-x-3">
                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-like.png') }}" class="h-4 w-auto">
                        <p class="text-sm">25 Suka</p>
                    </div>

                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-comment.png') }}" class="h-4 w-auto">
                        <p class="text-sm">25 Komentar</p>
                    </div>

                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-share.png') }}" class="h-4 w-auto">
                        <p class="text-sm">25 Dibagikan</p>
                    </div>

                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-like.png') }}" class="h-4 w-auto">
                        <p class="text-sm">Laporkan</p>
                    </div>
                </div>
            </div>

            <div class="border border-gray-300 rounded-lg p-4">
                <div class="flex items-center space-x-2 mb-2">
                    <img src="{{ asset('img/pelatihan/user1.png') }}" class="w-auto h-10 rounded-full">
                    <div class="flex-col items-center">
                        <p class="font-medium">Budi Santoso</p>
                        <div class="flex items-center -mt-1 space-x-1">
                            <img src="{{ asset('img/pelatihan/five-star.png') }}" class="w-auto h-2.5">
                            <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                            <p class="text-sm">3 Hari Lalu</p>
                        </div>
                    </div>
                </div>
                <p class="mb-6 text-justify text-black">
                    Kursus ini benar-benar membuka wawasan saya tentang implementasi sistem energi terbarukan.
                    Penjelasannya sangat mendetail, dan saya bisa langsung menerapkannya di proyek kecil di rumah saya.
                    Penggunaan panel surya dan turbin angin dijelaskan dengan sangat baik. Sangat direkomendasikan untuk
                    siapa saja yang ingin terjun di bidang energi terbarukan!
                </p>
                <div class="flex space-x-3">
                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-like.png') }}" class="h-4 w-auto">
                        <p class="text-sm">25 Suka</p>
                    </div>

                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-comment.png') }}" class="h-4 w-auto">
                        <p class="text-sm">25 Komentar</p>
                    </div>

                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-share.png') }}" class="h-4 w-auto">
                        <p class="text-sm">25 Dibagikan</p>
                    </div>

                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-like.png') }}" class="h-4 w-auto">
                        <p class="text-sm">Laporkan</p>
                    </div>
                </div>
            </div>

            <div class="border border-gray-300 rounded-lg p-4">
                <div class="flex items-center space-x-2 mb-2">
                    <img src="{{ asset('img/pelatihan/user1.png') }}" class="w-auto h-10 rounded-full">
                    <div class="flex-col items-center">
                        <p class="font-medium">Budi Santoso</p>
                        <div class="flex items-center -mt-1 space-x-1">
                            <img src="{{ asset('img/pelatihan/five-star.png') }}" class="w-auto h-2.5">
                            <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                            <p class="text-sm">3 Hari Lalu</p>
                        </div>
                    </div>
                </div>
                <p class="mb-6 text-justify text-black">
                    Kursus ini benar-benar membuka wawasan saya tentang implementasi sistem energi terbarukan.
                    Penjelasannya sangat mendetail, dan saya bisa langsung menerapkannya di proyek kecil di rumah saya.
                    Penggunaan panel surya dan turbin angin dijelaskan dengan sangat baik. Sangat direkomendasikan untuk
                    siapa saja yang ingin terjun di bidang energi terbarukan!
                </p>
                <div class="flex space-x-3">
                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-like.png') }}" class="h-4 w-auto">
                        <p class="text-sm">25 Suka</p>
                    </div>

                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-comment.png') }}" class="h-4 w-auto">
                        <p class="text-sm">25 Komentar</p>
                    </div>

                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-share.png') }}" class="h-4 w-auto">
                        <p class="text-sm">25 Dibagikan</p>
                    </div>

                    <div class="flex space-x-1 items-center cursor-pointer">
                        <img src="{{ asset('img/pelatihan/icon-like.png') }}" class="h-4 w-auto">
                        <p class="text-sm">Laporkan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
