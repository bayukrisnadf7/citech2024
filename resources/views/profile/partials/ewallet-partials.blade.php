<div class="--container flex flex-col gap-12">
    <div class="--card-information w-full grid grid-cols-2 gap-4">
        <div
            class="--card-ewallet-masuk relative overflow-hidden h-40 bg-[#1B1B1B] rounded-[20px] flex flex-col items-center justify-center">
            <p class="text-white text-[18px] z-10">Total Poin Kamu</p>
            <p class="text-white font-bold text-[34px] z-10">Rp. 15.000</p>
            <div class="--decoration absolute -right-10">
                <div
                    class="--circle w-[120px] h-[120px] border-[8px] border-[#363636] rounded-full flex items-center justify-center">
                    <div
                        class="--circle w-[80px] h-[80px] border-[8px] border-[#363636] rounded-full flex items-center justify-center">
                        <div class="--circle w-[40px] h-[40px] border-[8px] border-[#363636] rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="--card-ewallet-keluar h-40 bg-[#C7FF24] rounded-[20px] relative flex flex-col items-center justify-center overflow-hidden">
            <p class="text-[#171717] text-[18px] z-10">Total Poin Digunakan</p>
            <p class="text-[#171717] font-bold text-[34px] z-10">Rp. 540.000</p>
            <div class="--decoration absolute -right-10">
                <div
                    class="--circle w-[120px] h-[120px] border-[8px] border-[#171717] rounded-full flex items-center justify-center">
                    <div
                        class="--circle w-[80px] h-[80px] border-[8px] border-[#171717] rounded-full flex items-center justify-center">
                        <div class="--circle w-[40px] h-[40px] border-[8px] border-[#171717] rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="--card-activity grid grid-cols-2 gap-4">
        <div class="--activity-point-transaction">
            <p class="text-[18px]">Aktifitas Transaksi Poin</p>
            <div class="--card mt-6 flex flex-col gap-4">
                @for ($i = 0; $i < 10; $i++)
                    <div
                        class="--item w-full bg-white shadow-11 p-4 rounded-[20px] grid grid-cols-[2fr_1fr] items-center gap-2">
                        <div class="--title">
                            <div class="--date text-[12px] font-medium">12 Oktober 2024</div>
                            <div class="--sub-heading text-[14px]">Anda Membeli Kelas Online: <span
                                    class="font-medium underline">Pelatihan Pembuatan Program Surya Panel</span></div>
                        </div>
                        <div class="--point-digunakan text-[18px] whitespace-nowrap text-[#F1511B] font-medium"><i
                                class="bi bi-caret-down-fill"></i> -Rp. 240.000</div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="--activity-source-point">
            <p class="text-[18px]">Aktifitas Sumber Poin</p>
            <div class="--card mt-6 flex flex-col gap-4">
                @for ($i = 0; $i < 10; $i++)
                    <div
                        class="--item w-full bg-white shadow-11 p-4 rounded-[20px] grid grid-cols-[2fr_1fr] items-center gap-2">
                        <div class="--title">
                            <div class="--date text-[12px] font-medium">20 Oktober 2024</div>
                            <div class="--sub-heading text-[14px]">Anda Mendapatkan 10 Like, 20 Komentar dan 16 Share
                                dari artikel anda: <span class="font-medium underline">Apakah Teknologi Energi
                                    Terbarukan Mempengaruhi Kesehatan?</span></div>
                        </div>
                        <div class="--point-digunakan text-[18px] whitespace-nowrap text-[#31C13F] font-medium"><i
                                class="bi bi-caret-up-fill"></i> +Rp. 5.000</div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
