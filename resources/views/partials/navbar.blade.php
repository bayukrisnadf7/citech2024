<div class="flex justify-between p-4 mx-4 md:mx-8 items-center">
    <a href="/">
        <p class="text-2xl md:text-3xl font-bold">RevoEnergy.</p>
    </a>

    <ul id="navMenu" class="hidden lg:flex gap-2 cursor-pointer bg-[#F1F1F1] p-[5px] rounded-full items-center font-medium text-[14px]">
        <a href="/">
            <li class="hover:bg-white p-2 rounded-full w-24 md:w-28 text-center {{ request()->is('/') ? 'bg-white' : '' }}">
                Beranda
            </li>
        </a>
        <a href="/produk">
            <li class="hover:bg-white p-2 rounded-full w-24 md:w-28 text-center {{ request()->is('produk') ? 'bg-white' : '' }}">
                Produk
            </li>
        </a>
        <a href="/pelatihan">
            <li class="hover:bg-white p-2 rounded-full w-24 md:w-28 text-center {{ request()->is('pelatihan') ? 'bg-white' : '' }}">
                Pelatihan
            </li>
        </a>
        <a href="/forum">
            <li class="hover:bg-white p-2 rounded-full w-24 md:w-28 text-center {{ request()->is('forum') ? 'bg-white' : '' }}">
                Forum
            </li>
        </a>
        <a href="/artikel">
            <li class="hover:bg-white p-2 rounded-full w-24 md:w-28 text-center {{ request()->is('artikel') ? 'bg-white' : '' }}">
                Artikel
            </li>
        </a>
        <a href="/tentang-kami">
            <li class="hover:bg-white p-2 rounded-full w-24 md:w-28 text-center {{ request()->is('tentang-kami') ? 'bg-white' : '' }}">
                Tentang
            </li>
        </a>
    </ul>

    <div class="hidden lg:flex gap-3 items-center">
        @if (request()->is('produk') || request()->is('detail_produk'))
            <a href="/cart">
                <i class="fa-solid fa-cart-shopping bg-[#f1f1f1] p-4 rounded-full cursor-pointer"></i>
            </a>
        @elseif(request()->is('pelatihan') || request()->is('pelatihan-offline') || request()->is('pelatihan-online'))
            <a href="/cart">
                <i class="fa-solid fa-cart-shopping bg-[#f1f1f1] p-4 rounded-full cursor-pointer"></i>
            </a>
        @else
            <i data-modal-target="search-modal" data-modal-toggle="search-modal"
                class="fa-solid fa-magnifying-glass bg-[#f1f1f1] p-4 rounded-full cursor-pointer"></i>
        @endif

        <button onclick="window.location.href='/member'"
            class="p-3 rounded-full flex gap-2 items-center bg-[#171717] text-white text-[14px] font-medium">
            <div class="--icon">
                <img src="{{ asset('img/circle-bolt.png') }}" class="w-[20px] h-[20px] bg-cover" alt="">
            </div>
            <span>Upgrade</span>
        </button>

        <div class="--images flex items-center gap-2 cursor-pointer relative" id="dropdownMenuButton">
            <div class="rounded-full overflow-hidden p-[2px] border-[2.5px] border-primary">
                <div class="--bordered rounded-full">
                    <img src="{{ asset('img/agung.png') }}" class="w-[40px] h-[40px] bg-cover rounded-full" alt="">
                </div>
            </div>
            <div class="--icon">
                <i class="bi bi-chevron-down text-[24px] font-bold"></i>
            </div>
        </div>

        <div id="dropdownMenu" class="hidden absolute right-8 top-20 mt-2 w-48 bg-white rounded-lg shadow-lg z-10">
            <ul class="py-2">
                <li><a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a></li>
                <li><a href="/logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a></li>
            </ul>
        </div>
    </div>

    <button id="hamburger" class="lg:hidden text-2xl">
        <i class="fa-solid fa-bars"></i>
    </button>
</div>

<div id="mobileMenu" class="hidden flex-col gap-3 p-4 bg-[#F1F1F1] lg:hidden mx-4 md:mx-8 mt-2 rounded-lg">
    <a href="/" class="block p-2 rounded-md {{ request()->is('/') ? 'bg-white' : '' }}">Beranda</a>
    <a href="/produk" class="block p-2 rounded-md {{ request()->is('produk') ? 'bg-white' : '' }}">Produk</a>
    <a href="/pelatihan" class="block p-2 rounded-md {{ request()->is('pelatihan') ? 'bg-white' : '' }}">Pelatihan</a>
    <a href="/forum" class="block p-2 rounded-md {{ request()->is('forum') ? 'bg-white' : '' }}">Forum</a>
    <a href="/artikel" class="block p-2 rounded-md {{ request()->is('artikel') ? 'bg-white' : '' }}">Artikel</a>
    <a href="/tentang-kami" class="block p-2 rounded-md {{ request()->is('tentang-kami') ? 'bg-white' : '' }}">Tentang</a>
    
    {{-- Menambahkan tombol-tombol kanan ke menu mobile/tablet --}}
    <div class="border-t border-gray-300 mt-2 pt-3 flex flex-col gap-3">
        @if (request()->is('produk') || request()->is('detail_produk') || request()->is('pelatihan') || request()->is('pelatihan-offline') || request()->is('pelatihan-online'))
            <a href="/cart" class="flex items-center gap-3 p-2">
                <i class="fa-solid fa-cart-shopping w-6 text-center"></i>
                <span>Keranjang Belanja</span>
            </a>
        @else
            <a href="#" data-modal-target="search-modal" data-modal-toggle="search-modal" class="flex items-center gap-3 p-2">
                <i class="fa-solid fa-magnifying-glass w-6 text-center"></i>
                <span>Cari</span>
            </a>
        @endif
        <a href="/member" class="flex items-center gap-3 p-2">
            <img src="{{ asset('img/circle-bolt.png') }}" class="w-6 h-6" alt="">
            <span>Upgrade ke Premium</span>
        </a>
        <a href="/profile" class="flex items-center gap-3 p-2">
            <i class="fa-solid fa-user w-6 text-center"></i>
            <span>Profile</span>
        </a>
        <a href="/logout" class="flex items-center gap-3 p-2">
            <i class="fa-solid fa-right-from-bracket w-6 text-center"></i>
            <span>Logout</span>
        </a>
    </div>
</div>


<script>
    // Dropdown profile
    const dropdownButton = document.getElementById('dropdownMenuButton');
    const dropdownMenu = document.getElementById('dropdownMenu');
    
    // Pastikan elemen ada sebelum menambahkan event listener
    if (dropdownButton && dropdownMenu) {
        dropdownButton.addEventListener('click', (event) => {
            // Menghentikan event agar tidak langsung ditutup oleh document click listener
            event.stopPropagation();
            dropdownMenu.classList.toggle('hidden');
        });
    }

    // Menutup dropdown jika klik di luar area
    document.addEventListener('click', function (event) {
        if (dropdownMenu && !dropdownMenu.classList.contains('hidden')) {
            if (!dropdownButton.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        }
    });

    // Hamburger menu
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.toggle('hidden');
            // Ganti ikon hamburger
            if (isHidden) {
                hamburger.innerHTML = '<i class="fa-solid fa-bars"></i>';
            } else {
                hamburger.innerHTML = '<i class="fa-solid fa-times"></i>';
            }
        });
    }
</script>