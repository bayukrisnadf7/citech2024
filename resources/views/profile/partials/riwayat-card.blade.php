<div class="--container flex flex-col gap-4">
    <div class="--filtering w-full grid grid-cols-[2fr_1fr] gap-4">
        <form class="w-full">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#D1F16A] focus:border-[#D1F16A] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Mockups, Logos..." required />
            </div>
        </form>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                </svg>
            </div>
            <input datepicker id="default-datepicker" type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#D1F16A] focus:border-[#D1F16A] block w-full h-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Select date">
        </div>
    </div>
    <div class="--filtering-2 flex items-center justify-between">
        <div class="--filtering-card flex items-center gap-2">
            <span class="text-[14px]">Berdasarkan:</span>
            <div class="--filter flex items-center gap-3">
                <div
                    class="--card p-2 shadow-11 bg-[#D1F16A] hover:bg-[#D1F16A] cursor-pointer rounded-[10px] text-center text-[14px] font-normal">
                    Semua</div>
                <div
                    class="--card p-2 shadow-11 rounded-[10px] hover:bg-[#D1F16A] cursor-pointer text-center text-[14px] font-normal">
                    Berlangsung</div>
                <div
                    class="--card p-2 shadow-11 rounded-[10px] hover:bg-[#D1F16A] cursor-pointer text-center text-[14px] font-normal">
                    Selesai</div>
                <div
                    class="--card p-2 shadow-11 rounded-[10px] hover:bg-[#D1F16A] cursor-pointer text-center text-[14px] font-normal">
                    Dibatalkan</div>
            </div>
        </div>
        <div class="--filter-icon">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="text-black bg-[#f1f1f1] hover:bg-[#D1F16A] focus:ring-4 focus:outline-none focus:ring-[#D1F16A] font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Terbaru <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Terbaru</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Terlama</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="--product mt-5 flex flex-col gap-4">
        @for ($i=0; $i < 15; $i++)
        <div
            class="group mx-2 grid grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow-11 transition sm:mx-auto">
            <a href="#"
                class="order-2 col-span-1 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
                <div class="group relative h-20 w-20 overflow-hidden rounded-lg">
                    <img src="{{ asset('img/produk-1.png') }}" alt=""
                        class="h-full w-full object-cover text-gray-700" />
                </div>
            </a>
            <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
                <h3 class="text-[12px] font-bold text-gray-600">20 November 2024, No Resi: RE0098174635</h3>
                <a href="#" class="overflow-hidden pr-7 text-lg font-semibold sm:text-xl">Surya Panel Mini</a>
                <p class="overflow-hidden pr-7 text-[14px] font-medium mb-3">7 Barang, Subtotal: 300.000</p>
                <div
                    class="flex items-center space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                    <div class="">Status:<span
                            class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900">Selesai</span>
                    </div>
                    <div class="">Total Belanja:<span
                            class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">Rp. 250.000,00</span>
                    </div>
                </div>
                <div class="--action w-full flex items-center mt-8 justify-end gap-2">
                    <p class="text-[14px] font-medium text-[#307B74]">Lihat Detail Transaski</p>
                    <button class="text-[14px] font-medium shadow-1 bg-[#D1F16A] text-black px-4 py-2 rounded-[10px]">Beli Lagi</button>
                    <button class="text-[14px] font-medium bg-white shadow-11 text-black px-4 py-2 rounded-[10px]">Chat Admin</button>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
