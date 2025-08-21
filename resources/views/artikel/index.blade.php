@extends('main')
@section('content')
    {{-- 
        Bar Pencarian dan Urutan:
        - Default (mobile): Tampilan kolom (flex-col).
        - Layar kecil (sm): Kembali ke tampilan baris (sm:flex-row).
    --}}
    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 animate-on-scroll">
        <div class="relative w-full">
            <i class="fa-solid fa-magnifying-glass absolute top-4 left-3 text-slate-300"></i>
            <input id="searchInput" type="text" placeholder="Cari Artikel" class="border p-3 px-10 w-full rounded-lg">
        </div>
        <select class="border rounded-md p-3 w-full sm:w-auto">
            <option>Terbaru</option>
            <option>Terlama</option>
        </select>
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
            Daftar Artikel:
            - Default (mobile): Lebar penuh (w-full).
            - Layar besar (lg): Lebar 2/3 (lg:w-2/3).
        --}}
        <div class="w-full lg:w-2/3">
            <div id="articleList" class="flex flex-col gap-8">
                <a href="/detail_artikel" class="block animate-on-scroll">
                    {{-- 
                        Kartu Artikel:
                        - Default (mobile): Tampilan kolom (flex-col-reverse), gambar di atas.
                        - Layar medium (md): Kembali ke tampilan baris (md:flex-row).
                    --}}
                    <div class="article border w-full p-5 rounded-xl h-auto">
                        <div class="flex flex-col-reverse md:flex-row gap-5">
                            <div class="flex flex-col w-full">
                                <p class="font-bold text-2xl">Pemanfaatan Limbah Sampah Menjadi Energi</p>
                                <div class="mt-4">
                                    <p class="line-clamp-3 text-slate-400">Proses mengubah limbah, terutama sampah
                                        organik, menjadi sumber energi yang bermanfaat, seperti listrik, panas, atau bahan
                                        bakar. Teknologi ini tidak hanya membantu mengurangi jumlah limbah yang berakhir
                                        di tempat pembuangan akhir (TPA), tetapi juga berkontribusi pada produksi energi
                                        terbarukan yang lebih bersih dan ramah lingkungan.</p>
                                </div>
                                <div class="flex justify-between items-center mt-auto pt-4">
                                    <div class="flex items-center gap-3">
                                        <img src="img/foto.png" alt="" width="40">
                                        <div class="flex flex-col text-xs">
                                            <p>Administrator</p>
                                            <p class="text-slate-400">IT Fullstack</p>
                                        </div>
                                    </div>
                                    <p class="text-secondary text-sm">24 September 2024</p>
                                </div>
                            </div>
                            <img src="img/artikel-1.png" alt="Pemanfaatan Limbah"
                                class="w-full md:w-2/5 h-48 object-cover rounded-lg">
                        </div>
                    </div>
                </a>

                <a href="/detail_artikel" class="block animate-on-scroll delay-100">
                    <div class="article border w-full p-5 rounded-xl h-auto">
                        <div class="flex flex-col-reverse md:flex-row gap-5">
                            <div class="flex flex-col w-full">
                                <p class="font-bold text-2xl">Wawasan Penting tentang Produk Energi Terbarukan</p>
                                <div class="mt-4">
                                    <p class="line-clamp-3 text-slate-400">Merujuk pada pemahaman tentang perkembangan,
                                        manfaat, tantangan, dan peluang dari berbagai sumber dan produk energi yang dapat
                                        diperbarui. Energi terbarukan memainkan peran vital dalam transisi dunia menuju
                                        sistem energi yang lebih bersih dan berkelanjutan, sekaligus mengurangi
                                        ketergantungan pada bahan bakar fosil.</p>
                                </div>
                                <div class="flex justify-between items-center mt-auto pt-4">
                                    <div class="flex items-center gap-3">
                                        <img src="img/foto.png" alt="" width="40">
                                        <div class="flex flex-col text-xs">
                                            <p>Administrator</p>
                                            <p class="text-slate-400">IT Fullstack</p>
                                        </div>
                                    </div>
                                    <p class="text-secondary text-sm">20 September 2024</p>
                                </div>
                            </div>
                            <img src="img/artikel-2.png" alt="Produk Energi Terbarukan"
                                class="w-full md:w-2/5 h-48 object-cover rounded-lg">
                        </div>
                    </div>
                </a>

                <a href="/detail_artikel" class="block animate-on-scroll delay-200">
                    <div class="article border w-full p-5 rounded-xl h-auto">
                        <div class="flex flex-col-reverse md:flex-row gap-5">
                            <div class="flex flex-col w-full">
                                <p class="font-bold text-2xl">Solusi Masa Depan untuk Bumi yang Berkelanjutan</p>
                                <div class="mt-4">
                                    <p class="line-clamp-3 text-slate-400">Proses mengubah limbah, terutama sampah
                                        organik, menjadi sumber energi yang bermanfaat, seperti listrik, panas, atau bahan
                                        bakar. Teknologi ini tidak hanya membantu mengurangi jumlah limbah yang berakhir
                                        di tempat pembuangan akhir (TPA), tetapi juga berkontribusi pada produksi energi
                                        terbarukan yang lebih bersih dan ramah lingkungan.</p>
                                </div>
                                <div class="flex justify-between items-center mt-auto pt-4">
                                    <div class="flex items-center gap-3">
                                        <img src="img/foto.png" alt="" width="40">
                                        <div class="flex flex-col text-xs">
                                            <p>Administrator</p>
                                            <p class="text-slate-400">IT Fullstack</p>
                                        </div>
                                    </div>
                                    <p class="text-secondary text-sm">15 September 2024</p>
                                </div>
                            </div>
                            <img src="img/artikel-3.png" alt="Bumi Berkelanjutan"
                                class="w-full md:w-2/5 h-48 object-cover rounded-lg">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        {{-- 
            Sidebar Artikel Populer:
            - Default (mobile): Lebar penuh (w-full).
            - Layar besar (lg): Lebar 1/3 (lg:w-1/3).
        --}}
        <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
            <div class="border w-full p-5 rounded-xl sticky top-8 animate-on-scroll delay-100">
                <p class="font-bold text-lg">Populer Artikel</p>
                <div class="flex flex-col mt-5 font-medium gap-5">
                    <p class="cursor-pointer hover:text-primary">Pemanfaatan Limbah Sampah Menjadi Energi</p>
                    <p class="cursor-pointer hover:text-primary">Wawasan Penting tentang Produk Energi Terbarukan</p>
                    <p class="cursor-pointer hover:text-primary">Solusi Masa Depan untuk Bumi yang Berkelanjutan</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Script untuk Search dan Sort (tidak diubah) --}}
    <script>
        const searchInput = document.getElementById('searchInput');
        const articles = document.querySelectorAll('.article');

        function filterArticles() {
            const query = searchInput.value.toLowerCase().trim();

            articles.forEach(article => {
                // Parent dari .article adalah <a>, kita targetkan itu untuk disembunyikan
                const articleLink = article.closest('a');
                const articleTitle = article.querySelector('p.font-bold').textContent.toLowerCase();
                const articleContent = article.querySelector('p.line-clamp-3').textContent.toLowerCase();

                if (articleTitle.includes(query) || articleContent.includes(query)) {
                    articleLink.style.display = 'block';
                } else {
                    articleLink.style.display = 'none';
                }
            });
        }

        searchInput.addEventListener('input', filterArticles);

        searchInput.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                filterArticles();
            }
        });

        const sortSelect = document.querySelector('select');

        function sortArticles(order) {
            const articleList = document.getElementById('articleList');
            // Kita ambil elemen <a> yang membungkus kartu artikel untuk diurutkan
            const articlesArray = Array.from(articleList.querySelectorAll('a'));

            articlesArray.sort((a, b) => {
                const dateA = new Date(a.querySelector('p.text-secondary').textContent);
                const dateB = new Date(b.querySelector('p.text-secondary').textContent);

                return order === 'Terlama' ? dateA - dateB : dateB - dateA;
            });

            // Kosongkan daftar dan tambahkan kembali artikel yang sudah diurutkan
            articleList.innerHTML = '';
            articlesArray.forEach(articleElement => {
                articleList.appendChild(articleElement);
            });
        }

        sortSelect.addEventListener('change', function() {
            const selectedOption = this.value;
            sortArticles(selectedOption);
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