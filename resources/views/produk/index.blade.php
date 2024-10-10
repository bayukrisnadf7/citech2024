@extends('main')
@section('content')
    <div class="flex gap-8 mt-5">
        <div class="w-1/5 border rounded-lg p-5 max-h-max">
            <p class="text-2xl">Filtering</p>
            <p class="font-bold mt-8">Tipe Produk</p>
            <img src="img/Vector 6.png" alt="">
            <div class="mt-3 flex flex-col">
                <div>
                    <input id="semua" type="radio">
                    <label for="semua">Semua</label>
                </div>
                <div>
                    <input id="semua" type="radio">
                    <label for="semua">Produk Jadi</label>
                </div>
                <div>
                    <input id="semua" type="radio">
                    <label for="semua">Produk Mentah</label>
                </div>
            </div>
            <p class="font-bold mt-8">Kondisi Produk</p>
            <img src="img/Vector 6.png" alt="">
            <div class="mt-3 flex flex-col">
                <div>
                    <input id="semua" type="radio">
                    <label for="semua">Kondisi Baru</label>
                </div>
                <div>
                    <input id="semua" type="radio">
                    <label for="semua">Kondisi Second</label>
                </div>
            </div>
            <p class="font-bold mt-8">Kategori Produk</p>
            <img src="img/Vector 6.png" alt="">
            <div class="mt-3 flex flex-col">
                <div>
                    <input id="semua" type="radio">
                    <label for="semua">Terlaris</label>
                </div>
                <div>
                    <input id="semua" type="radio">
                    <label for="semua">Rating Tertinggi</label>
                </div>
            </div>
            <p class="font-bold mt-8">Harga Produk</p>
            <img src="img/Vector 6.png" alt="">
            <div class="mt-3 flex flex-col">
                <div>
                    <input id="semua" type="radio">
                    <label for="semua">Termurah</label>
                </div>
                <div>
                    <input id="semua" type="radio">
                    <label for="semua">Termahal</label>
                </div>
            </div>
        </div>
        <div class="w-4/5">
            <div class="flex w-full gap-5">
                <div class="relative w-full">
                    <i class="fa-solid fa-magnifying-glass absolute top-4 left-3 text-slate-300"></i>
                    <input type="text" placeholder="Cari Nama Barang" class="border p-3 px-10 w-full rounded-lg">
                </div>
                <div class="flex gap-3 items-center">
                    <p>URUTKAN:</p>
                    <p class="border p-2 rounded-xl">Terbaru</p>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-10">
                <div class="mt-5">
                    <a href="/detail_produk">
                        <div class="bg-slate-50 shadow p-3 max-w-56 rounded-3xl">
                            <img src="img/produk.png" alt="">
                            <p class="line-clamp-2 mt-3">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
                            <p class="font-bold text-xl">Rp. 220.000,00</p>
                            <div class="flex text-xs gap-3 mt-2 items-center">
                                <p class="bg-tertiary p-1 w-24 text-center font-bold rounded-full">Produk Jadi</p>
                                <p>Stok: 12 Produk</p>
                            </div>
                            <div class="flex items-center gap-2 mt-2 text-xs">
                                <div class="flex justify-center items-center gap-1">
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <p>4.9</p>
                                </div>
                                <div class="flex justify-center items-center gap-1">
                                    <p>|</p>
                                    <p>100+ Terjual</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-5">
                    <div class="bg-slate-50 shadow p-3 max-w-56 rounded-3xl">
                        <img src="img/produk.png" alt="">
                        <p class="line-clamp-2 mt-3">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
                        <p class="font-bold text-xl">Rp. 220.000,00</p>
                        <div class="flex text-xs gap-3 mt-2 items-center">
                            <p class="bg-tertiary p-1 w-24 text-center font-bold rounded-full">Produk Jadi</p>
                            <p>Stok: 12 Produk</p>
                        </div>
                        <div class="flex items-center gap-2 mt-2 text-xs">
                            <div class="flex justify-center items-center gap-1">
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <p>4.9</p>
                            </div>
                            <div class="flex justify-center items-center gap-1">
                                <p>|</p>
                                <p>100+ Terjual</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="bg-slate-50 shadow p-3 max-w-56 rounded-3xl">
                        <img src="img/produk.png" alt="">
                        <p class="line-clamp-2 mt-3">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
                        <p class="font-bold text-xl">Rp. 220.000,00</p>
                        <div class="flex text-xs gap-3 mt-2 items-center">
                            <p class="bg-tertiary p-1 w-24 text-center font-bold rounded-full">Produk Jadi</p>
                            <p>Stok: 12 Produk</p>
                        </div>
                        <div class="flex items-center gap-2 mt-2 text-xs">
                            <div class="flex justify-center items-center gap-1">
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <p>4.9</p>
                            </div>
                            <div class="flex justify-center items-center gap-1">
                                <p>|</p>
                                <p>100+ Terjual</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="bg-slate-50 shadow p-3 max-w-56 rounded-3xl">
                        <img src="img/produk.png" alt="">
                        <p class="line-clamp-2 mt-3">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
                        <p class="font-bold text-xl">Rp. 220.000,00</p>
                        <div class="flex text-xs gap-3 mt-2 items-center">
                            <p class="bg-tertiary p-1 w-24 text-center font-bold rounded-full">Produk Jadi</p>
                            <p>Stok: 12 Produk</p>
                        </div>
                        <div class="flex items-center gap-2 mt-2 text-xs">
                            <div class="flex justify-center items-center gap-1">
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <p>4.9</p>
                            </div>
                            <div class="flex justify-center items-center gap-1">
                                <p>|</p>
                                <p>100+ Terjual</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="bg-slate-50 shadow p-3 max-w-56 rounded-3xl">
                    <img src="img/produk.png" alt="">
                    <p class="line-clamp-2 mt-3">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
                    <p class="font-bold text-xl">Rp. 220.000,00</p>
                    <div class="flex text-xs gap-3 mt-2 items-center">
                        <p class="bg-tertiary p-1 w-24 text-center font-bold rounded-full">Produk Jadi</p>
                        <p>Stok: 12 Produk</p>
                    </div>
                    <div class="flex items-center gap-2 mt-2 text-xs">
                        <div class="flex justify-center items-center gap-1">
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <p>4.9</p>
                        </div>
                        <div class="flex justify-center items-center gap-1">
                            <p>|</p>
                            <p>100+ Terjual</p>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-50 shadow p-3 max-w-56 rounded-3xl">
                    <img src="img/produk.png" alt="">
                    <p class="line-clamp-2 mt-3">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
                    <p class="font-bold text-xl">Rp. 220.000,00</p>
                    <div class="flex text-xs gap-3 mt-2 items-center">
                        <p class="bg-tertiary p-1 w-24 text-center font-bold rounded-full">Produk Jadi</p>
                        <p>Stok: 12 Produk</p>
                    </div>
                    <div class="flex items-center gap-2 mt-2 text-xs">
                        <div class="flex justify-center items-center gap-1">
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <p>4.9</p>
                        </div>
                        <div class="flex justify-center items-center gap-1">
                            <p>|</p>
                            <p>100+ Terjual</p>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-50 shadow p-3 max-w-56 rounded-3xl">
                    <img src="img/produk.png" alt="">
                    <p class="line-clamp-2 mt-3">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
                    <p class="font-bold text-xl">Rp. 220.000,00</p>
                    <div class="flex text-xs gap-3 mt-2 items-center">
                        <p class="bg-tertiary p-1 w-24 text-center font-bold rounded-full">Produk Jadi</p>
                        <p>Stok: 12 Produk</p>
                    </div>
                    <div class="flex items-center gap-2 mt-2 text-xs">
                        <div class="flex justify-center items-center gap-1">
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <p>4.9</p>
                        </div>
                        <div class="flex justify-center items-center gap-1">
                            <p>|</p>
                            <p>100+ Terjual</p>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-50 shadow p-3 max-w-56 rounded-3xl">
                    <img src="img/produk.png" alt="">
                    <p class="line-clamp-2 mt-3">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
                    <p class="font-bold text-xl">Rp. 220.000,00</p>
                    <div class="flex text-xs gap-3 mt-2 items-center">
                        <p class="bg-tertiary p-1 w-24 text-center font-bold rounded-full">Produk Jadi</p>
                        <p>Stok: 12 Produk</p>
                    </div>
                    <div class="flex items-center gap-2 mt-2 text-xs">
                        <div class="flex justify-center items-center gap-1">
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <p>4.9</p>
                        </div>
                        <div class="flex justify-center items-center gap-1">
                            <p>|</p>
                            <p>100+ Terjual</p>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
    </div>
@endsection
