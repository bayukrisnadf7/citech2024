@extends('main')

@section('content')
    <div class="flex items-center gap-28">
        <button onclick="showQuestionModal()" class="bg-secondary p-3 rounded-lg text-white w-56">Ajukan Pertanyaan</button>
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
    <div class="flex mt-10 gap-5">
        <div class="w-3/4">
            <div class="flex flex-col gap-5">
                <a href="/detail_forum">
                    <div class="border w-full p-5 rounded-xl forum-post" data-timestamp="1697654400000">
                        <div class="flex gap-5">
                            <img src="img/foto.png" alt="" width="60" class="max-h-max">
                            <div class="flex flex-col">
                                <div class="flex gap-5">
                                    <p>Agung</p>
                                    <p class="bg-slate-300 p-1 rounded-full max-h-max mt-2"></p>
                                    <p class="text-slate-300">Diposting 2 jam yang lalu</p>
                                </div>
                                <div class="mt-4">
                                    <p>Halo semua, saya tertarik untuk memasang panel surya di rumah saya sebagai alternatif
                                        sumber listrik.
                                        Apakah ada yang sudah punya pengalaman mengenai ini? Bagaimana efisiensinya untuk
                                        kebutuhan listrik
                                        sehari-hari, dan berapa lama pengembalian investasi dari biaya instalasi?</p>
                                </div>
                                <div class="flex items-center gap-5 mt-4">
                                    <div class="flex items-center text-slate-400 gap-2">
                                        <i class="fa-regular fa-comment fa-lg"></i>
                                        <p>5 Komentar</p>
                                    </div>
                                    <div class="flex items-center text-slate-400 gap-2">
                                        <i class="fa-solid fa-thumbs-up fa-lg"></i>
                                        <p>30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="border w-full p-5 rounded-xl forum-post" data-timestamp="1697654400000">
                    <div class="flex gap-5">
                        <img src="img/foto.png" alt="" width="60" class="max-h-max">
                        <div class="flex flex-col">
                            <div class="flex gap-5">
                                <p>Bayu Krisna</p>
                                <p class="bg-slate-300 p-1 rounded-full max-h-max mt-2"></p>
                                <p class="text-slate-300">Diposting 3 jam yang lalu</p>
                            </div>
                            <div class="mt-4">
                                <p>Saya tertarik untuk mengetahui lebih lanjut tentang pemanfaatan biomassa sebagai sumber
                                    energi terbarukan di pedesaan. Adakah di antara kalian yang memiliki pengalaman tentang
                                    bagaimana cara mengelola biomassa, seperti limbah pertanian atau kayu, untuk dijadikan
                                    sumber energi?</p>
                            </div>
                            <div class="flex items-center gap-5 mt-4">
                                <div class="flex items-center text-slate-400 gap-2">
                                    <i class="fa-regular fa-comment fa-lg"></i>
                                    <p>5 Komentar</p>
                                </div>
                                <div class="flex items-center text-slate-400 gap-2">
                                    <i class="fa-solid fa-thumbs-up fa-lg"></i>
                                    <p>30</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border w-full p-5 rounded-xl forum-post" data-timestamp="1697654400000">
                    <div class="flex gap-5">
                        <img src="img/foto.png" alt="" width="60" class="max-h-max">
                        <div class="flex flex-col">
                            <div class="flex gap-5">
                                <p>Hairul Anam</p>
                                <p class="bg-slate-300 p-1 rounded-full max-h-max mt-2"></p>
                                <p class="text-slate-300">Diposting 2 jam yang lalu</p>
                            </div>
                            <div class="mt-4">
                                <p>Halo semua, saya tertarik untuk memasang panel surya di rumah saya sebagai alternatif
                                    sumber listrik.
                                    Apakah ada yang sudah punya pengalaman mengenai ini? Bagaimana efisiensinya untuk
                                    kebutuhan listrik
                                    sehari-hari, dan berapa lama pengembalian investasi dari biaya instalasi?</p>
                            </div>
                            <div class="flex items-center gap-5 mt-4">
                                <div class="flex items-center text-slate-400 gap-2">
                                    <i class="fa-regular fa-comment fa-lg"></i>
                                    <p>5 Komentar</p>
                                </div>
                                <div class="flex items-center text-slate-400 gap-2">
                                    <i class="fa-solid fa-thumbs-up fa-lg"></i>
                                    <p>30</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border w-full p-5 rounded-xl forum-post" data-timestamp="1697654400000">
                    <div class="flex gap-5">
                        <img src="img/foto.png" alt="" width="60" class="max-h-max">
                        <div class="flex flex-col">
                            <div class="flex gap-5">
                                <p>Agung</p>
                                <p class="bg-slate-300 p-1 rounded-full max-h-max mt-2"></p>
                                <p class="text-slate-300">Diposting 2 jam yang lalu</p>
                            </div>
                            <div class="mt-4">
                                <p>Saya sedang membaca tentang perkembangan teknologi hidrogen sebagai sumber energi dan
                                    sangat tertarik dengan potensinya sebagai pengganti bahan bakar fosil. Namun, saya belum
                                    terlalu paham bagaimana proses produksi dan penyimpanannya bekerja, terutama dalam
                                    konteks energi terbarukan.

                                    Apakah hidrogen bisa menjadi solusi jangka panjang untuk menyimpan energi terbarukan
                                    seperti dari angin atau matahari? Bagaimana efisiensinya dibandingkan dengan baterai?
                                    Apakah sudah ada negara yang menggunakan teknologi ini secara luas?</p>
                            </div>
                            <div class="flex items-center gap-5 mt-4">
                                <div class="flex items-center text-slate-400 gap-2">
                                    <i class="fa-regular fa-comment fa-lg"></i>
                                    <p>5 Komentar</p>
                                </div>
                                <div class="flex items-center text-slate-400 gap-2">
                                    <i class="fa-solid fa-thumbs-up fa-lg"></i>
                                    <p>30</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-2/5">
            <div class="border w-full p-5 rounded-xl">
                <p>Tag</p>
                <div class="grid grid-cols-3 gap-5 mt-3">
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">biomassa</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">gogreen</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">infoterkini</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">renewables</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">cleanenergy</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">solarpower</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">windenergy</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">fossilfree</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">sustainable</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Structure -->
    <div id="questionModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-5 rounded-lg shadow-lg w-2/5">
            <h2 class="text-lg font-semibold mb-4">Ajukan Pertanyaan</h2>
            <div class="flex items-center mb-4">
                <img src="img/foto.png" alt="User" class="w-12 h-12 rounded-full mr-4">
                <textarea id="questionInput" placeholder="Tulis pertanyaan Anda di sini..."
                    class="border p-3 rounded-lg w-full h-32"></textarea>
            </div>
            <div class="mb-4">
                <label for="imageInput" class="block mb-2 text-sm font-medium text-gray-700">Unggah Gambar:</label>
                <input type="file" id="imageInput" accept="image/*" class="border p-2 w-full" />
            </div>
            <div class="flex justify-end">
                <button id="submitQuestion" class="bg-primary p-2 rounded-lg text-white">Kirim</button>
                <button id="closeModal" class="bg-gray-300 p-2 rounded-lg ml-2">Tutup</button>
            </div>
        </div>
    </div>

    <script>
        // Ambil elemen modal dan tombol
        const questionModal = document.getElementById('questionModal');
        const ajukanPertanyaanButton = document.querySelector('.bg-secondary');
        const closeModalButton = document.getElementById('closeModal');
        const submitQuestionButton = document.getElementById('submitQuestion');

        // Event listener untuk tombol "Ajukan Pertanyaan"
        ajukanPertanyaanButton.addEventListener('click', function() {
            questionModal.classList.remove('hidden'); // Tampilkan modal
        });

        // Event listener untuk tombol "Tutup" di modal
        closeModalButton.addEventListener('click', function() {
            questionModal.classList.add('hidden'); // Sembunyikan modal
        });

        // Event listener untuk tombol "Kirim" di modal
        submitQuestionButton.addEventListener('click', function() {
            const questionText = document.getElementById('questionInput').value;
            // Proses pertanyaan (misalnya, kirim ke server atau simpan di local storage)
            alert('Pertanyaan Anda: ' + questionText); // Ganti dengan logika yang sesuai
            questionModal.classList.add('hidden'); // Sembunyikan modal setelah mengirim
            document.getElementById('questionInput').value = ''; // Kosongkan input
        });
    </script>
    <script>
        // Fungsi untuk mencari forum berdasarkan kata kunci
        function inputSearch() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const forumPosts = document.querySelectorAll('.forum-post'); // Hanya pilih elemen forum dengan class "forum-post"
    
            // Looping setiap forum post dan cek apakah teks sesuai dengan pencarian
            forumPosts.forEach(post => {
                const postText = post.innerText.toLowerCase();
                if (postText.includes(searchInput)) {
                    post.style.display = 'block'; // Tampilkan jika cocok
                } else {
                    post.style.display = 'none'; // Sembunyikan jika tidak cocok
                }
            });
        }
    
        // Tambahkan event listener ke input pencarian
        document.getElementById('searchInput').addEventListener('input', inputSearch);
    
        // Event listener untuk klik tag
        const tags = document.querySelectorAll('.tag');
        tags.forEach(tag => {
            tag.addEventListener('click', function() {
                const tagText = this.innerText; // Dapatkan teks dari tag yang diklik
                document.getElementById('searchInput').value = tagText; // Masukkan teks tag ke dalam input pencarian
                inputSearch(); // Lakukan pencarian otomatis berdasarkan tag
            });
        });
    </script>
    
    
    
    
@endsection
