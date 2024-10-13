<div class="--container flex flex-col gap-10 z-10">
    <div class="--heading">
        <div class="--heading-text text-[44px] font-bold text-black">Solusi Energi Terbarukan Dari<br> Produk Kami</div>
    </div>
    <div class="--filtering-slides flex items-center justify-between">
        <div class="--filtering">
            <ul class="flex gap-2 w-fit cursor-pointer bg-[#F1F1F1] p-[5px] rounded-full items-center font-medium text-[14px]">
                <a href="/">
                    <li class="hover:bg-white py-2 rounded-full px-4 text-center {{ request()->is('/') ? 'bg-white' : '' }}">
                        Produk Jadi
                    </li>
                </a>
                <a href="/produk">
                    <li class="hover:bg-white py-2 px-4 rounded-full text-center">
                        Komponen Alat
                    </li>
                </a>
            </ul>
        </div>
        <div class="--slides flex gap-2 items-center flex-row-reverse">
            <div class="w-[50px] h-[50px] min-w-[50px] min-h-[50px] rounded-full bg-[#307B74] flex justify-center items-center"><i class="bi bi-chevron-down text-[28px] text-white ml-2 transform -rotate-90"></i></div>
            <div class="w-[50px] h-[50px] min-w-[50px] min-h-[50px] rounded-full bg-[#307B74] flex justify-center items-center"><i class="bi bi-chevron-down text-[28px] text-white transform rotate-90"></i></div>
        </div>
    </div>
    <div class="--produk w-full grid grid-cols-4 gap-4">
        @for ($i = 0; $i < 4; $i++)
        <div class="--card">
            <div class="--images"><img src="{{ asset('img/Rectangle 17.png') }}" class="w-full object-cover aspect-[1/1] rounded-[20px]" alt=""></div>
            <div class="--heading text-[18px] font-medium line-clamp-2 mt-2">LAMPU SOLAR Panel Taman Kebun Tiang Jalan Rumah Energi Terbarukan</div>
            <div class="--harga text-[24px] font-black mt-2 text-black">Rp. 320.000,00</div>
            <div class="--kategori-stok flex items-center gap-2 mt-2">
                <div class="--kategori py-2 px-4 bg-[#D1F16A] font-bold text-[12px] rounded-full">Produk Jadi</div>
                <div class="--stok text-[12px] text-[#798092] font-medium">Stok: 1.321 Produk</div>
            </div>
            <div class="--rating-terjualdanulasan mt-2 flex items-center gap-2">
                <div class="--rating text-[14px] font-bold">
                    <i class="bi bi-star-fill text-yellow-500"></i>
                    4.5
                </div>
                <div class="--divider w-[1px] h-[15px] bg-[#798092]"></div>
                <div class="--terjualdanulasan text-[14px] font-medium text-[#798092]">564+ Terjual, 212 Ulasan</div>
            </div>
        </div>
        @endfor
    </div>
    <div class="--more-produk underline text-[16px] font-medium text-black"><a href="">Lihat Produk Lainnya <i class="bi bi-arrow-right"></i></a></div>
</div>
