@extends('main')
@section('content')
<!-- Container -->
<div class="container mx-auto flex gap-5 px-2 justify-center">
    <div class="w-2/3 p-4">
        <h1 class="text-3xl font-semibold mb-4 text-black">Pelatihan Energi Terbarukan untuk Pemula</h1>
        <p class="mb-6 text-justify text-black">
            Kelas ini dirancang untuk memberikan pemahaman dasar mengenai energi terbarukan, konsep, 
            serta aplikasi praktis dari energi terbarukan dalam kehidupan sehari-hari. Dalam pelatihan ini, 
            peserta akan mempelajari jenis-jenis energi terbarukan seperti tenaga surya, angin, biomassa, 
            dan lainnya, serta cara mengaplikasikannya untuk kebutuhan energi yang efisien dan ramah lingkungan
        </p>
        
        <h2 class="text-lg font-semibold text-black">Apa yang Akan Dipelajari:</h2>
        <ul class="list-disc list-inside space-y-1 text-black mb-6">
            <li>Dasar-dasar energi terbarukan: Pengenalan sumber energi seperti matahari, angin, dan biomassa</li>
            <li>Jenis-jenis energi terbarukan: Belajar mengenali berbagai macam energi yang dapat diperbarui</li>
            <li>Aplikasi praktis energi terbarukan: Studi kasus implementasi energi terbarukan dalam kehidupan sehari-hari</li>
            <li>Teknik mengoptimalkan penggunaan energi: Menemukan cara paling efisien untuk menggunakan energi terbarukan dalam skala rumah tangga maupun industri</li>
        </ul>
        
        <!-- Materi Kelas -->
        <h2 class="text-lg font-semibold mb-2 text-black">Materi Pelatihan</h2>
        <div class="space-y-2 mb-5">
            <!-- Modul 1 -->
            <div class="border border-gray-300 rounded-lg p-4">
                <div class="flex items-center justify-between cursor-pointer toggleArrow" data-materi-id="1">
                    <div class="flex mr-auto items-center space-x-3">
                        <div class="bg-[#E1E1E1] rounded-full w-10 h-10 flex items-center justify-center">
                            <p class="font-bold text-black text-lg">1</p>
                        </div>
                        <h3 class="text-lg font-semibold">Pengenalan Dasar Energi Terbarukan</h3>
                    </div>
                    <img src="{{ asset('img/pelatihan/arrow-circle.png') }}" class="w-auto h-8 transition-transform duration-300" id="arrowIcon1">
                </div>
            
                <ul class="space-y-2 px-10 py-3 text-gray-700 hidden" id="materiList1">
                    {{-- Sub Modul 1 --}}
                    <div class="flex items-center cursor-pointer playButton" data-video-id="zL-H5FnZ9OU?si=1EThOd0a8YC2tsQw">
                        <img src="{{ asset('img/pelatihan/play-button.png') }}" class="w-auto h-5 mr-2">
                        <p>Pengenalan Energi Terbarukan</p>
                        <p class="ml-auto font-medium">6:00</p>
                    </div>

                    {{-- Sub Modul 2 --}}
                    <div class="flex items-center cursor-pointer playButton" data-video-id="at_tl8J2nYY?si=lL-bC3b1esFw1iN4">
                        <img src="{{ asset('img/pelatihan/play-button.png') }}" class="w-auto h-5 mr-2">
                        <p>Jenis-jenis Sumber Energi Terbarukan</p>
                        <p class="ml-auto font-medium">7:00</p>
                    </div>
                </ul>
            </div>

            <!-- Modul 2 -->
            <div class="border border-gray-300 rounded-lg p-4">
                <div class="flex items-center justify-between cursor-pointer toggleArrow" data-materi-id="2">
                    <div class="flex mr-auto items-center space-x-3">
                        <div class="bg-[#E1E1E1] rounded-full w-10 h-10 flex items-center justify-center">
                            <p class="font-bold text-black text-lg">2</p>
                        </div>
                        <h3 class="text-lg font-semibold">Komponen Energi Terbarukan</h3>
                    </div>
                    <img src="{{ asset('img/pelatihan/arrow-circle.png') }}" class="w-auto h-8 transition-transform duration-300" id="arrowIcon2">
                </div>
            
                <ul class="space-y-2 px-10 py-3 text-gray-700 hidden" id="materiList2">
                    {{-- Sub Modul 1 --}}
                    <div class="flex items-center cursor-pointer playButton" data-video-id="zL-H5FnZ9OU?si=1EThOd0a8YC2tsQw">
                        <img src="{{ asset('img/pelatihan/play-button.png') }}" class="w-auto h-5 mr-2">
                        <p>Panel Surya dan Cara Kerjanya</p>
                        <p class="ml-auto font-medium">10:20</p>
                    </div>

                    {{-- Sub Modul 2 --}}
                    <div class="flex items-center cursor-pointer playButton" data-video-id="at_tl8J2nYY?si=lL-bC3b1esFw1iN4">
                        <img src="{{ asset('img/pelatihan/play-button.png') }}" class="w-auto h-5 mr-2">
                        <p>Turbin Angin dan Penerapannya</p>
                        <p class="ml-auto font-medium">11:40</p>
                    </div>

                    {{-- Sub Modul 3 --}}
                    <div class="flex items-center cursor-pointer playButton" data-video-id="at_tl8J2nYY?si=lL-bC3b1esFw1iN4">
                        <img src="{{ asset('img/pelatihan/play-button.png') }}" class="w-auto h-5 mr-2">
                        <p>Baterai Penyimpanan untuk Pengelolaan Energi</p>
                        <p class="ml-auto font-medium">13:00</p>
                    </div>
                </ul>
            </div>

            <!-- Modul 3 -->
            <div class="border border-gray-300 rounded-lg p-4">
                <div class="flex items-center justify-between cursor-pointer toggleArrow" data-materi-id="3">
                    <div class="flex mr-auto items-center space-x-3">
                        <div class="bg-[#E1E1E1] rounded-full w-10 h-10 flex items-center justify-center">
                            <p class="font-bold text-black text-lg">3</p>
                        </div>
                        <h3 class="text-lg font-semibold">Desain Sistem Energi Terbarukan</h3>
                    </div>
                    <img src="{{ asset('img/pelatihan/arrow-circle.png') }}" class="w-auto h-8 transition-transform duration-300" id="arrowIcon3">
                </div>

                <ul class="space-y-2 px-10 py-3 text-gray-700 hidden" id="materiList3">
                    <!-- Sub Modul 1 -->
                    <div class="flex items-center cursor-pointer playButton" data-video-id="zL-H5FnZ9OU?si=1EThOd0a8YC2tsQw">
                        <img src="{{ asset('img/pelatihan/play-button.png') }}" class="w-auto h-5 mr-2">
                        <p>Merancang Sistem untuk Rumah Tangga</p>
                        <p class="ml-auto font-medium">20:30</p>
                    </div>
                </ul>
            </div>

            <!-- Modul 4 -->
            <div class="border border-gray-300 rounded-lg p-4">
                <div class="flex items-center justify-between cursor-pointer toggleArrow" data-materi-id="4">
                    <div class="flex mr-auto items-center space-x-3">
                        <div class="bg-[#E1E1E1] rounded-full w-10 h-10 flex items-center justify-center">
                            <p class="font-bold text-black text-lg">4</p>
                        </div>
                        <h3 class="text-lg font-semibold">Manajemen dan Optimasi Sistem</h3>
                    </div>
                    <img src="{{ asset('img/pelatihan/arrow-circle.png') }}" class="w-auto h-8 transition-transform duration-300" id="arrowIcon4">
                </div>

                <ul class="space-y-2 px-10 py-3 text-gray-700 hidden" id="materiList4">
                    <!-- Sub Modul 1 -->
                    <div class="flex items-center cursor-pointer playButton" data-video-id="zL-H5FnZ9OU?si=1EThOd0a8YC2tsQw">
                        <img src="{{ asset('img/pelatihan/play-button.png') }}" class="w-auto h-5 mr-2">
                        <p>Teknik Pengelolaan Energi Terbarukan</p>
                        <p class="ml-auto font-medium">17:50</p>
                    </div>
                </ul>
            </div>


            <!-- Iframe Youtube -->
            <div id="videoOverlay" class="fixed inset-0 bg-black bg-no-repeat bg-opacity-70 flex items-center justify-center hidden">
                <iframe class="rounded-xl" id="videoFrame" width="80%" height="80%" src="" frameborder="0" allowfullscreen></iframe>
                <button id="closeVideo" class="absolute top-5 right-5 text-black bg-[#E1E1E1] rounded-full p-2 justify-center flex w-10 h-10">X</button>
            </div>
        </div>
    </div>
    
    <div class="w-1/3 p-4">
        <div class="bg-white rounded-lg shadow-md">
            <div class="text-center mb-2">
                <iframe class="w-full h-48 rounded-lg" src="https://www.youtube.com/embed/zL-H5FnZ9OU?si=1EThOd0a8YC2tsQw" 
                title="Thumbnail Pelatihan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
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
            <button class="mt-5 w-full font-medium bg-[#307B74] text-white py-4 rounded-lg">Daftar Kelas</button>
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
                    Penggunaan panel surya dan turbin angin dijelaskan dengan sangat baik. Sangat direkomendasikan untuk siapa saja yang ingin terjun di bidang energi terbarukan!
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
                    Penggunaan panel surya dan turbin angin dijelaskan dengan sangat baik. Sangat direkomendasikan untuk siapa saja yang ingin terjun di bidang energi terbarukan!
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
</div>
{{-- <!-- Container utama -->
<div class="max-w-7xl mx-auto p-6 grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Bagian Kiri - Deskripsi Kelas -->
    <div class="lg:col-span-2 p-6">
        <h1 class="text-2xl font-bold mb-4">Pembuatan System Hybrid Energi Terbarukan</h1>
        <p class="text-gray-700 mb-6">
            Kelas ini dirancang untuk memberikan pemahaman mendalam tentang konsep dan implementasi sistem hybrid 
            energi terbarukan, yang menggabungkan beberapa sumber energi seperti tenaga surya, angin, dan baterai 
            untuk menghasilkan listrik yang efisien dan ramah lingkungan...
        </p>
        
        <h2 class="text-xl font-semibold mb-4">Apa yang Akan Dipelajari:</h2>
        <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
            <li>Dasar-dasar energi terbarukan: Sumber energi seperti matahari, angin, dan biomassa.</li>
            <li>Komponen utama dalam sistem hybrid: Panel surya, turbin angin, inverter, baterai penyimpanan, dll.</li>
            <li>Teknik merancang dan mengelola sistem hybrid untuk kebutuhan energi spesifik.</li>
            <li>Teknik manajemen daya dan efisiensi energi.</li>
            <li>Studi kasus penerapan sistem hybrid energi terbarukan di dunia nyata.</li>
        </ul>
        
        <!-- Materi Kelas -->
        <h2 class="text-xl font-semibold mb-4">Materi Kelas</h2>
        <div class="space-y-6">
            <!-- Modul 1 -->
            <div class="border border-gray-300 rounded-lg p-4">
                <h3 class="text-lg font-semibold mb-2">1. Pengenalan Dasar Energi Terbarukan</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>• Pengantar Energi Terbarukan <span class="float-right">5:00</span></li>
                    <li>• Jenis-jenis Sumber Energi Terbarukan <span class="float-right">7:00</span></li>
                </ul>
            </div>
            <!-- Modul 2 -->
            <div class="border border-gray-300 rounded-lg p-4">
                <h3 class="text-lg font-semibold mb-2">2. Komponen Sistem Hybrid</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>• Panel Surya dan Cara Kerjanya <span class="float-right">11:00</span></li>
                    <li>• Turbin Angin dalam Sistem Hybrid <span class="float-right">10:00</span></li>
                    <li>• Baterai Penyimpanan dan Pengelolaan Energi <span class="float-right">8:30</span></li>
                </ul>
            </div>
            <!-- Modul 3 -->
            <div class="border border-gray-300 rounded-lg p-4">
                <h3 class="text-lg font-semibold mb-2">3. Desain Sistem Hybrid</h3>
            </div>
            <!-- Modul 4 -->
            <div class="border border-gray-300 rounded-lg p-4">
                <h3 class="text-lg font-semibold mb-2">4. Manajemen dan Optimasi Sistem</h3>
            </div>
        </div>
    </div>

    <!-- Bagian Kanan - Mentor dan Review -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <!-- Mentor Section -->
        <div class="text-center mb-8">
            <img src="https://via.placeholder.com/150" alt="Mentor" class="rounded-full w-24 h-24 mx-auto mb-4">
            <h2 class="text-xl font-semibold">Mentor Kelas</h2>
            <p class="text-gray-600">Prof. Dr. Ir. Ahmad Fajar, M.Eng</p>
            <p class="text-gray-500 text-sm">Engineer Energi Terbarukan</p>
            <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg">Daftar Kelas</button>
        </div>

        <!-- Customer Reviews -->
        <h2 class="text-lg font-semibold mb-4">320 Ulasan Customer</h2>

        <!-- Review 1 -->
        <div class="border-t border-gray-300 pt-4">
            <div class="flex items-center space-x-4">
                <img src="https://via.placeholder.com/50" alt="User" class="rounded-full w-12 h-12">
                <div>
                    <h3 class="font-semibold">Budi Santoso</h3>
                    <p class="text-sm text-gray-500">5 Hari Lalu</p>
                    <p class="text-sm text-yellow-500">★★★★★</p>
                </div>
            </div>
            <p class="mt-2 text-gray-700">Kursus ini benar-benar membuka wawasan saya...</p>
            <div class="mt-2 flex items-center space-x-2 text-gray-500 text-sm">
                <span>24 Likes</span>
                <span>16 Balasan</span>
                <span>7 Share</span>
            </div>
        </div>

        <!-- Review 2 -->
        <div class="border-t border-gray-300 pt-4 mt-4">
            <div class="flex items-center space-x-4">
                <img src="https://via.placeholder.com/50" alt="User" class="rounded-full w-12 h-12">
                <div>
                    <h3 class="font-semibold">Andi Wijaya</h3>
                    <p class="text-sm text-gray-500">5 Hari Lalu</p>
                    <p class="text-sm text-yellow-500">★★★★★</p>
                </div>
            </div>
            <p class="mt-2 text-gray-700">Sebagai mahasiswa, saya merasa kursus ini sangat bermanfaat...</p>
            <div class="mt-2 flex items-center space-x-2 text-gray-500 text-sm">
                <span>50 Likes</span>
                <span>22 Balasan</span>
                <span>10 Share</span>
            </div>
        </div>
    </div>
</div> --}}

<script>
    const playButtons = document.querySelectorAll(".playButton"); // Select all elements with class "playButton"
    const videoOverlay = document.getElementById("videoOverlay");
    const videoFrame = document.getElementById("videoFrame");
    const closeVideo = document.getElementById("closeVideo");

    // Loop through all play buttons and attach click event
    playButtons.forEach(button => {
        button.addEventListener("click", function() {
            const videoId = this.getAttribute("data-video-id");
            videoFrame.src = `https://www.youtube.com/embed/${videoId}?enablejsapi=1`; // Set src video
            videoOverlay.classList.remove("hidden");
        });
    });

    // Menutup iframe saat tombol close diklik
    closeVideo.addEventListener("click", function() {
        videoOverlay.classList.add("hidden");
        videoFrame.src = ""; // Hentikan video ketika ditutup
    });

    // Pilih semua tombol "toggleArrow"
const toggleArrows = document.querySelectorAll(".toggleArrow");

toggleArrows.forEach(toggle => {
    toggle.addEventListener("click", function() {
        const materiId = this.getAttribute("data-materi-id"); // Dapatkan ID materi yang terkait
        const materiList = document.getElementById(`materiList${materiId}`);
        const arrowIcon = document.getElementById(`arrowIcon${materiId}`);

        // Tutup semua materi lain
        toggleArrows.forEach(otherToggle => {
            const otherId = otherToggle.getAttribute("data-materi-id");
            if (otherId !== materiId) {
                document.getElementById(`materiList${otherId}`).classList.add("hidden");
                document.getElementById(`arrowIcon${otherId}`).classList.remove("rotate");
            }
        });

        // Toggle hidden class on the current list
        materiList.classList.toggle("hidden");

        // Toggle rotate class on the current arrow icon
        arrowIcon.classList.toggle("rotate");
    });
});

</script>

<style>
    /* CSS untuk rotasi icon */
    .rotate {
        transform: rotate(180deg); /* Rotasi 180 derajat */
    }
    #videoOverlay {
        z-index: 1000; 
        margin: 0;
    }
</style>
@endsection