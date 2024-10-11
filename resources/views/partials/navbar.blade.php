<div class="flex justify-between p-4 mx-8 items-center">
    <a href="/">
        <p class="text-3xl font-bold">RevoEnergy.</p>
    </a>
    <ul class="flex gap-2 cursor-pointer bg-[#F1F1F1] p-[5px] rounded-full items-center font-medium text-[14px]">
        <a href="/">
            <li class="hover:bg-white p-2 rounded-full w-28 text-center {{ request()->is('/') ? 'bg-white' : '' }}">
                Beranda
            </li>
        </a>
        <a href="/produk">
            <li class="hover:bg-white p-2 rounded-full w-28 text-center">
                Produk
            </li>
        </a>
        <a href="">
            <li class="hover:bg-white p-2 rounded-full w-28 text-center">
                Pelatihan
            </li>
        </a>
        <a href="/forum">
            <li class="hover:bg-white p-2 rounded-full w-28 text-center">
                Forum
            </li>
        </a>
        <a href="/artikel">
            <li class="hover:bg-white p-2 rounded-full w-28 text-center">
                Artikel
            </li>
        </a>
        <a href="">
            <li class="hover:bg-white p-2 rounded-full w-28 text-center">
                Tentang
            </li>
        </a>
    </ul>
    <div class="flex gap-3 items-center">
        <i class="fa-solid fa-magnifying-glass bg-[#f1f1f1] p-4 rounded-full cursor-pointer"></i>
        <button onclick="window.location.href='/member'" class="p-3 rounded-full flex gap-2 items-center bg-[#171717] text-white text-[14px] font-medium">
            <div class="--icon"><img src="{{ asset('img/circle-bolt.png') }}" class="w-[20px] h-[20px] bg-cover" alt=""></div>
            <span>Upgrade</span>
        </button>
       <div class="--images flex items-center gap-2 cursor-pointer">
        <div class="rounded-full overflow-hidden p-[2px] border-[2.5px] border-primary">
            <div class="--bordered rounded-full">
                <img src="{{ asset('img/gungzzlee.jpg') }}" class="w-[40px] h-[40px] bg-cover rounded-full" alt="">
            </div>
        </div>
        <div class="--icon"><i class="bi bi-chevron-down text-[24px] font-bold"></i></div>
       </div>
    </div>
</div>
