@extends('main')
@section('content')
    <div class="flex justify-center">
        <div class="p-5 rounded-xl w-3/4">
            <div class="flex gap-5">
                <div class="flex flex-col">
                    {{-- <div class="mt-4">
                    <p>Halo semua, saya tertarik untuk memasang panel surya di rumah saya sebagai alternatif
                        sumber listrik.
                        Apakah ada yang sudah punya pengalaman mengenai ini? Bagaimana efisiensinya untuk
                        kebutuhan listrik
                        sehari-hari, dan berapa lama pengembalian investasi dari biaya instalasi?</p>
                </div> --}}
                    <img src="img/detail-artikel-1.png" alt="">
                    <p class="font-bold text-4xl mt-5">
                        Pemanfaatan Limbah Sampah Menjadi Energi
                    </p>
                    <div class="mt-5">
                        <hr>
                    </div>
                    <div class="flex items-center gap-5 mt-4 justify-between mx-2">
                        <div class="flex items-center text-slate-400 gap-2">
                            <i class="fa-solid fa-thumbs-up fa-lg"></i>
                            <p>30</p>
                            <i class="fa-regular fa-comment fa-lg"></i>
                            <p>1 Komentar</p>
                        </div>
                        <div class="flex items-center text-secondary">
                            24 September 2024
                        </div>
                    </div>
                    <div class="mt-5">
                        <hr>
                    </div>
                    <div class="mt-5">
                        <p>Proses mengubah limbah, terutama sampah organik, menjadi sumber energi yang bermanfaat, seperti
                            listrik, panas, atau bahan bakar. Teknologi ini tidak hanya membantu mengurangi jumlah limbah
                            yang berakhir di tempat pembuangan akhir (TPA), tetapi juga berkontribusi pada produksi energi
                            terbarukan yang lebih bersih dan ramah lingkungan.</p>

                        <p class="mt-5 font-bold text-1xl">Metode Pemanfaatan Limbah Sampah Menjadi Energi</p>
                        <div class="flex gap-5 mt-2">
                            <p>
                                1.
                            </p>
                            <p>Pembakaran (Incineration) Proses ini melibatkan pembakaran sampah pada suhu tinggi untuk
                                menghasilkan panas, yang kemudian digunakan untuk menggerakkan turbin dan menghasilkan
                                listrik.
                                Abu sisa pembakaran juga dapat digunakan sebagai bahan konstruksi. Meskipun efektif dalam
                                mengurangi volume sampah, proses ini memerlukan kontrol ketat terhadap emisi untuk
                                mengurangi
                                dampak lingkungan.</p>
                        </div>
                        <div class="flex gap-4 mt-2">
                            <p>
                                2.
                            </p>
                            <p>Gasifikasi Limbah dipanaskan pada suhu tinggi dalam kondisi tanpa oksigen (atau sangat
                                sedikit) untuk menghasilkan gas sintetik (syngas). Syngas dapat digunakan untuk menghasilkan
                                listrik, bahan bakar, atau bahan kimia industri. Gasifikasi lebih ramah lingkungan
                                dibandingkan pembakaran karena menghasilkan emisi yang lebih rendah.</p>
                        </div>
                        <div class="flex gap-4 mt-2">
                            <p>
                                3.
                            </p>
                            <p>Biogas (Pencernaan Anaerob) Limbah organik, seperti sisa makanan, kotoran hewan, atau bahan
                                organik lainnya, diurai oleh mikroorganisme dalam kondisi anaerob (tanpa oksigen) untuk
                                menghasilkan biogas. Biogas ini kaya akan metana (CH₄) dan dapat digunakan sebagai bahan
                                bakar untuk memasak, memanaskan, atau menghasilkan listrik. Selain itu, sisa prosesnya bisa
                                digunakan sebagai pupuk organik.</p>
                        </div>
                    </div>
                    <p class="mt-5 font-bold text-1xl">Keuntungan Pemanfaatan Limbah Menjadi Energi</p>
                    <div class="flex gap-5 mt-2">
                        <p>
                            1.
                        </p>
                        <p>Pengurangan Sampah di TPA Dengan mengubah sampah menjadi energi, volume limbah yang berakhir di
                            tempat pembuangan akhir dapat dikurangi secara signifikan. Ini membantu mengurangi masalah
                            lingkungan yang disebabkan oleh akumulasi sampah, seperti pencemaran tanah dan air tanah.</p>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <p>
                            2.
                        </p>
                        <p>Produksi Energi Terbarukan Limbah sebagai sumber energi terbarukan membantu mengurangi
                            ketergantungan pada bahan bakar fosil. Selain itu, energi yang dihasilkan dari sampah seringkali
                            lebih bersih dan berkelanjutan.</p>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <p>
                            3.
                        </p>
                        <p>Pengurangan Emisi Gas Rumah Kaca Pemrosesan limbah organik menjadi biogas dapat mencegah
                            pelepasan metana yang lebih berbahaya ke atmosfer, yang biasanya terjadi jika limbah dibiarkan
                            membusuk di TPA. Dengan demikian, teknologi ini berkontribusi pada mitigasi perubahan iklim.</p>
                    </div>
                    <p class="mt-5 font-bold text-1xl">Contoh Pemanfaatan Limbah Menjadi Energi di Indonesia</p>
                    <p class="mt-2">Di Indonesia, ada beberapa inisiatif yang telah mulai mengembangkan teknologi
                        pemanfaatan limbah
                        menjadi energi, seperti proyek Waste-to-Energy (WtE) di kota-kota besar. Salah satu proyek terbesar
                        adalah di Bantar Gebang, Bekasi, yang mengubah limbah padat kota Jakarta menjadi listrik. Pembangkit
                        listrik tenaga sampah ini membantu memasok listrik ke jaringan nasional serta mengurangi akumulasi
                        sampah di TPA.</p>
                    <p class="mt-2">Dengan meningkatnya volume sampah dan kebutuhan energi, pemanfaatan limbah menjadi
                        energi merupakan
                        solusi yang inovatif dan berdampak positif untuk keberlanjutan lingkungan serta ketahanan energi.
                        Teknologi ini juga diharapkan dapat berkembang lebih lanjut di masa depan, dengan peran penting
                        dalam mengatasi tantangan lingkungan dan energi di Indonesia.</p>
                    <div class="flex mt-5 items-center gap-5">
                        <img src="img/foto.png" alt="" width="60">
                        <input type="text" name="" id="" class="w-full p-3 border-none" placeholder="Tulis Komentar">
                        <button class="bg-secondary p-2 rounded-xl text-white text-lg">Tambah</button>
                    </div>
                    <div class="mt-5">
                        <hr>
                    </div>
                    <div class="w-full rounded-xl mt-5">
                        <div class="flex gap-5">
                            <img src="img/foto.png" alt="" width="60" class="max-h-max">
                            <div class="flex flex-col">
                                <div class="flex gap-5">
                                    <p>Agung</p>
                                </div>
                                <div class="mt-2">
                                    <p>Artikel yang disajikan sangat membantu dan mengedukasi kita semua terkait pemanfaatan sampah menjadi energi</p>
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
        </div>
    </div>
@endsection
