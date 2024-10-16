
    <aside id="cta-button-sidebar"
        class="z-40 rounded-[20px] w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-auto px-3 py-4 overflow-y-auto rounded-[20px] bg-white shadow-1">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('profile.index') }}"
                        class="flex items-center p-2 text-[#171717] rounded-lg {{ Route::currentRouteName() == 'profile.index' ? 'bg-[#D1F16A]' : '' }} hover:bg-[#D1F16A]">
                        <span class="ms-3"><i class="bi bi-person-fill"></i> Pengaturan Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.riwayat_transaksi') }}"
                        class="flex items-center p-2 text-[#171717] rounded-lg {{ Route::currentRouteName() == 'profile.riwayat_transaksi' ? 'bg-[#D1F16A]' : '' }} hover:bg-[#D1F16A]">
                        <span class="ms-3"><i class="bi bi-journal-bookmark-fill"></i> Riwayat
                            Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.pelatihan_diikuti') }}"
                        class="flex items-center p-2 text-[#171717] rounded-lg {{ Route::currentRouteName() == 'profile.pelatihan_diikuti' ? 'bg-[#D1F16A]' : '' }} hover:bg-[#D1F16A]">
                        <span class="ms-3"><i class="bi bi-backpack-fill"></i> Pelatihan Diikuti</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.point_ewallet') }}"
                        class="flex items-center p-2 text-[#171717] rounded-lg {{ Route::currentRouteName() == 'profile.point_ewallet' ? 'bg-[#D1F16A]' : '' }} hover:bg-[#D1F16A]">
                        <span class="ms-3"><i class="bi bi-wallet-fill"></i> Point & E-Wallet</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.ubah_password') }}"
                        class="flex items-center p-2 text-[#171717] rounded-lg {{ Route::currentRouteName() == 'profile.ubah_password' ? 'bg-[#D1F16A]' : '' }} hover:bg-[#D1F16A]">
                        <span class="ms-3"><i class="bi bi-key-fill"></i> Ubah Password</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.kelola_artikel') }}"
                        class="flex items-center p-2 text-[#171717] rounded-lg {{ Route::currentRouteName() == 'profile.kelola_artikel' ? 'bg-[#D1F16A]' : '' }} hover:bg-[#D1F16A]">
                        <span class="ms-3"><i class="bi bi-journal-album"></i> Kelola Artikel</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.pertanyaan_forum') }}"
                        class="flex items-center p-2 text-[#171717] rounded-lg {{ Route::currentRouteName() == 'profile.pertanyaan_forum' ? 'bg-[#D1F16A]' : '' }} hover:bg-[#D1F16A]">
                        <span class="ms-3"><i class="bi bi-chat-quote-fill"></i> Pertanyaan Forum</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.jawaban_forum') }}"
                        class="flex items-center p-2 text-[#171717] rounded-lg {{ Route::currentRouteName() == 'profile.jawaban_forum' ? 'bg-[#D1F16A]' : '' }} hover:bg-[#D1F16A]">
                        <span class="ms-3"><i class="bi bi-chat-left-text-fill"></i> Jawaban Forum</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.bookmark') }}"
                        class="flex items-center p-2 text-[#171717] rounded-lg {{ Route::currentRouteName() == 'profile.bookmark' ? 'bg-[#D1F16A]' : '' }} hover:bg-[#D1F16A]">
                        <span class="ms-3"><i class="bi bi-bookmark-fill"></i> Bookmark</span>
                    </a>
                </li>
            </ul>
            <div id="dropdown-cta" class="p-4 mt-6 rounded-lg bg-blue-50 dark:bg-blue-900" role="alert">
                <div class="flex items-center mb-3">
                    <span
                        class="bg-orange-100 text-orange-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Daftar
                        Member!</span>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 inline-flex justify-center items-center w-6 h-6 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800"
                        data-dismiss-target="#dropdown-cta" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <p class="mb-3 text-sm text-blue-800 dark:text-blue-400">
                    Daftarkan dirimu sebagai member dan nikmati diskon khusus untuk produk dan pelatihan! Dengan
                    keanggotaan, kamu akan mendapatkan akses ke penawaran harga terbaik yang hanya tersedia
                    untuk member terdaftar.
                </p>
                <a class="text-sm text-blue-800 underline font-bold hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300"
                    href="#">Daftar Sekarang!</a>
            </div>
        </div>
    </aside>
