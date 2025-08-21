@extends('main')

@section('content')
    {{--
        Bar Aksi:
        - Default (mobile): Tampilan kolom (flex-col).
        - Layar medium (md): Kembali ke tampilan baris (md:flex-row).
    --}}
    <div class="flex flex-col md:flex-row items-stretch md:items-center gap-4 animate-on-scroll">
        <button onclick="showQuestionModal()" class="bg-secondary p-3 rounded-lg text-white w-full md:w-56 whitespace-nowrap">Ajukan Pertanyaan</button>
        <div class="flex w-full gap-3">
            <div class="relative w-full">
                <i class="fa-solid fa-magnifying-glass absolute top-4 left-3 text-slate-300"></i>
                <input id="searchInput" type="text" placeholder="Cari Forum" class="border p-3 px-10 w-full rounded-lg">
            </div>
            <select id="sortOptions" class="border rounded-md p-3">
                <option value="terbaru">Terbaru</option>
                <option value="terlama">Terlama</option>
            </select>
        </div>
    </div>
    <div class="mt-5">
        <hr>
    </div>

    {{--
        Konten Utama:
        - Default (mobile): Tampilan kolom (flex-col).
        - Layar besar (lg): Kembali ke tampilan baris (lg:flex-row).
    --}}
    <div class="flex flex-col lg:flex-row mt-10 gap-8">
        {{--
            Daftar Forum:
            - Default (mobile): Lebar penuh (w-full).
            - Layar besar (lg): Lebar 2/3 (lg:w-2/3).
        --}}
        <div class="w-full lg:w-2/3">
            <div class="flex flex-col gap-5">
                <a href="/detail_forum" class="block animate-on-scroll">
                    <div class="border w-full p-5 rounded-xl forum-post" data-timestamp="1697654400000">
                        <div class="flex gap-4">
                            <img src="img/foto.png" alt="" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col w-full">
                                <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-sm">
                                    <p class="font-semibold">Agung</p>
                                    <p class="bg-slate-300 p-1 rounded-full max-h-max"></p>
                                    <p class="text-slate-400">Diposting 2 jam yang lalu</p>
                                </div>
                                <div class="mt-3">
                                    <p>Halo semua, saya tertarik untuk memasang panel surya di rumah saya sebagai alternatif
                                        sumber listrik.
                                        Apakah ada yang sudah punya pengalaman mengenai ini? Bagaimana efisiensinya untuk
                                        kebutuhan listrik
                                        sehari-hari, dan berapa lama pengembalian investasi dari biaya instalasi?</p>
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
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/detail_forum" class="block animate-on-scroll delay-100">
                    <div class="border w-full p-5 rounded-xl forum-post" data-timestamp="1697568000000"> {{-- Earlier timestamp --}}
                        <div class="flex gap-4">
                            <img src="img/foto.png" alt="" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col w-full">
                                <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-sm">
                                    <p class="font-semibold">Bayu Krisna</p>
                                    <p class="bg-slate-300 p-1 rounded-full max-h-max"></p>
                                    <p class="text-slate-400">Diposting 3 jam yang lalu</p>
                                </div>
                                <div class="mt-3">
                                    <p>Saya tertarik untuk mengetahui lebih lanjut tentang pemanfaatan biomassa sebagai sumber
                                        energi terbarukan di pedesaan. Adakah di antara kalian yang memiliki pengalaman tentang
                                        bagaimana cara mengelola biomassa, seperti limbah pertanian atau kayu, untuk dijadikan
                                        sumber energi?</p>
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
                            </div>
                        </div>
                    </div>
                </a>

                 <a href="/detail_forum" class="block animate-on-scroll delay-200">
                    <div class="border w-full p-5 rounded-xl forum-post" data-timestamp="1697481600000"> {{-- Even earlier timestamp --}}
                        <div class="flex gap-4">
                            <img src="img/foto.png" alt="" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col w-full">
                                <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-sm">
                                    <p class="font-semibold">Hairul Anam</p>
                                    <p class="bg-slate-300 p-1 rounded-full max-h-max"></p>
                                    <p class="text-slate-400">Diposting 5 jam yang lalu</p>
                                </div>
                                <div class="mt-3">
                                    <p>Saya sedang membaca tentang perkembangan teknologi hidrogen sebagai sumber energi dan
                                        sangat tertarik dengan potensinya sebagai pengganti bahan bakar fosil. Namun, saya belum
                                        terlalu paham bagaimana proses produksi dan penyimpanannya bekerja, terutama dalam
                                        konteks energi terbarukan.
                                        Apakah hidrogen bisa menjadi solusi jangka panjang untuk menyimpan energi terbarukan
                                        seperti dari angin atau matahari?</p>
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
                            </div>
                        </div>
                    </div>
                 </a>
            </div>
        </div>
        {{--
            Sidebar Tag:
            - Default (mobile): Lebar penuh (w-full).
            - Layar besar (lg): Lebar 1/3 (lg:w-1/3).
        --}}
        <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
            <div class="border w-full p-5 rounded-xl sticky top-8 animate-on-scroll delay-200">
                <p class="font-bold text-lg">Tag Populer</p>
                <div class="flex flex-wrap gap-3 mt-3">
                    <p class="bg-slate-200 hover:bg-slate-300 px-3 py-1 rounded-full cursor-pointer text-center tag text-sm">biomassa</p>
                    <p class="bg-slate-200 hover:bg-slate-300 px-3 py-1 rounded-full cursor-pointer text-center tag text-sm">gogreen</p>
                    <p class="bg-slate-200 hover:bg-slate-300 px-3 py-1 rounded-full cursor-pointer text-center tag text-sm">infoterkini</p>
                    <p class="bg-slate-200 hover:bg-slate-300 px-3 py-1 rounded-full cursor-pointer text-center tag text-sm">renewables</p>
                    <p class="bg-slate-200 hover:bg-slate-300 px-3 py-1 rounded-full cursor-pointer text-center tag text-sm">cleanenergy</p>
                    <p class="bg-slate-200 hover:bg-slate-300 px-3 py-1 rounded-full cursor-pointer text-center tag text-sm">solarpower</p>
                    <p class="bg-slate-200 hover:bg-slate-300 px-3 py-1 rounded-full cursor-pointer text-center tag text-sm">windenergy</p>
                    <p class="bg-slate-200 hover:bg-slate-300 px-3 py-1 rounded-full cursor-pointer text-center tag text-sm">fossilfree</p>
                    <p class="bg-slate-200 hover:bg-slate-300 px-3 py-1 rounded-full cursor-pointer text-center tag text-sm">sustainable</p>
                </div>
            </div>
        </div>
    </div>
    <div id="questionModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
        <div class="bg-white p-5 rounded-lg shadow-lg w-11/12 md:w-2/3 lg:w-2/5 animate-on-scroll">
            <h2 class="text-lg font-semibold mb-4">Ajukan Pertanyaan</h2>
            <div class="flex items-start mb-4">
                <img src="img/foto.png" alt="User" class="w-12 h-12 rounded-full mr-4">
                <textarea id="questionInput" placeholder="Tulis pertanyaan Anda di sini..."
                    class="border p-3 rounded-lg w-full h-32"></textarea>
            </div>
            <div class="mb-4">
                <label for="imageInput" class="block mb-2 text-sm font-medium text-gray-700">Unggah Gambar (Opsional):</label>
                <input type="file" id="imageInput" accept="image/*" class="border p-2 w-full rounded-lg" />
            </div>
            <div class="flex justify-end">
                <button id="closeModal" class="bg-gray-300 p-2 px-4 rounded-lg ml-2">Tutup</button>
                <button id="submitQuestion" class="bg-primary p-2 px-4 rounded-lg text-white">Kirim</button>
            </div>
        </div>
    </div>

    {{-- Script Modal --}}
    <script>
        const questionModal = document.getElementById('questionModal');
        const ajukanPertanyaanButton = document.querySelector('button.bg-secondary');
        const closeModalButton = document.getElementById('closeModal');
        const submitQuestionButton = document.getElementById('submitQuestion');

        function showQuestionModal() {
            questionModal.classList.remove('hidden');
        }

        function hideQuestionModal() {
            questionModal.classList.add('hidden');
        }

        ajukanPertanyaanButton.addEventListener('click', showQuestionModal);
        closeModalButton.addEventListener('click', hideQuestionModal);

        submitQuestionButton.addEventListener('click', function() {
            const questionText = document.getElementById('questionInput').value;
            if (questionText.trim() === "") {
                alert("Pertanyaan tidak boleh kosong!");
                return;
            }
            alert('Pertanyaan Anda telah dikirim: ' + questionText);
            hideQuestionModal();
            document.getElementById('questionInput').value = '';
        });
    </script>
    {{-- Script Search, Sort, dan Tag --}}
    <script>
        function inputSearch() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const forumPosts = document.querySelectorAll('.forum-post');

            forumPosts.forEach(post => {
                const postWrapper = post.closest('a'); // Target the parent <a> tag
                const postText = post.innerText.toLowerCase();
                if (postText.includes(searchInput)) {
                    postWrapper.style.display = 'block';
                } else {
                    postWrapper.style.display = 'none';
                }
            });
        }

        document.getElementById('searchInput').addEventListener('input', inputSearch);

        const tags = document.querySelectorAll('.tag');
        tags.forEach(tag => {
            tag.addEventListener('click', function() {
                const tagText = this.innerText;
                document.getElementById('searchInput').value = tagText;
                inputSearch();
            });
        });

        // Sorting function
        const sortOptions = document.getElementById('sortOptions');
        sortOptions.addEventListener('change', function() {
            const sortValue = this.value;
            const container = document.querySelector('.flex.flex-col.gap-5');
            const posts = Array.from(container.querySelectorAll('a'));

            posts.sort((a, b) => {
                const timeA = a.querySelector('.forum-post').dataset.timestamp;
                const timeB = b.querySelector('.forum-post').dataset.timestamp;

                if (sortValue === 'terlama') {
                    return timeA - timeB;
                } else {
                    return timeB - timeA;
                }
            });
            // Re-append sorted posts
            posts.forEach(post => container.appendChild(post));
        });
    </script>

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
    </style>
@endsection