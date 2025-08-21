@extends('main')
@section('content')
    {{-- On mobile (default), the layout is a column. On medium screens and up (md:), it becomes a row. --}}
    <div class="flex flex-col md:flex-row gap-8">
        {{-- On mobile, the sidebar takes full width. On medium screens and up (md:), it takes 1/5th of the width. --}}
        <div class="w-full md:w-1/5 border rounded-lg p-5 max-h-max">
            <p class="font-bold">Tipe Produk</p>
            <img src="img/Vector 2 (1).png" alt="" width="95">
            <div class="mt-3 flex flex-col">
                <div>
                    <input id="semua" name="tipe_produk" type="radio" value="semua" checked>
                    <label for="semua">Semua</label>
                </div>
                <div>
                    <input id="produk_jadi" name="tipe_produk" type="radio" value="Produk Jadi">
                    <label for="produk_jadi">Produk Jadi</label>
                </div>
                <div>
                    <input id="produk_mentah" name="tipe_produk" type="radio" value="Produk Mentah">
                    <label for="produk_mentah">Produk Mentah</label>
                </div>
            </div>
            <p class="font-bold mt-8">Kondisi Produk</p>
            <img src="img/Vector 2 (1).png" alt="" width="120">
            <div class="mt-3 flex flex-col">
                <div>
                    <input id="kondisi_baru" name="kondisi_produk" type="radio" value="Baru">
                    <label for="kondisi_baru">Kondisi Baru</label>
                </div>
                <div>
                    <input id="kondisi_second" name="kondisi_produk" type="radio" value="Second">
                    <label for="kondisi_second">Kondisi Second</label>
                </div>
            </div>
            <p class="font-bold mt-8">Kategori Produk</p>
            <img src="img/Vector 2 (1).png" alt="" width="130">
            <div class="mt-3 flex flex-col">
                <div>
                    <input id="kategori_terlaris" name="kategori_produk" type="radio" value="terlaris">
                    <label for="kategori_terlaris">Terlaris</label>
                </div>
                <div>
                    <input id="kategori_rating" name="kategori_produk" type="radio" value="rating">
                    <label for="kategori_rating">Rating Tertinggi</label>
                </div>
            </div>
            <p class="font-bold mt-8">Harga Produk</p>
            <img src="img/Vector 2 (1).png" alt="" width="110">
            <div class="mt-3 flex flex-col">
                <div>
                    <input id="harga_terendah" name="harga_produk" type="radio" value="terendah">
                    <label for="harga_terendah">Terendah</label>
                </div>
                <div>
                    <input id="harga_tertinggi" name="harga_produk" type="radio" value="tertinggi">
                    <label for="harga_tertinggi">Tertinggi</label>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-full">
            {{-- On mobile (default), this section is a column. On small screens and up (sm:), it becomes a row. --}}
            <div class="flex flex-col sm:flex-row w-full gap-5 items-start sm:items-center mb-6">
                <div class="relative w-full">
                    <i class="fa-solid fa-magnifying-glass absolute top-4 left-3 text-slate-300"></i>
                    <input id="search-bar" type="text" placeholder="Cari Nama Barang"
                        class="border p-3 px-10 w-full rounded-lg">
                </div>
                {{-- The dropdown takes full width on mobile and auto width on larger screens --}}
                <select class="border rounded-md p-3 w-full sm:w-auto">
                    <option>Terbaru</option>
                    <option>Harga Terendah</option>
                    <option>Harga Tertinggi</option>
                </select>
            </div>
            
            {{-- The grid is already responsive: 2 columns on mobile, 3 on small screens, and 4 on large screens. --}}
            <div id="product-list" class="grid lg:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-8">
                <div class="product" data-tipe="Produk Jadi" data-kondisi="Baru" data-rating="4.9" data-harga="220000"
                    data-terjual="100">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                        <a href="/detail_produk">
                            <img src="img/produk-1.png" alt="ROMAN Solar Panel" width="400">
                            <p class="line-clamp-2 mt-3">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</p>
                            <p class="font-bold text-xl mt-2">Rp. 220.000,00</p>
                            <div class="flex text-xs gap-3 mt-2 items-center">
                                <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Jadi</p>
                                <p class="text-slate-500">Stok: 100 Produk</p>
                            </div>
                            <div class="flex items-center gap-2 mt-2 text-xs">
                                <div class="flex justify-center items-center gap-1">
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <p>4.9</p>
                                </div>
                                <div class="flex justify-center items-center gap-1">
                                    <p>|</p>
                                    <p>100 Terjual</p>
                                    <p>|</p>
                                    <p>Baru</p>
                                </div>
                            </div>
                        </a>
                        <div class="flex justify-between mt-2">
                            <p></p>
                            <i class="add-to-cart-btn fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full cursor-pointer"></i>
                        </div>
                    </div>
                </div>

                <div class="product" data-tipe="Produk Jadi" data-kondisi="Baru" data-rating="4.8" data-harga="1259000"
                    data-terjual="80">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                         <a href="/detail_produk">
                            <img src="img/produk-2.png" alt="Pembangkit Listrik Tenaga Surya" width="400">
                            <p class="line-clamp-2 mt-3">Pembangkit Listrik Tenaga Surya Portabel Panel Surya 20W Dua sisi
                                Satu Daya</p>
                            <p class="font-bold text-xl mt-2">Rp. 1.259.000,00</p>
                            <div class="flex text-xs gap-3 mt-2 items-center">
                                <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Jadi</p>
                                <p class="text-slate-500">Stok: 80 Produk</p>
                            </div>
                            <div class="flex items-center gap-2 mt-2 text-xs">
                                <div class="flex justify-center items-center gap-1">
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <p>4.8</p>
                                </div>
                                <div class="flex justify-center items-center gap-1">
                                    <p>|</p>
                                    <p>80 Terjual</p>
                                    <p>|</p>
                                    <p>Baru</p>
                                </div>
                            </div>
                        </a>
                        <div class="flex justify-between mt-2">
                            <p></p>
                            <i class="add-to-cart-btn fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full cursor-pointer"></i>
                        </div>
                    </div>
                </div>
                
                <div class="product" data-tipe="Produk Jadi" data-kondisi="Baru" data-rating="4.7" data-harga="1388888"
                    data-terjual="60">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                        <a href="/detail_produk">
                            <img src="img/produk-3.png" alt="Electric Hoist 600 Kg" width="400">
                            <p class="line-clamp-2 mt-3">Electric Hoist 600 Kg - Katrol Elektrik Takel Listrik PA600 Wire
                                Reel
                            </p>
                            <p class="font-bold text-xl mt-2">Rp. 1.388.888,00</p>
                            <div class="flex text-xs gap-3 mt-2 items-center">
                                <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Jadi</p>
                                <p class="text-slate-500">Stok: 60 Produk</p>
                            </div>
                            <div class="flex items-center gap-2 mt-2 text-xs">
                                <div class="flex justify-center items-center gap-1">
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <p>4.7</p>
                                </div>
                                <div class="flex justify-center items-center gap-1">
                                    <p>|</p>
                                    <p>60 Terjual</p>
                                    <p>|</p>
                                    <p>Baru</p>
                                </div>
                            </div>
                        </a>
                        <div class="flex justify-between mt-2">
                            <p></p>
                            <i class="add-to-cart-btn fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full cursor-pointer"></i>
                        </div>
                    </div>
                </div>

                <div class="product" data-tipe="Produk Jadi" data-kondisi="Baru" data-rating="4.9"
                    data-harga="11500000" data-terjual="40">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                        <a href="/detail_produk">
                            <img src="img/produk-4.png" alt="Genset Inverter" width="400">
                            <p class="line-clamp-2 mt-3">Genset Inverter 10 KVA 8 KW Tsuzumi TG10000SSI</p>
                            <p class="font-bold text-xl mt-2">Rp. 11.500.000,00</p>
                            <div class="flex text-xs gap-3 mt-2 items-center">
                                <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Jadi</p>
                                <p class="text-slate-500">Stok: 40 Produk</p>
                            </div>
                            <div class="flex items-center gap-2 mt-2 text-xs">
                                <div class="flex justify-center items-center gap-1">
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <p>4.9</p>
                                </div>
                                <div class="flex justify-center items-center gap-1">
                                    <p>|</p>
                                    <p>40 Terjual</p>
                                    <p>|</p>
                                    <p>Baru</p>
                                </div>
                            </div>
                        </a>
                        <div class="flex justify-between mt-2">
                            <p></p>
                            <i class="add-to-cart-btn fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full cursor-pointer"></i>
                        </div>
                    </div>
                </div>

                <div class="product" data-tipe="Produk Mentah" data-kondisi="Baru" data-rating="4.9" data-harga="15500"
                    data-terjual="20">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                        <a href="/detail_produk">
                            <img src="img/produk-5.png" alt="Silicone Sealant" width="400" class="rounded-2xl">
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
                                    <p>20 Terjual</p>
                                    <p>|</p>
                                    <p>Baru</p>
                                </div>
                            </div>
                        </a>
                        <div class="flex justify-between mt-2">
                            <p></p>
                            <i class="add-to-cart-btn fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full cursor-pointer"></i>
                        </div>
                    </div>
                </div>

                <div class="product" data-tipe="Produk Mentah" data-kondisi="Baru" data-rating="4.8"
                    data-harga="450000" data-terjual="30">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                        <a href="/detail_produk">
                            <img src="img/produk-6.png" alt="Baterai Lithium" width="400">
                            <p class="line-clamp-2 mt-3">12v 100ah Lifepo4 Baterai Lithium BMS Battery Rechargeable Garansi
                                10 Tahun Cst energy Brand</p>
                            <p class="font-bold text-xl mt-2">Rp. 450.000,00</p>
                            <div class="flex text-xs gap-3 mt-2 items-center">
                                <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Mentah</p>
                                <p class="text-slate-500">Stok: 20 Produk</p>
                            </div>
                            <div class="flex items-center gap-2 mt-2 text-xs">
                                <div class="flex justify-center items-center gap-1">
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <p>4.8</p>
                                </div>
                                <div class="flex justify-center items-center gap-1">
                                    <p>|</p>
                                    <p>30 Terjual</p>
                                    <p>|</p>
                                    <p>Baru</p>
                                </div>
                            </div>
                        </a>
                        <div class="flex justify-between mt-2">
                            <p></p>
                            <i class="add-to-cart-btn fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full cursor-pointer"></i>
                        </div>
                    </div>
                </div>

                <div class="product" data-tipe="Produk Jadi" data-kondisi="Second" data-rating="4.7"
                    data-harga="6054000" data-terjual="15">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                        <a href="/detail_produk">
                            <img src="img/produk-7.png" alt="Solar Inverter">
                            <p class="line-clamp-2 mt-3">Zamdon Solar Inverter Frekuensi Rendah Off grid hybrid dengan WiFi
                                Monitor 3.75KVA 3KW 48V LFT 30248 Wifi</p>
                            <p class="font-bold text-xl mt-2">Rp. 6.054.000,00</p>
                            <div class="flex text-xs gap-3 mt-2 items-center">
                                <p class="bg-tertiary p-1 w-28 text-center font-bold rounded-full">Produk Jadi</p>
                                <p class="text-slate-500">Stok: 20 Produk</p>
                            </div>
                            <div class="flex items-center gap-2 mt-2 text-xs">
                                <div class="flex justify-center items-center gap-1">
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <p>4.7</p>
                                </div>
                                <div class="flex justify-center items-center gap-1">
                                    <p>|</p>
                                    <p>15 Terjual</p>
                                    <p>|</p>
                                    <p>Second</p>
                                </div>
                            </div>
                        </a>
                        <div class="flex justify-between mt-2">
                            <p></p>
                            <i class="add-to-cart-btn fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full cursor-pointer"></i>
                        </div>
                    </div>
                </div>

                <div class="product" data-tipe="Produk Jadi" data-kondisi="Second" data-rating="4.9"
                    data-harga="269000" data-terjual="45">
                    <div class="bg-slate-50 shadow p-3 max-w-64 rounded-3xl">
                        <a href="/detail_produk">
                            <img src="img/produk-8.png" alt="Susan Inverter" width="400">
                            <p class="line-clamp-2 mt-3">Susan Inverter 12V 9999000W Konverter Booster Tabung Besar 14
                                Tabung Daya Tinggi Konverter Tegangan Tinggi Pintar Hemat Daya</p>
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
                                    <p>45 Terjual</p>
                                    <p>|</p>
                                    <p>Second</p>
                                </div>
                            </div>
                        </a>
                        <div class="flex justify-between mt-2">
                             <p></p>
                            <i class="add-to-cart-btn fa-solid fa-cart-shopping bg-slate-200 p-2 rounded-full cursor-pointer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Script untuk Search (Tidak berubah) --}}
    <script>
        document.getElementById('search-bar').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase();
            const products = document.querySelectorAll('.product');

            products.forEach(function(product) {
                const productName = product.querySelector('p').innerText.toLowerCase();
                if (productName.includes(searchValue)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    </script>
    
    {{-- Script untuk Filter dan Sort (Tidak berubah) --}}
    <script>
        document.querySelectorAll('input[type=radio]').forEach(function(radio) {
            radio.addEventListener('click', function() {
                if (this.getAttribute('data-checked') === 'true') {
                    this.checked = false;
                    this.setAttribute('data-checked', 'false');
                    const groupName = this.name;
                    const semuaRadio = document.querySelector(`input[name="${groupName}"][value="semua"]`);
                    if (semuaRadio) {
                        semuaRadio.checked = true;
                    }
                } else {
                    document.querySelectorAll(`input[name="${this.name}"]`).forEach(function(r) {
                        r.setAttribute('data-checked', 'false');
                    });
                    this.setAttribute('data-checked', 'true');
                }
                filterProducts();
            });
        });

        function filterProducts() {
            let tipeProduk = document.querySelector('input[name="tipe_produk"]:checked') ? document.querySelector(
                'input[name="tipe_produk"]:checked').value : 'semua';
            let kondisiProduk = document.querySelector('input[name="kondisi_produk"]:checked') ? document.querySelector(
                'input[name="kondisi_produk"]:checked').value : 'semua';
            let hargaProduk = document.querySelector('input[name="harga_produk"]:checked') ? document.querySelector(
                'input[name="harga_produk"]:checked').value : 'semua';
            let kategoriProduk = document.querySelector('input[name="kategori_produk"]:checked') ? document.querySelector(
                'input[name="kategori_produk"]:checked').value : 'semua';

            let products = Array.from(document.querySelectorAll('.product'));

            products.forEach(function(product) {
                let tipe = product.getAttribute('data-tipe');
                let kondisi = product.getAttribute('data-kondisi');
                let show = true;

                if (tipeProduk !== 'semua' && tipeProduk !== tipe) {
                    show = false;
                }
                if (kondisiProduk !== 'semua' && kondisiProduk !== kondisi) {
                    show = false;
                }

                if (show) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });

            if (hargaProduk === 'terendah') {
                products.sort((a, b) => parseInt(a.getAttribute('data-harga')) - parseInt(b.getAttribute('data-harga')));
            } else if (hargaProduk === 'tertinggi') {
                products.sort((a, b) => parseInt(b.getAttribute('data-harga')) - parseInt(a.getAttribute('data-harga')));
            } else if (kategoriProduk === 'terlaris') {
                products.sort((a, b) => parseInt(b.getAttribute('data-terjual')) - parseInt(a.getAttribute('data-terjual')));
            } else if (kategoriProduk === 'rating') {
                products.sort((a, b) => parseFloat(b.getAttribute('data-rating')) - parseFloat(a.getAttribute('data-rating')));
            }

            let productGrid = document.getElementById('product-list');
            productGrid.innerHTML = '';
            products.forEach(function(product) {
                productGrid.appendChild(product);
            });
        }
    </script>
    
    {{-- Script "Add to Cart" yang sudah diperbaiki --}}
    <script>
        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
            button.addEventListener('click', function() {
                const productElement = this.closest('.product');
                const price = productElement.getAttribute('data-harga');
                const name = productElement.querySelector('p').innerText;
                const image = productElement.querySelector('img').src;

                const product = {
                    price: price,
                    name: name,
                    image: image,
                    quantity: 1,
                    subtotal: parseInt(price)
                };

                localStorage.setItem('cartProduct', JSON.stringify(product));
                alert('Produk berhasil ditambahkan ke keranjang!');
                window.location.href = '/cart-produk';
            });
        });
    </script>
@endsection