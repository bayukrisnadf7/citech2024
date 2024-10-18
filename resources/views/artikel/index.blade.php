@extends('main')
@section('content')
    <div class="flex items-center gap-28">
        <div class="flex w-full gap-3">
            <div class="relative w-full">
                <i class="fa-solid fa-magnifying-glass absolute top-4 left-3 text-slate-300"></i>
                <input id="searchInput" type="text" placeholder="Cari Artikel" class="border p-3 px-10 w-full rounded-lg">

            </div>
            <select class="border rounded-md p-3">
                <option>Terbaru</option>
                <option>Terlama</option>
            </select>
        </div>
    </div>
    <div class="mt-5">
        <hr>
    </div>
    <div class="flex mt-10 gap-5">
        <div class="w-3/4">
            <div id="articleList" class="flex flex-col gap-5">
                <a href="/detail_artikel">
                    <div class="article border w-full p-5 rounded-xl max-h-56">
                        <div class="flex gap-5">
                            <div class="flex flex-col">
                                <p class="font-bold text-2xl">Pemanfaatan Limbah Sampah Menjadi Energi</p>
                                <div class="mt-4">
                                    <p class="line-clamp-3 text-slate-400">Proses mengubah limbah, terutama sampah organik,
                                        menjadi sumber
                                        energi yang bermanfaat, seperti listrik, panas, atau bahan bakar. Teknologi ini
                                        tidak
                                        hanya membantu mengurangi jumlah limbah yang berakhir di tempat pembuangan akhir
                                        (TPA),
                                        tetapi juga berkontribusi pada produksi energi terbarukan yang lebih bersih dan
                                        ramah
                                        lingkungan.</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-3 mt-3">
                                        <img src="img/foto.png" alt="" width="40">
                                        <div class="flex flex-col text-xs">
                                            <p>Administrator</p>
                                            <p class="text-slate-400">IT Fullstack</p>
                                        </div>
                                    </div>
                                    <p class="mt-5 text-secondary">24 September 2024</p>
                                </div>
                            </div>
                            <img src="img/artikel-1.png" alt="" width="600" class="max-h-max">
                        </div>
                    </div>
                </a>
                <div class="article border w-full p-5 rounded-xl max-h-64">
                    <div class="flex gap-5">
                        <div class="flex flex-col">
                            <p class="font-bold text-2xl">Wawasan Penting tentang Produk Energi Terbarukan</p>
                            <div class="mt-4">
                                <p class="line-clamp-3 text-slate-400">Merujuk pada pemahaman tentang perkembangan, manfaat,
                                    tantangan, dan peluang dari berbagai sumber dan produk energi yang dapat diperbarui.
                                    Energi terbarukan memainkan peran vital dalam transisi dunia menuju sistem energi yang
                                    lebih bersih dan berkelanjutan, sekaligus mengurangi ketergantungan pada bahan bakar
                                    fosil.</p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-3 mt-3">
                                    <img src="img/foto.png" alt="" width="40">
                                    <div class="flex flex-col text-xs">
                                        <p>Administrator</p>
                                        <p class="text-slate-400">IT Fullstack</p>
                                    </div>
                                </div>
                                <p class="mt-5 text-secondary">20 September 2024</p>
                            </div>
                        </div>
                        <img src="img/artikel-2.png" alt="" width="400" class="max-h-max">
                    </div>
                </div>
                <div class="article border w-full p-5 rounded-xl max-h-56">
                    <div class="flex gap-5">
                        <div class="flex flex-col">
                            <p class="font-bold text-2xl">Solusi Masa Depan untuk Bumi yang Berkelanjutan</p>
                            <div class="mt-4">
                                <p class="line-clamp-3 text-slate-400">Proses mengubah limbah, terutama sampah organik,
                                    menjadi sumber
                                    energi yang bermanfaat, seperti listrik, panas, atau bahan bakar. Teknologi ini tidak
                                    hanya membantu mengurangi jumlah limbah yang berakhir di tempat pembuangan akhir (TPA),
                                    tetapi juga berkontribusi pada produksi energi terbarukan yang lebih bersih dan ramah
                                    lingkungan.</p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-3 mt-3">
                                    <img src="img/foto.png" alt="" width="40">
                                    <div class="flex flex-col text-xs">
                                        <p>Administrator</p>
                                        <p class="text-slate-400">IT Fullstack</p>
                                    </div>
                                </div>
                                <p class="mt-5 text-secondary">15 September 2024</p>
                            </div>
                        </div>
                        <img src="img/artikel-3.png" alt="" width="300" class="max-h-max">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-2/5">
            <div class="border w-full p-5 rounded-xl">
                <p>Populer Artikel</p>
                <div class="flex flex-col mt-5 font-bold gap-5">
                    <p>Pemanfaatan Limbah Sampah Menjadi Energi</p>
                    <p>Wawasan Penting tentang Produk Energi Terbarukan</p>
                    <p>Pemanfaatan Limbah Sampah Menjadi Energi</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        const searchInput = document.getElementById('searchInput');
        const articles = document.querySelectorAll('.article');

        function filterArticles() {
            const query = searchInput.value.toLowerCase().trim();

            articles.forEach(article => {
                const articleTitle = article.querySelector('p.font-bold').textContent.toLowerCase();
                const articleContent = article.querySelector('p.line-clamp-3').textContent.toLowerCase();

                if (articleTitle.includes(query) || articleContent.includes(query)) {
                    article.style.display = 'block';
                } else {
                    article.style.display = 'none';
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
            const articlesArray = Array.from(articles);

            articlesArray.sort((a, b) => {
                const dateA = new Date(a.querySelector('p.text-secondary').textContent);
                const dateB = new Date(b.querySelector('p.text-secondary').textContent);

                return order === 'Terlama' ? dateA - dateB : dateB - dateA;
            });

            articleList.innerHTML = '';
            articlesArray.forEach(article => {
                articleList.appendChild(article);
            });
        }

        sortSelect.addEventListener('change', function() {
            const selectedOption = this.value;
            sortArticles(selectedOption);
        });
    </script>

@endsection
