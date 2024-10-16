<div class="--container flex flex-col gap-8">
    <div class="--filtering-2 flex items-center justify-between">
        <div class="--filtering-card flex items-center gap-2">
            <span class="text-[14px]">Berdasarkan:</span>
            <div class="--filter flex items-center gap-3">
                <div
                    class="--card p-2 shadow-11 bg-[#D1F16A] hover:bg-[#D1F16A] cursor-pointer rounded-[10px] text-center text-[14px] font-normal">
                    Kelas Sedang Dipelajari</div>
                <div
                    class="--card p-2 shadow-11 rounded-[10px] hover:bg-[#D1F16A] cursor-pointer text-center text-[14px] font-normal">
                    Kelas Diselesaikan</div>
            </div>
        </div>
        <div class="--filter-icon">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="text-black bg-[#f1f1f1] hover:bg-[#D1F16A] focus:ring-4 focus:outline-none focus:ring-[#D1F16A] font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Kelas Online <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
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
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kelas Online</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kelas Offline</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="--class w-full grid grid-cols-3 gap-4">
        @for ($i = 0; $i < 8; $i++)
        <div class="pelatihan-card bg-white rounded-lg shadow h-auto" data-level="menengah" data-category="online">
            <img src="{{ asset('img/pelatihan/pelatihan1.png') }}" alt="Pelatihan Image" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-2">
                <h3 class="text-lg font-semibold text-black mb-2">Pembuatan Sistem Hybrid Energi Terbarukan</h3>
                <p class="text-sm text-gray-400 mb-2">Pelatihan yang mengajarkan cara menggabungkan beberapa sumber...</p>
                <p class="text-sm text-gray-400 mb-3">Pengajar: <span class="font-normal text-black">Prof. Dr. Ir. Ahmad Fajar, M.Eng</span></p>

                <div class="mb-3">
                    <div class="flex items-center gap-x-1">
                        <img src="{{ asset('img/pelatihan/bar-level-menengah.png') }}" class="w-auto h-3.5">
                        <p class="text-sm font-semibold">Level: <span class="font-normal">Menengah</span></p>
                    </div>
                    <div class="flex items-center gap-x-1">
                        <img src="{{ asset('img/pelatihan/clock.png') }}" class="w-auto h-4">
                        <p class="text-sm font-semibold">Durasi: <span class="font-normal">3 Jam</span></p>
                    </div>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div class="bg-[#D1F16A] px-3 py-0.5 rounded-full">
                        <p class="text-sm text-black font-medium">Online</p>
                    </div>
                    <div class="flex items-center ml-auto space-x-2">
                        <button class="bg-[#171717] text-white px-2 py-2.5 text-sm font-medium rounded-xl">Koridor Kelas</button>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
