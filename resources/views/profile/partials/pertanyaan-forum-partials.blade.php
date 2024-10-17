<div class="--container flex flex-col gap-6">
    <div class="--filter flex flex-col gap-4">
        <div class="--filtering w-full gap-4">
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
        </div>
        <div class="--filtering-2 flex items-center justify-between">
            <div class="--filtering-card flex items-center gap-2">
                <span class="text-[14px]">Berdasarkan:</span>
                <div class="--filter flex items-center gap-3">
                    <div
                        class="--card p-2 shadow-11 bg-[#D1F16A] hover:bg-[#D1F16A] cursor-pointer rounded-[10px] text-center text-[14px] font-normal">
                        Like Terbanyak</div>
                    <div
                        class="--card p-2 shadow-11 rounded-[10px] hover:bg-[#D1F16A] cursor-pointer text-center text-[14px] font-normal">
                        Balasan Terbanyak</div>
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
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Pertanyaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Like
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Komentar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                    <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 underline font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        panel.png
                    </td>
                    <td class="px-6 py-4">
                        20 Like
                    </td>
                    <td class="px-6 py-4">
                        20 Komentar
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#"
                            class="font-medium text-red-600 dark:text-red-500 hover:underline ml-6">Hapus</a>
                    </td>
                </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
