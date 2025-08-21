<div class="--container flex flex-col gap-6 md:gap-8 z-10">
    <div class="--heading animate-on-scroll">
        {{-- Ukuran font judul utama sudah responsif --}}
        <div class="--heading-text text-[32px] md:text-[44px] font-bold text-black">Solusi Energi Terbarukan Dari<br> Produk Kami</div>
    </div>
    <div class="--filtering-slides flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 animate-on-scroll delay-100">
        <div class="--filtering">
            <ul class="flex gap-2 w-fit cursor-pointer bg-[#F1F1F1] p-[5px] rounded-full items-center font-medium text-[14px] overflow-x-auto">
                <li onclick="showCategory('produk-jadi', this)" class="hover:bg-white py-2 rounded-full px-4 text-center whitespace-nowrap active-tab">
                    Produk Jadi
                </li>
                <li onclick="showCategory('komponen-alat', this)" class="hover:bg-white py-2 px-4 rounded-full text-center whitespace-nowrap">
                    Komponen Alat
                </li>
            </ul>
        </div>
        <div class="--more-produk underline text-sm md:text-base font-medium text-black hidden sm:block"><a href="/produk">Lihat Produk Lainnya <i
            class="bi bi-arrow-right"></i></a></div>
    </div>
    
    <div class="--produk-section w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
        {{-- Card Produk Jadi 1 --}}
        <div class="--card produk-jadi card-animate">
            <a href="/detail_produk">
                <div class="--images"><img src="{{ asset('img/produk1-home.png') }}"
                        class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
                {{-- Ukuran Teks Diubah --}}
                <div class="--heading text-sm md:text-lg font-medium line-clamp-2 mt-2">ROMAN Solar Panel Portable 10W 4 Folding Charging Board</div>
                <div class="--harga text-lg md:text-2xl font-black mt-2 text-black">Rp. 220.000,00</div>
                <div class="--kategori-stok flex items-center gap-2 mt-2">
                    <div class="--kategori py-2 px-3 bg-[#D1F16A] font-bold text-[10px] sm:text-xs rounded-full">Produk Jadi</div>
                    <div class="--stok text-[10px] sm:text-xs text-[#798092] font-medium">Stok: 100 Produk</div>
                </div>
                <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                    <div class="--rating text-xs sm:text-sm font-bold">
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        4.9
                    </div>
                    <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                    <div class="--terjualdanulasan text-xs sm:text-sm font-medium text-[#798092]">100 Terjual | Baru</div>
                </div>
            </a>
        </div>
        {{-- Card Produk Jadi 2 --}}
        <div class="--card produk-jadi card-animate">
            <a href="/detail_produk">
                <div class="--images"><img src="{{ asset('img/produk2-home.png') }}"
                        class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
                {{-- Ukuran Teks Diubah --}}
                <div class="--heading text-sm md:text-lg font-medium line-clamp-2 mt-2">Pembangkit Listrik Tenaga Surya Portabel Panel Surya 20W Dua sisi Satu Daya</div>
                <div class="--harga text-lg md:text-2xl font-black mt-2 text-black">Rp. 1.259.000,00</div>
                <div class="--kategori-stok flex items-center gap-2 mt-2">
                    <div class="--kategori py-2 px-3 bg-[#D1F16A] font-bold text-[10px] sm:text-xs rounded-full">Produk Jadi</div>
                    <div class="--stok text-[10px] sm:text-xs text-[#798092] font-medium">Stok: 80 Produk</div>
                </div>
                <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                    <div class="--rating text-xs sm:text-sm font-bold"><i class="bi bi-star-fill text-yellow-500"></i> 4.8</div>
                    <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                    <div class="--terjualdanulasan text-xs sm:text-sm font-medium text-[#798092]">80 Terjual | Baru</div>
                </div>
            </a>
        </div>
        {{-- Card Produk Jadi 3 --}}
        <div class="--card produk-jadi card-animate">
             <a href="/detail_produk">
                <div class="--images"><img src="{{ asset('img/produk3-home.png') }}"
                        class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
                {{-- Ukuran Teks Diubah --}}
                <div class="--heading text-sm md:text-lg font-medium line-clamp-2 mt-2">Electric Hoist 600 Kg - Katrol Elektrik Takel Listrik PA600 Wire Reel</div>
                <div class="--harga text-lg md:text-2xl font-black mt-2 text-black">Rp. 1.388.888,00</div>
                <div class="--kategori-stok flex items-center gap-2 mt-2">
                    <div class="--kategori py-2 px-3 bg-[#D1F16A] font-bold text-[10px] sm:text-xs rounded-full">Produk Jadi</div>
                    <div class="--stok text-[10px] sm:text-xs text-[#798092] font-medium">Stok: 60 Produk</div>
                </div>
                <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                    <div class="--rating text-xs sm:text-sm font-bold"><i class="bi bi-star-fill text-yellow-500"></i> 4.7</div>
                    <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                    <div class="--terjualdanulasan text-xs sm:text-sm font-medium text-[#798092]">60 Terjual | Baru</div>
                </div>
            </a>
        </div>
        {{-- Card Produk Jadi 4 --}}
        <div class="--card produk-jadi card-animate">
             <a href="/detail_produk">
                <div class="--images"><img src="{{ asset('img/produk4-home.png') }}"
                        class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
                {{-- Ukuran Teks Diubah --}}
                <div class="--heading text-sm md:text-lg font-medium line-clamp-2 mt-2">Genset Inverter 10 KVA 8 KW Tsuzumi TG10000SSI</div>
                <div class="--harga text-lg md:text-2xl font-black mt-2 text-black">Rp. 11.500.000,00</div>
                <div class="--kategori-stok flex items-center gap-2 mt-2">
                    <div class="--kategori py-2 px-3 bg-[#D1F16A] font-bold text-[10px] sm:text-xs rounded-full">Produk Jadi</div>
                    <div class="--stok text-[10px] sm:text-xs text-[#798092] font-medium">Stok: 40 Produk</div>
                </div>
                <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                    <div class="--rating text-xs sm:text-sm font-bold"><i class="bi bi-star-fill text-yellow-500"></i> 4.9</div>
                    <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                    <div class="--terjualdanulasan text-xs sm:text-sm font-medium text-[#798092]">40 Terjual | Baru</div>
                </div>
            </a>
        </div>

        {{-- Produk Komponen Alat 1 --}}
        <div class="--card komponen-alat hidden card-animate">
            <a href="/detail_produk">
                <div class="--images"><img src="{{ asset('img/komponen-alat-1-home.png') }}"
                        class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
                {{-- Ukuran Teks Diubah --}}
                <div class="--heading text-sm md:text-lg font-medium line-clamp-2 mt-2">Krissil Acetoxy Silicone Sealant Lem Kaca</div>
                <div class="--harga text-lg md:text-2xl font-black mt-2 text-black">Rp. 15.500,00</div>
                <div class="--kategori-stok flex items-center gap-2 mt-2">
                    <div class="--kategori py-2 px-3 bg-[#D1F16A] font-bold text-[10px] sm:text-xs rounded-full">Komponen Alat</div>
                    <div class="--stok text-[10px] sm:text-xs text-[#798092] font-medium">Stok: 200 Produk</div>
                </div>
                <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                    <div class="--rating text-xs sm:text-sm font-bold"><i class="bi bi-star-fill text-yellow-500"></i> 4.9</div>
                    <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                    <div class="--terjualdanulasan text-xs sm:text-sm font-medium text-[#798092]">200 Terjual | Baru</div>
                </div>
            </a>
        </div>
        {{-- Produk Komponen Alat 2 --}}
        <div class="--card komponen-alat hidden card-animate">
            <a href="/detail_produk">
                <div class="--images"><img src="{{ asset('img/komponen-alat-2-home.png') }}"
                        class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
                {{-- Ukuran Teks Diubah --}}
                <div class="--heading text-sm md:text-lg font-medium line-clamp-2 mt-2">12v 100ah Lifepo4 Baterai Lithium BMS Battery Rechargeable Garansi 10 Tahun Cst energy Brand</div>
                <div class="--harga text-lg md:text-2xl font-black mt-2 text-black">Rp. 450.000,00</div>
                <div class="--kategori-stok flex items-center gap-2 mt-2">
                    <div class="--kategori py-2 px-3 bg-[#D1F16A] font-bold text-[10px] sm:text-xs rounded-full">Komponen Alat</div>
                    <div class="--stok text-[10px] sm:text-xs text-[#798092] font-medium">Stok: 30 Produk</div>
                </div>
                <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                    <div class="--rating text-xs sm:text-sm font-bold"><i class="bi bi-star-fill text-yellow-500"></i> 4.8</div>
                    <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                    <div class="--terjualdanulasan text-xs sm:text-sm font-medium text-[#798092]">30 Terjual | Baru</div>
                </div>
            </a>
        </div>
    </div>
    <div class="--more-produk underline text-sm md:text-base font-medium text-black text-center sm:hidden"><a href="/produk">Lihat Produk Lainnya <i
        class="bi bi-arrow-right"></i></a></div>
</div>

{{-- SCRIPT FILTER (TIDAK DIUBAH) --}}
<script>
    function showCategory(category, element) {
        const allCards = document.querySelectorAll('.--produk-section .--card');
        const selectedCards = document.querySelectorAll(`.${category}`);

        allCards.forEach(card => {
            card.classList.add('hidden');
            card.classList.remove('card-show');
        });

        selectedCards.forEach((card, i) => {
            if (i < 4) {
                card.classList.remove('hidden');
                setTimeout(() => card.classList.add('card-show'), i * 150);
            }
        });

        const allTabs = document.querySelectorAll('.--filtering li');
        allTabs.forEach(tab => tab.classList.remove('active-tab'));
        element.classList.add('active-tab');
    }

    document.addEventListener('DOMContentLoaded', () => {
        const defaultTab = document.querySelector('.--filtering li.active-tab');
        if (defaultTab) {
            showCategory('produk-jadi', defaultTab);
        } else {
             const firstTab = document.querySelector('.--filtering li');
             if (firstTab) showCategory('produk-jadi', firstTab);
        }
    });
</script>

{{-- SCRIPT ANIMASI ON-SCROLL (TIDAK DIUBAH) --}}
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

{{-- STYLE ANIMASI & TAB AKTIF (TIDAK DIUBAH) --}}
<style>
    .active-tab {
        background-color: white;
    }
    .card-animate {
        transform: scale(0.95);
        opacity: 0;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }
    .card-animate.card-show {
        transform: scale(1);
        opacity: 1;
    }
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
</style>