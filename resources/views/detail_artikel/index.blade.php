@extends('main')
@section('content')
    <div class="flex justify-center px-4">
        {{-- 
            Konten Artikel:
            - Lebar diatur agar nyaman dibaca di semua layar (w-full max-w-4xl).
        --}}
        <div class="p-5 rounded-xl w-full max-w-4xl">
            <div class="flex flex-col">
                {{-- Gambar dibuat responsif --}}
                <img src="img/detail-artikel-1.png" alt="Pemanfaatan Limbah Sampah Menjadi Energi"
                    class="w-full h-auto max-h-[500px] object-cover rounded-lg animate-on-scroll">
                
                {{-- Judul dibuat responsif --}}
                <p class="font-bold text-3xl md:text-4xl mt-5 animate-on-scroll delay-100">
                    Pemanfaatan Limbah Sampah Menjadi Energi
                </p>
                
                <div class="mt-5 animate-on-scroll delay-200">
                    <hr>
                </div>
                
                <div class="flex flex-wrap items-center gap-4 mt-4 justify-between mx-2 animate-on-scroll delay-200">
                    <div class="flex items-center text-slate-400 gap-4">
                        <span class="flex items-center gap-2"><i class="fa-solid fa-thumbs-up fa-lg"></i> 30</span>
                        <span class="flex items-center gap-2"><i class="fa-regular fa-comment fa-lg"></i> 1 Komentar</span>
                    </div>
                    <div class="flex items-center text-secondary">
                        24 September 2024
                    </div>
                </div>
                
                <div class="mt-5 animate-on-scroll delay-200">
                    <hr>
                </div>

                <div class="mt-5 space-y-5 animate-on-scroll delay-300">
                    <p>Proses mengubah limbah, terutama sampah organik, menjadi sumber energi yang bermanfaat, seperti
                        listrik, panas, atau bahan bakar. Teknologi ini tidak hanya membantu mengurangi jumlah limbah
                        yang berakhir di tempat pembuangan akhir (TPA), tetapi juga berkontribusi pada produksi energi
                        terbarukan yang lebih bersih dan ramah lingkungan.</p>

                    <p class="mt-5 font-bold text-xl">Metode Pemanfaatan Limbah Sampah Menjadi Energi</p>
                    <div class="flex gap-4 mt-2">
                        <p class="font-bold">1.</p>
                        <p><span class="font-semibold">Pembakaran (Incineration):</span> Proses ini melibatkan pembakaran sampah pada suhu tinggi untuk
                            menghasilkan panas, yang kemudian digunakan untuk menggerakkan turbin dan menghasilkan
                            listrik. Abu sisa pembakaran juga dapat digunakan sebagai bahan konstruksi. Meskipun efektif
                            dalam mengurangi volume sampah, proses ini memerlukan kontrol ketat terhadap emisi untuk
                            mengurangi dampak lingkungan.</p>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <p class="font-bold">2.</p>
                        <p><span class="font-semibold">Gasifikasi:</span> Limbah dipanaskan pada suhu tinggi dalam kondisi tanpa oksigen (atau sangat
                            sedikit) untuk menghasilkan gas sintetik (syngas). Syngas dapat digunakan untuk menghasilkan
                            listrik, bahan bakar, atau bahan kimia industri. Gasifikasi lebih ramah lingkungan
                            dibandingkan pembakaran karena menghasilkan emisi yang lebih rendah.</p>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <p class="font-bold">3.</p>
                        <p><span class="font-semibold">Biogas (Pencernaan Anaerob):</span> Limbah organik, seperti sisa makanan, kotoran hewan, atau
                            bahan organik lainnya, diurai oleh mikroorganisme dalam kondisi anaerob (tanpa oksigen) untuk
                            menghasilkan biogas. Biogas ini kaya akan metana (CH₄) dan dapat digunakan sebagai bahan
                            bakar untuk memasak, memanaskan, atau menghasilkan listrik. Selain itu, sisa prosesnya bisa
                            digunakan sebagai pupuk organik.</p>
                    </div>

                    <p class="mt-5 font-bold text-xl pt-4">Keuntungan Pemanfaatan Limbah Menjadi Energi</p>
                    <div class="flex gap-4 mt-2">
                        <p class="font-bold">1.</p>
                        <p><span class="font-semibold">Pengurangan Sampah di TPA:</span> Dengan mengubah sampah menjadi energi, volume limbah yang
                            berakhir di tempat pembuangan akhir dapat dikurangi secara signifikan. Ini membantu mengurangi
                            masalah lingkungan yang disebabkan oleh akumulasi sampah, seperti pencemaran tanah dan air
                            tanah.</p>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <p class="font-bold">2.</p>
                        <p><span class="font-semibold">Produksi Energi Terbarukan:</span> Limbah sebagai sumber energi terbarukan membantu mengurangi
                            ketergantungan pada bahan bakar fosil. Selain itu, energi yang dihasilkan dari sampah
                            seringkali lebih bersih dan berkelanjutan.</p>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <p class="font-bold">3.</p>
                        <p><span class="font-semibold">Pengurangan Emisi Gas Rumah Kaca:</span> Pemrosesan limbah organik menjadi biogas dapat
                            mencegah pelepasan metana yang lebih berbahaya ke atmosfer, yang biasanya terjadi jika limbah
                            dibiarkan membusuk di TPA. Dengan demikian, teknologi ini berkontribusi pada mitigasi
                            perubahan iklim.</p>
                    </div>

                    <p class="mt-5 font-bold text-xl pt-4">Contoh Pemanfaatan Limbah Menjadi Energi di Indonesia</p>
                    <p class="mt-2">Di Indonesia, ada beberapa inisiatif yang telah mulai mengembangkan teknologi
                        pemanfaatan limbah menjadi energi, seperti proyek Waste-to-Energy (WtE) di kota-kota besar. Salah
                        satu proyek terbesar adalah di Bantar Gebang, Bekasi, yang mengubah limbah padat kota Jakarta
                        menjadi listrik. Pembangkit listrik tenaga sampah ini membantu memasok listrik ke jaringan nasional
                        serta mengurangi akumulasi sampah di TPA.</p>
                    <p class="mt-2">Dengan meningkatnya volume sampah dan kebutuhan energi, pemanfaatan limbah menjadi
                        energi merupakan solusi yang inovatif dan berdampak positif untuk keberlanjutan lingkungan serta
                        ketahanan energi. Teknologi ini juga diharapkan dapat berkembang lebih lanjut di masa depan,
                        dengan peran penting dalam mengatasi tantangan lingkungan dan energi di Indonesia.</p>

                    <div class="flex mt-5 items-center gap-5 animate-on-scroll">
                        <img src="img/foto.png" alt="" width="60">
                        <input type="text" name="" id="" class="w-full p-3 border rounded-lg"
                            placeholder="Tulis Komentar">
                        <button class="bg-secondary p-3 rounded-xl text-white font-medium whitespace-nowrap">Tambah Komentar</button>
                    </div>

                    <div class="mt-5 animate-on-scroll">
                        <hr>
                    </div>

                    <div class="w-full rounded-xl mt-5 animate-on-scroll">
                        <div class="flex gap-5">
                            <img src="img/foto.png" alt="" width="60" class="max-h-max rounded-full">
                            <div class="flex flex-col">
                                <p class="font-semibold">Agung</p>
                                <div class="mt-2">
                                    <p>Artikel yang disajikan sangat membantu dan mengedukasi kita semua terkait
                                        pemanfaatan sampah menjadi energi</p>
                                </div>
                                <div class="flex items-center gap-5 mt-4">
                                    <div class="flex items-center text-slate-400 gap-2 cursor-pointer">
                                        <i class="fa-regular fa-comment fa-lg"></i>
                                        <p>5 Balasan</p>
                                    </div>
                                    <div class="flex items-center text-slate-400 gap-2 cursor-pointer">
                                        <i class="fa-solid fa-thumbs-up fa-lg"></i>
                                        <p>30</p>
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
                threshold: 0.1
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