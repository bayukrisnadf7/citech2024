@extends('main')
@section('content')
    <div class="flex gap-14 mt-5">
        <div class="flex flex-col gap-2">
            <img src="img/produk.png" alt="" class="w-24 rounded-xl">
            <img src="img/produk.png" alt="" class="w-24 rounded-xl">
            <img src="img/produk.png" alt="" class="w-24 rounded-xl">
            <img src="img/produk.png" alt="" class="w-24 rounded-xl">
        </div>
        <div>
            <img src="img/produk.png" alt="" width="620">
        </div>
        <div>
            <p class="text-3xl">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
            <div class="flex mt-5 gap-3">
                <div class="flex items-center">
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <p class="ml-2 text-slate-400">5.0</p>
                </div>
                <div class="flex items-center gap-2 text-slate-400">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p>1282 Terjual</p>
                </div>
            </div>
            <div class="flex items-center mt-5 gap-3">
                <div class="flex items-center gap-2">
                    <div class="flex gap-3 text-slate-400 items-center">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <p class="text-xl">Stok:</p>
                    </div>
                    <p class="font-bold">4350</p>
                </div>
                <div>
                    <p class="bg-tertiary p-1 w-36 text-center font-bold rounded-full">Produk Jadi</p>
                </div>
            </div>
            <div class="mt-5 bg-slate-200 max-w-max p-5 rounded-3xl">
                <p class="text-2xl">Checkout | Jumlah Pembelian</p>
                <div class="flex gap-5 items-center mt-5">
                    <div class="flex items-center gap-3 bg-white p-1 rounded-xl">
                        <p class="bg-primary p-1 rounded-xl w-12 text-center text-white">Sub</p>
                        <p>1</p>
                        <p class="bg-primary p-1 rounded-xl w-12 text-center text-white">Add</p>
                    </div>
                    <div class="flex gap-2">
                        <p class="text-slate-400">Max Jumlah:</p>
                        <p class="font-bold">10</p>
                    </div>
                </div>
                <div class="flex gap-14 mt-5 items-center">
                    <p class="text-slate-400">Subtotal Barang:</p>
                    <p class="font-bold text-2xl">Rp. 990.000,00</p>
                </div>
                <div class="flex gap-5 mt-5 w-full">
                    <button class="p-2 bg-secondary rounded-lg text-white text-center w-full">Checkout Produk</button>
                    <button
                        class="p-2 bg-primary rounded-lg text-white text-center w-full flex items-center justify-center space-x-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Keranjang</span>
                    </button>
                </div>
                <p class="mt-5">
                    <i class="fa-brands fa-whatsapp fa-lg"></i>
                    <span class="underline">Chat Admin</span>
                </p>
            </div>
        </div>
    </div>
    <div class="max-w-max mt-10">
        <ul class="flex cursor-pointer bg-slate-100 p-2 rounded-full items-center">
            <a href="/">
                <li class="hover:bg-white p-2 rounded-full w-28 text-center">
                    Deskripsi
                </li>
            </a>
            <a href="/produk">
                <li class="hover:bg-white p-2 rounded-full w-28 text-center">
                    Spesifikasi
                </li>
            </a>
            <a href="">
                <li class="hover:bg-white p-2 rounded-full w-28 text-center">
                    Ulasan
                </li>
            </a>
        </ul>
    </div>
    <p class="mt-10 text-xl font-bold">320 Ulasan Customer</p>
    <div class="flex gap-10 mt-3 mb-10">
        <div class="border p-5 rounded-3xl max-w-2xl">
            <div class="flex gap-3">
                <i class="fa-solid fa-user bg-slate-400 p-4 rounded-full"></i>
                <div>
                    <p class="font-bold">Agung Kurniawan</p>
                    <div class="flex items-center gap-2 text-xs">
                        <div>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        </div>
                        <p>5.0</p>
                        <p class="bg-slate-400 p-1 rounded-full"></p>
                        <p>3 Hari Lalu</p>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <p>Produk ini menawarkan kualitas yang sangat baik, meskipun masih tergolong baru di pasaran. Dengan daya
                    tahan yang luar biasa, produk ini dirancang untuk bertahan dalam jangka waktu yang lama, sehingga
                    memberikan nilai lebih bagi para penggunanya. Keunggulannya tidak hanya terletak pada performanya,
                    tetapi juga pada efisiensi yang dihadirkannya.</p>
            </div>
            <div class="flex items-center mt-3">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <p>24 Likes</p>
                </div>
                <div class="flex items-center gap-2 ml-3">
                    <i class="fa-regular fa-comment"></i>
                    <p>3 Komentar</p>
                </div>
                <div class="flex items-center gap-2 ml-3">
                    <i class="fa-solid fa-share-nodes"></i>
                    <p>Bagikan</p>
                </div>
                <div class="flex items-center gap-2 ml-3">
                    <i class="fa-regular fa-flag"></i>
                    <p>Laporkan</p>
                </div>
            </div>
        </div>
        <div class="border p-5 rounded-3xl max-w-2xl">
            <div class="flex gap-3">
                <i class="fa-solid fa-user bg-slate-400 p-4 rounded-full"></i>
                <div>
                    <p class="font-bold">Agung Kurniawan</p>
                    <div class="flex items-center gap-2 text-xs">
                        <div>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        </div>
                        <p>5.0</p>
                        <p class="bg-slate-400 p-1 rounded-full"></p>
                        <p>3 Hari Lalu</p>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <p>Produk ini menawarkan kualitas yang sangat baik, meskipun masih tergolong baru di pasaran. Dengan daya
                    tahan yang luar biasa, produk ini dirancang untuk bertahan dalam jangka waktu yang lama, sehingga
                    memberikan nilai lebih bagi para penggunanya. Keunggulannya tidak hanya terletak pada performanya,
                    tetapi juga pada efisiensi yang dihadirkannya.</p>
            </div>
            <div class="flex items-center mt-3">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <p>24 Likes</p>
                </div>
                <div class="flex items-center gap-2 ml-3">
                    <i class="fa-regular fa-comment"></i>
                    <p>3 Komentar</p>
                </div>
                <div class="flex items-center gap-2 ml-3">
                    <i class="fa-solid fa-share-nodes"></i>
                    <p>Bagikan</p>
                </div>
                <div class="flex items-center gap-2 ml-3">
                    <i class="fa-regular fa-flag"></i>
                    <p>Laporkan</p>
                </div>
            </div>
        </div>
    </div>
@endsection
