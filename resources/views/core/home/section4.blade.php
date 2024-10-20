<div class="--container flex flex-col gap-10 z-10">
    <div class="--heading">
        <div class="--heading-text text-[44px] font-bold text-black">Solusi Energi Terbarukan Dari<br> Produk Kami</div>
    </div>
    <div class="--filtering-slides flex items-center justify-between">
        <div class="--filtering">
            <ul class="flex gap-2 w-fit cursor-pointer bg-[#F1F1F1] p-[5px] rounded-full items-center font-medium text-[14px]">
                <li onclick="showCategory('produk-jadi', this)" class="hover:bg-white py-2 rounded-full px-4 text-center active">
                    Produk Jadi
                </li>
                <li onclick="showCategory('komponen-alat', this)" class="hover:bg-white py-2 px-4 rounded-full text-center">
                    Komponen Alat
                </li>
            </ul>
        </div>
        <div class="--slides flex gap-2 items-center flex-row-reverse">
            <div
                class="w-[50px] h-[50px] min-w-[50px] min-h-[50px] rounded-full bg-[#307B74] flex justify-center items-center">
                <i class="bi bi-chevron-down text-[28px] text-white ml-2 transform -rotate-90"></i></div>
            <div
                class="w-[50px] h-[50px] min-w-[50px] min-h-[50px] rounded-full bg-[#307B74] flex justify-center items-center">
                <i class="bi bi-chevron-down text-[28px] text-white transform rotate-90"></i></div>
        </div>
    </div>
    <div class="--produk-section w-full grid grid-cols-4 gap-4">
        <div class="--card produk-jadi">
            <a href="/detail_produk">
                <div class="--images"><img src="{{ asset('img/produk1-home.png') }}"
                    class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
            <div class="--heading text-[18px] font-medium line-clamp-2 mt-2">ROMAN Solar Panel Portable 10W 4 Folding
                Charging Board</div>
            <div class="--harga text-[24px] font-black mt-2 text-black">Rp. 220.000,00</div>
            <div class="--kategori-stok flex items-center gap-2 mt-2">
                <div class="--kategori py-2 px-4 bg-[#D1F16A] font-bold text-[12px] rounded-full">Produk Jadi</div>
                <div class="--stok text-[12px] text-[#798092] font-medium">Stok: 100 Produk</div>
            </div>
            <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                <div class="--rating text-[14px] font-bold">
                    <i class="bi bi-star-fill text-yellow-500"></i>
                    4.9
                </div>
                <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                <div class="--terjualdanulasan text-[14px] font-medium text-[#798092]">100 Terjual | Baru</div>
            </div>
            </a>
            
        </div>
        <div class="--card produk-jadi">
            <div class="--images"><img src="{{ asset('img/produk2-home.png') }}"
                    class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
            <div class="--heading text-[18px] font-medium line-clamp-2 mt-2">Pembangkit Listrik Tenaga Surya Portabel
                Panel Surya 20W Dua sisi Satu Daya</div>
            <div class="--harga text-[24px] font-black mt-2 text-black">Rp. 11.500.000,00</div>
            <div class="--kategori-stok flex items-center gap-2 mt-2">
                <div class="--kategori py-2 px-4 bg-[#D1F16A] font-bold text-[12px] rounded-full">Produk Jadi</div>
                <div class="--stok text-[12px] text-[#798092] font-medium">Stok: 80 Produk</div>
            </div>
            <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                <div class="--rating text-[14px] font-bold">
                    <i class="bi bi-star-fill text-yellow-500"></i>
                    4.8
                </div>
                <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                <div class="--terjualdanulasan text-[14px] font-medium text-[#798092]">80 Terjual | Baru</div>
            </div>
        </div>
        <div class="--card produk-jadi">
            <div class="--images"><img src="{{ asset('img/produk3-home.png') }}"
                    class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
            <div class="--heading text-[18px] font-medium line-clamp-2 mt-2">Electric Hoist 600 Kg - Katrol Elektrik
                Takel Listrik PA600 Wire Reel
            </div>
            <div class="--harga text-[24px] font-black mt-2 text-black">Rp. 1.259.000,00</div>
            <div class="--kategori-stok flex items-center gap-2 mt-2">
                <div class="--kategori py-2 px-4 bg-[#D1F16A] font-bold text-[12px] rounded-full">Produk Jadi</div>
                <div class="--stok text-[12px] text-[#798092] font-medium">Stok: 60 Produk</div>
            </div>
            <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                <div class="--rating text-[14px] font-bold">
                    <i class="bi bi-star-fill text-yellow-500"></i>
                    4.7
                </div>
                <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                <div class="--terjualdanulasan text-[14px] font-medium text-[#798092]">60 Terjual | Baru</div>
            </div>
        </div>
        <div class="--card produk-jadi">
            <div class="--images"><img src="{{ asset('img/produk4-home.png') }}"
                    class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
            <div class="--heading text-[18px] font-medium line-clamp-2 mt-2">Genset Inverter 10 KVA 8 KW Tsuzumi TG10000SSI
            </div>
            <div class="--harga text-[24px] font-black mt-2 text-black">Rp. 1.388.888,00</div>
            <div class="--kategori-stok flex items-center gap-2 mt-2">
                <div class="--kategori py-2 px-4 bg-[#D1F16A] font-bold text-[12px] rounded-full">Produk Jadi</div>
                <div class="--stok text-[12px] text-[#798092] font-medium">Stok: 40 Produk</div>
            </div>
            <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                <div class="--rating text-[14px] font-bold">
                    <i class="bi bi-star-fill text-yellow-500"></i>
                    4.9
                </div>
                <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                <div class="--terjualdanulasan text-[14px] font-medium text-[#798092]">40 Terjual | Baru</div>
            </div>
        </div>

        {{-- Produk Komponen Alat --}}
        <div class="--card komponen-alat hidden">
            <div class="--images"><img src="{{ asset('img/komponen-alat-1-home.png') }}"
                    class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
            <div class="--heading text-[18px] font-medium line-clamp-2 mt-2">Krissil Acetoxy Silicone Sealant Lem Kaca</div>
            <div class="--harga text-[24px] font-black mt-2 text-black">Rp. 220.000,00</div>
            <div class="--kategori-stok flex items-center gap-2 mt-2">
                <div class="--kategori py-2 px-4 bg-[#D1F16A] font-bold text-[12px] rounded-full">Produk Mentah</div>
                <div class="--stok text-[12px] text-[#798092] font-medium">Stok: 20 Produk</div>
            </div>
            <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                <div class="--rating text-[14px] font-bold">
                    <i class="bi bi-star-fill text-yellow-500"></i>
                    4.9
                </div>
                <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                <div class="--terjualdanulasan text-[14px] font-medium text-[#798092]">20 Terjual | Baru</div>
            </div>
        </div>
        <div class="--card komponen-alat hidden">
            <div class="--images"><img src="{{ asset('img/komponen-alat-2-home.png') }}"
                    class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
            <div class="--heading text-[18px] font-medium line-clamp-2 mt-2">12v 100ah Lifepo4 Baterai Lithium BMS Battery Rechargeable Garansi
                10 Tahun Cst energy Brand</div>
            <div class="--harga text-[24px] font-black mt-2 text-black">Rp. 220.000,00</div>
            <div class="--kategori-stok flex items-center gap-2 mt-2">
                <div class="--kategori py-2 px-4 bg-[#D1F16A] font-bold text-[12px] rounded-full">Produk Mentah</div>
                <div class="--stok text-[12px] text-[#798092] font-medium">Stok: 20 Produk</div>
            </div>
            <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                <div class="--rating text-[14px] font-bold">
                    <i class="bi bi-star-fill text-yellow-500"></i>
                    4.9
                </div>
                <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                <div class="--terjualdanulasan text-[14px] font-medium text-[#798092]">20 Terjual | Baru</div>
            </div>
        </div>
    </div>
    <div class="--more-produk underline text-[16px] font-medium text-black"><a href="/produk">Lihat Produk Lainnya <i
                class="bi bi-arrow-right"></i></a></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const defaultCategoryTab = document.querySelector('.--filtering li');
    showCategory('produk-jadi', defaultCategoryTab); // Memanggil produk-jadi sebagai default
});

</script>
<script>
    function showCategory(category, element) {
        
    // Hanya hide cards di section produk yang relevan
    const allCards = document.querySelectorAll('.--produk-section .--card');
    allCards.forEach(card => card.classList.add('hidden'));

    // Show the selected category
    const selectedCards = document.querySelectorAll(`.${category}`);
    selectedCards.forEach(card => card.classList.remove('hidden'));

    // Ubah tab yang aktif
    const allTabs = document.querySelectorAll('.--filtering li');
    allTabs.forEach(tab => tab.classList.remove('bg-white'));

    // Tambah class aktif pada tab yang diklik
    element.classList.add('bg-white');
}
</script>