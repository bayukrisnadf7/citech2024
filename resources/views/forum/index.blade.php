@extends('main')

@section('content')
    <div class="flex items-center gap-28">
        <button class="bg-secondary p-3 rounded-lg text-white w-56">Ajukan Pertanyaan</button>
        <div class="flex w-full gap-3">
            <div class="relative w-full">
                <i class="fa-solid fa-magnifying-glass absolute top-4 left-3 text-slate-300"></i>
                <input type="text" placeholder="Cari Nama Barang" class="border p-3 px-10 w-full rounded-lg">
            </div>
            <div class="flex gap-3 items-center">
                <p>URUTKAN:</p>
                <p class="border p-2 rounded-xl">Terbaru</p>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <hr>
    </div>
    <div class="flex mt-10 gap-5">
        <div class="w-3/4">
            <div class="flex flex-col gap-5">
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
            </div>
        </div>
        <div class="w-2/5">
            <div class="border w-full p-5 rounded-xl">
                <p>Tag</p>
                <div class="grid grid-cols-3 gap-5 mt-3">
                    <p class="bg-slate-300 p-1 rounded-full text-center">#panelsurya</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#gogreen</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#infoterkini</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#renewables</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#cleanenergy</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#solarpower</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#windenergy</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#fossilfree</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#sustainable</p>
                </div>
            </div>
        </div>
    </div>
@endsection
