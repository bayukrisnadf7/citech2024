<div class="--container flex flex-col gap-8">
    <div class="--heading">
        <div class="--heading-text text-[44px] font-bold text-black">Artikel Terbaru</div>
        <div class="--wrapper-description flex justify-between items-center">
            <div class="--description text-[16px] text-[#798092]">Tambah wawasan dan pengetahuan seputar energi
                terbarukan</div>
            <div class="--more"><a href="#" class="underline text-[16px] font-medium text-black">Lihat Semua <i
                        class="bi bi-arrow-right"></i></a></div>
        </div>
    </div>
    <div class="--card-article flex flex-col gap-4">
        @for ($i = 0; $i < 2; $i++)
            <div class="--card grid grid-cols-[1fr_2fr] gap-4 p-4 shadow-6 rounded-[14px]">
                <div class="--images"><img src="{{ asset('img/image 9.png') }}"
                        class="aspect-[16/9] object-cover w-full rounded-[14px]" alt=""></div>
                <div class="--text flex flex-col justify-between">
                    <div>
                        <p class="text-[24px] font-bold">Pemanfaatan Limbah Sampah Menjadi Energi</p>
                        <p class="text-[14px] mt-4">Proses mengubah limbah atau sampah menjadi sumber energi, seperti
                            listrik atau panas, melalui berbagai metode teknologi. Ini mencakup beberapa pendekatan
                            seperti pembakaran langsung, pirolisis, gasifikasi, dan produksi biogas dari limbah organik
                            Teknologi biogas, misalnya, mengubah limbah organik seperti kotoran hewan, sisa makanan, dan
                            limbah pertanian.</p>
                    </div>
                    <p class="text-[14px] font-medium text-[#307B74]"><a href="" class="hover:underline">Baca
                            Selenkapnya <i class="bi bi-arrow-right"></i></a></p>
                </div>
            </div>
        @endfor
    </div>
</div>
