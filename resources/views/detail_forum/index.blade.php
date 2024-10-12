@extends('main')
@section('content')
<div class="flex justify-center">
    <div class="p-5 rounded-xl w-3/4">
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
                <img src="img/forum.png" alt="" class="mt-5">
                <div class="mt-5">
                    <hr>
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
                <div class="mt-5">
                    <hr>
                </div>
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
            </div>
        </div>
    </div>
</div>
@endsection