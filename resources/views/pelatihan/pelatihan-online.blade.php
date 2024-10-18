@extends('main')
@section('content')
    <!-- Container -->
    <div class="container mx-auto flex gap-5 px-2 justify-center">
        <div class="w-2/3 p-4">
            <h1 class="text-3xl font-semibold mb-2 text-black">Pelatihan Energi Terbarukan untuk Pemula</h1>
            <p class="mb-5 text-justify text-black">
                Kelas ini dirancang untuk memberikan pemahaman dasar mengenai energi terbarukan, konsep,
                serta aplikasi praktis dari energi terbarukan dalam kehidupan sehari-hari. Dalam pelatihan ini,
                peserta akan mempelajari jenis-jenis energi terbarukan seperti tenaga surya, angin, biomassa,
                dan lainnya, serta cara mengaplikasikannya untuk kebutuhan energi yang efisien dan ramah lingkungan
            </p>

            <div class="mb-5">
                <h2 class="text-lg font-semibold text-black">Waktu Pelatihan</h2>
                <p>Pelatihan ini berdurasi total 1 Jam 26 Menit</p>
            </div>

            <h2 class="text-lg font-semibold text-black">Apa yang Akan Dipelajari:</h2>
            <ul class="list-disc pl-5 space-y-2 text-black mb-5">
                <li class="leading-relaxed">Dasar-dasar energi terbarukan: Pengenalan sumber energi seperti matahari, angin,
                    dan biomassa</li>
                <li class="leading-relaxed">Jenis-jenis energi terbarukan: Belajar mengenali berbagai macam energi yang dapat
                    diperbarui</li>
                <li class="leading-relaxed">Aplikasi praktis energi terbarukan: Studi kasus implementasi energi terbarukan
                    dalam kehidupan sehari-hari</li>
                <li class="leading-relaxed">Teknik mengoptimalkan penggunaan energi: Menemukan cara paling efisien untuk
                    menggunakan energi terbarukan dalam skala rumah tangga maupun industri</li>
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
                        <img src="{{ asset('img/pelatihan/arrow-circle.png') }}"
                            class="w-auto h-8 transition-transform duration-300" id="arrowIcon1">
                    </div>

                    <ul class="space-y-2 px-10 py-3 text-gray-700 hidden" id="materiList1">
                        {{-- Sub Modul 1 --}}
                        <div class="flex items-center cursor-pointer playButton"
                            data-video-id="zL-H5FnZ9OU?si=1EThOd0a8YC2tsQw">
                            <img src="{{ asset('img/pelatihan/play-button.png') }}" class="w-auto h-5 mr-2">
                            <p>Pengenalan Energi Terbarukan</p>
                            <p class="ml-auto font-medium">6:00</p>
                        </div>

                        {{-- Sub Modul 2 --}}
                        <div class="flex items-center cursor-pointer playButton"
                            data-video-id="at_tl8J2nYY?si=lL-bC3b1esFw1iN4">
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
                        <img src="{{ asset('img/pelatihan/arrow-circle.png') }}"
                            class="w-auto h-8 transition-transform duration-300" id="arrowIcon2">
                    </div>

                    <ul class="space-y-2 px-10 py-3 text-gray-700 hidden" id="materiList2">
                        {{-- Sub Modul 1 --}}
                        <div class="flex items-center cursor-pointer playButton"
                            data-video-id="zL-H5FnZ9OU?si=1EThOd0a8YC2tsQw">
                            <img src="{{ asset('img/pelatihan/play-button.png') }}" class="w-auto h-5 mr-2">
                            <p>Panel Surya dan Cara Kerjanya</p>
                            <p class="ml-auto font-medium">10:20</p>
                        </div>

                        {{-- Sub Modul 2 --}}
                        <div class="flex items-center cursor-pointer playButton"
                            data-video-id="at_tl8J2nYY?si=lL-bC3b1esFw1iN4">
                            <img src="{{ asset('img/pelatihan/play-button.png') }}" class="w-auto h-5 mr-2">
                            <p>Turbin Angin dan Penerapannya</p>
                            <p class="ml-auto font-medium">11:40</p>
                        </div>

                        {{-- Sub Modul 3 --}}
                        <div class="flex items-center cursor-pointer playButton"
                            data-video-id="at_tl8J2nYY?si=lL-bC3b1esFw1iN4">
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
                        <img src="{{ asset('img/pelatihan/arrow-circle.png') }}"
                            class="w-auto h-8 transition-transform duration-300" id="arrowIcon3">
                    </div>

                    <ul class="space-y-2 px-10 py-3 text-gray-700 hidden" id="materiList3">
                        <!-- Sub Modul 1 -->
                        <div class="flex items-center cursor-pointer playButton"
                            data-video-id="zL-H5FnZ9OU?si=1EThOd0a8YC2tsQw">
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
                        <img src="{{ asset('img/pelatihan/arrow-circle.png') }}"
                            class="w-auto h-8 transition-transform duration-300" id="arrowIcon4">
                    </div>

                    <ul class="space-y-2 px-10 py-3 text-gray-700 hidden" id="materiList4">
                        <!-- Sub Modul 1 -->
                        <div class="flex items-center cursor-pointer playButton"
                            data-video-id="zL-H5FnZ9OU?si=1EThOd0a8YC2tsQw">
                            <img src="{{ asset('img/pelatihan/play-button.png') }}" class="w-auto h-5 mr-2">
                            <p>Teknik Pengelolaan Energi Terbarukan</p>
                            <p class="ml-auto font-medium">17:50</p>
                        </div>
                    </ul>
                </div>


                <!-- Iframe Youtube -->
                <div id="videoOverlay"
                    class="fixed inset-0 bg-black bg-no-repeat bg-opacity-70 flex items-center justify-center hidden">
                    <iframe class="rounded-xl" id="videoFrame" width="80%" height="80%" src=""
                        frameborder="0" allowfullscreen></iframe>
                    <button id="closeVideo"
                        class="absolute top-5 right-5 text-black bg-[#E1E1E1] rounded-full p-2 justify-center flex w-10 h-10">X</button>
                </div>
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
                <button onclick="addToCartFromMentor(event)" class="mt-5 w-full font-medium bg-[#307B74] text-white py-4 rounded-lg cursor-pointer">Daftar Kelas</button>
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
    </div>
    <div class="pelatihan-card bg-white rounded-lg shadow h-auto hidden" data-level="pemula" data-category="online">
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
                        <button class="bg-[#307B74] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Daftar
                            Kelas</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function addToCartFromMentor(event) {
            event.preventDefault(); // Prevent default link behavior
    
            // Directly access the specific mentor training data
            const name = "Pelatihan Energi Terbarukan untuk Pemula";
            const price = "Rp. 1.100.000,00";
            const imageUrl = "img/pelatihan/pelatihan3.png"; // Replace with actual image URL if needed
    
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
    </script>
    <script>
        const playButtons = document.querySelectorAll(".playButton");
        const videoOverlay = document.getElementById("videoOverlay");
        const videoFrame = document.getElementById("videoFrame");
        const closeVideo = document.getElementById("closeVideo");

        playButtons.forEach(button => {
            button.addEventListener("click", function() {
                const videoId = this.getAttribute("data-video-id");
                videoFrame.src = `https://www.youtube.com/embed/${videoId}?enablejsapi=1`;
                videoOverlay.classList.remove("hidden");
            });
        });

        closeVideo.addEventListener("click", function() {
            videoOverlay.classList.add("hidden");
            videoFrame.src = "";
        });

        const toggleArrows = document.querySelectorAll(".toggleArrow");

        toggleArrows.forEach(toggle => {
            toggle.addEventListener("click", function() {
                const materiId = this.getAttribute("data-materi-id");
                const materiList = document.getElementById(`materiList${materiId}`);
                const arrowIcon = document.getElementById(`arrowIcon${materiId}`);

                toggleArrows.forEach(otherToggle => {
                    const otherId = otherToggle.getAttribute("data-materi-id");
                    if (otherId !== materiId) {
                        document.getElementById(`materiList${otherId}`).classList.add("hidden");
                        document.getElementById(`arrowIcon${otherId}`).classList.remove("rotate");
                    }
                });

                materiList.classList.toggle("hidden");
                arrowIcon.classList.toggle("rotate");
            });
        });
    </script>

    <style>
        .rotate {
            transform: rotate(180deg);
        }

        #videoOverlay {
            z-index: 1000;
            margin: 0;
        }
    </style>
@endsection
