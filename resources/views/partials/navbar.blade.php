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
            <li class="hover:bg-white p-2 rounded-full w-28 text-center {{ request()->is('produk') ? 'bg-white' : '' }}">
                Produk
            </li>
        </a>
        <a href="/pelatihan">
            <li
                class="hover:bg-white p-2 rounded-full w-28 text-center {{ request()->is('pelatihan') ? 'bg-white' : '' }}">
                Pelatihan
            </li>
        </a>
        <a href="/forum">
            <li class="hover:bg-white p-2 rounded-full w-28 text-center {{ request()->is('forum') ? 'bg-white' : '' }}">
                Forum
            </li>
        </a>
        <a href="/artikel">
            <li class="hover:bg-white p-2 rounded-full w-28 text-center {{ request()->is('artikel') ? 'bg-white' : '' }}">
                Artikel
            </li>
        </a>
        <a href="/tentang-kami">
            <li class="hover:bg-white p-2 rounded-full w-28 text-center {{ request()->is('tentang-kami') ? 'bg-white' : '' }}">
                Tentang
            </li>
        </a>
    </ul>
    <div class="flex gap-3 items-center">
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
                    <img src="{{ asset('img/gungzzlee.jpg') }}" class="w-[40px] h-[40px] bg-cover rounded-full" alt="">
                </div>
            </div>
            <div class="--icon">
                <i class="bi bi-chevron-down text-[24px] font-bold"></i>
            </div>
        </div>

        <!-- Dropdown menu -->
        <div id="dropdownMenu" class="hidden absolute right-0 mt-40 w-48 bg-white rounded-lg shadow-lg z-10">
            <ul class="py-2">
                <li>
                    <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                </li>
                <li>
                    <a href="/logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    const dropdownButton = document.getElementById('dropdownMenuButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Close dropdown if clicked outside
    document.addEventListener('click', function(event) {
        if (!dropdownButton.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>
