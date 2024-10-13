@extends('main')
@section('content')
    <div class="flex gap-8">
        <div class="w-1/5 border rounded-lg p-5 max-h-max">
            <p class="text-2xl">Filtering</p>
            <p class="font-bold mt-8">Tipe Produk</p>
            <img src="img/Vector 6.png" alt="">
            <div class="mt-3 flex flex-col">
                <div>
                    <input id="semua" type="radio" checked>
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
                <div class="flex justify-between items-center mb-6 gap-5 w-full">
                    <div class="relative w-full">
                        <i class="fa-solid fa-magnifying-glass absolute top-4 left-3 text-slate-300"></i>
                        <input type="text" placeholder="Cari Nama Barang" class="border p-3 px-10 w-full rounded-lg">
                    </div>
                    <select class="border rounded-md p-3">
                        <option>Terbaru</option>
                        <option>Harga Terendah</option>
                        <option>Harga Tertinggi</option>
                    </select>
                    <i class="ph-magnifying-glass"></i>
                </div>
            </div>
            <div class="grid lg:grid-cols-4 sm:grid-cols-3 grid-cols-2  gap-8">
                <div class="">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                        <a href="/detail_produk">
                            <img src="img/produk-1.png" alt="" width="400">
                            <p class="line-clamp-2 mt-3">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
                            <p class="font-bold text-xl mt-2">Rp. 220.000,00</p>
                            <div class="flex text-xs gap-3 mt-2 items-center">
                                <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Jadi</p>
                                <p class="text-slate-500">Stok: 12 Produk</p>
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
                        </a>
                        <div class="flex justify-between">
                            <p></p>
                            <i class="fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full"></i>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                        <a href="/detail_produk">
                            <img src="img/produk-2.png" alt="" width="400">
                            <p class="line-clamp-2 mt-3">Pembangkit Listrik Tenaga Surya 20W</p>
                            <p class="font-bold text-xl mt-2">Rp. 1.259.000,00</p>
                            <div class="flex text-xs gap-3 mt-2 items-center">
                                <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Jadi</p>
                                <p class="text-slate-500">Stok: 10 Produk</p>
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
                            <div class="flex justify-between">
                                <p></p>
                                <i class="fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                        <a href="/detail_produk">
                            <img src="img/produk-3.png" alt="" width="400">
                            <p class="line-clamp-2 mt-3">Electric Hoist 600 Kg - Katrol Elektrik Takel Listrik PA600 Wire
                                Reel
                            </p>
                            <p class="font-bold text-xl mt-2">Rp. 1.388.888,00</p>
                            <div class="flex text-xs gap-3 mt-2 items-center">
                                <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Jadi</p>
                                <p class="text-slate-500">Stok: 15 Produk</p>
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
                        </a>
                        <div class="flex justify-between">
                            <p></p>
                            <i class="fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full"></i>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                        <a href="/detail_produk">
                            <img src="img/produk-4.png" alt="" width="400">
                            <p class="line-clamp-2 mt-3">Genset Inverter 10 KVA 8 KW Tsuzumi TG10000SSI</p>
                            <p class="font-bold text-xl mt-2">Rp. 11.500.000,00</p>
                            <div class="flex text-xs gap-3 mt-2 items-center">
                                <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Jadi</p>
                                <p class="text-slate-500">Stok: 20 Produk</p>
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
                            <div class="flex justify-between">
                                <p></p>
                                <i class="fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                    <a href="/detail_produk">
                        <img src="img/produk-5.png" alt="" width="400" class="rounded-2xl">
                        <p class="line-clamp-2 mt-3">Krissil Acetoxy Silicone Sealant Lem Kaca</p>
                        <p class="font-bold text-xl mt-2">Rp. 15.500,00</p>
                        <div class="flex text-xs gap-3 mt-2 items-center">
                            <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Mentah</p>
                            <p class="text-slate-500">Stok: 20 Produk</p>
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
                        <div class="flex justify-between">
                            <p></p>
                            <i class="fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full"></i>
                        </div>
                    </a>
                </div>
                <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                    <a href="/detail_produk">
                        <img src="img/produk-6.png" alt="" width="400">
                        <p class="line-clamp-2 mt-3">12v 100ah Lifepo4 Baterai Lithium BMS Battery Rechargeable Garansi 10 Tahun Cst energy Brand</p>
                        <p class="font-bold text-xl mt-2">Rp. 450.000,00</p>
                        <div class="flex text-xs gap-3 mt-2 items-center">
                            <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Mentah</p>
                            <p class="text-slate-500">Stok: 20 Produk</p>
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
                        <div class="flex justify-between">
                            <p></p>
                            <i class="fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full"></i>
                        </div>
                    </a>
                </div>
                <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                    <a href="/detail_produk">
                        <img src="img/produk-7.png" alt="">
                        <p class="line-clamp-2 mt-3">Zamdon Solar Inverter Frekuensi Rendah Off grid hybrid dengan WiFi Monitor 3.75KVA 3KW 48V LFT 30248 Wifi</p>
                        <p class="font-bold text-xl mt-2">Rp. 6.054.000,00</p>
                        <div class="flex text-xs gap-3 mt-2 items-center">
                            <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Jadi</p>
                            <p class="text-slate-500">Stok: 20 Produk</p>
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
                        <div class="flex justify-between">
                            <p></p>
                            <i class="fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full"></i>
                        </div>
                    </a>
                </div>
                <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                    <a href="/detail_produk">
                        <img src="img/produk-8.png" alt="" width="400">
                        <p class="line-clamp-2 mt-3">Susan Inverter 12V 9999000W Konverter Booster Tabung Besar 14 Tabung Daya Tinggi Konverter Tegangan Tinggi Pintar Hemat Daya</p>
                        <p class="font-bold text-xl mt-2">Rp. 269.000,00</p>
                        <div class="flex text-xs gap-3 mt-2 items-center">
                            <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Jadi</p>
                            <p class="text-slate-500">Stok: 20 Produk</p>
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
                        <div class="flex justify-between">
                            <p></p>
                            <i class="fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full"></i>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
