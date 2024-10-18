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
                    <div class="border w-full p-5 rounded-xl">
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
                <div class="border w-full p-5 rounded-xl">
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
                <div class="border w-full p-5 rounded-xl">
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
                <div class="border w-full p-5 rounded-xl">
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
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">#panelsurya</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">#gogreen</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">#infoterkini</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">#renewables</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">#cleanenergy</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">#solarpower</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">#windenergy</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">#fossilfree</p>
                    <p class="bg-slate-300 p-1 rounded-full cursor-pointer text-center tag">#sustainable</p>
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
        // Ambil semua elemen dengan kelas 'tag'
        const tags = document.querySelectorAll('.tag');
        const searchInput = document.getElementById('searchInput');

        // Tambahkan event listener untuk setiap tag
        tags.forEach(tag => {
            tag.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent event bubbling
                // Ambil teks tag yang diklik
                const tagText = this.textContent.trim();
                // Masukkan teks tag ke dalam input pencarian
                searchInput.value = tagText;
                filterForumPosts(); // Jalankan pencarian saat tag diklik
            });
        });

        // Ambil elemen input pencarian dan daftar forum
        const forumPosts = document.querySelectorAll('.border'); // Select all forum posts

        // Fungsi untuk menjalankan pencarian
        function filterForumPosts() {
            const query = searchInput.value.toLowerCase().trim();

            // Loop melalui setiap forum post dan cek apakah sesuai dengan pencarian
            forumPosts.forEach(post => {
                const postContent = post.querySelector('div.mt-4 p').textContent
                    .toLowerCase(); // Get the content of each post
                const postAuthor = post.querySelector('div.flex > p:first-child').textContent
                    .toLowerCase(); // Get the author name

                // Cek apakah query ada di dalam konten atau nama penulis
                if (postContent.includes(query) || postAuthor.includes(query)) {
                    post.style.display = 'block'; // Tampilkan post jika cocok
                } else {
                    post.style.display = 'none'; // Sembunyikan post jika tidak cocok
                }
            });
        }

        // Event listener untuk input pencarian (real-time)
        searchInput.addEventListener('input', filterForumPosts);

        // Tambahkan event listener untuk mendeteksi tombol "Enter"
        searchInput.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Mencegah form submit jika ada
                filterForumPosts(); // Jalankan pencarian
            }
        });

        // Menambahkan event listener untuk tag klik
        tags.forEach(tag => {
            tag.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent event bubbling
                const tagText = this.textContent.trim();
                searchInput.value = tagText; // Set the search input to the clicked tag
                filterForumPosts(); // Run search based on the tag
            });
        });
    </script>
    {{-- <script>
        // Ambil elemen select untuk sorting
        const sortOptions = document.getElementById('sortOptions');

        // Tambahkan event listener untuk mendeteksi perubahan opsi sortir
        sortOptions.addEventListener('change', function() {
            const selectedOption = this.value;
            sortForumPosts(selectedOption);
        });
        // Fungsi untuk menyortir forum posts
        // Fungsi untuk menyortir forum posts
        function sortForumPosts(order) {
            const forumPostsArray = Array.from(forumPosts); // Ambil semua forum post sebagai array

            // Urutkan berdasarkan waktu posting (dalam menit)
            forumPostsArray.sort((a, b) => {
                const timeA = extractPostTime(a);
                const timeB = extractPostTime(b);

                return order === 'terbaru' ? timeB - timeA : timeA - timeB; // Urutkan berdasarkan pilihan
            });

            // Re-attach posts yang sudah di-sort ke dalam DOM
            const parentContainer = document.querySelector('.flex.flex-col.gap-5');
            parentContainer.innerHTML = ''; // Kosongkan kontainer sebelum menambahkan elemen
            forumPostsArray.forEach(post => parentContainer.appendChild(post));
        }

        // Fungsi untuk mengekstrak waktu dari elemen forum post
        function extractPostTime(postElement) {
            const timeTextElement = postElement.querySelector('.text-slate-300');
            if (!timeTextElement) {
                console.error("Time text element not found in post element:", postElement);
                return 0; // Atau nilai default
            }
            const timeText = timeTextElement.textContent.trim();
            let timeValue = 0;

            // Ekstraksi waktu dari teks
            const hourMatch = timeText.match(/(\d+)\s*jam/);
            const minuteMatch = timeText.match(/(\d+)\s*menit/);
            const secondMatch = timeText.match(/(\d+)\s*detik/);

            if (hourMatch) {
                timeValue += parseInt(hourMatch[1]) * 60; // Jam to menit
            }
            if (minuteMatch) {
                timeValue += parseInt(minuteMatch[1]); // Menit
            }
            if (secondMatch) {
                timeValue += parseInt(secondMatch[1]) / 60; // Detik to menit
            }

            return timeValue;
        }
    </script> --}}
@endsection
