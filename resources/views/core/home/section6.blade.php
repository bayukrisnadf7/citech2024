<div class="--container flex flex-col gap-8">
    <div class="--heading">
        <div class="--heading-text text-[32px] md:text-[44px] font-bold text-black">Artikel Terbaru</div>
        <div class="--wrapper-description flex flex-col sm:flex-row justify-between sm:items-center gap-2 mt-2">
            <div class="--description text-[16px] text-[#798092]">Tambah wawasan dan pengetahuan seputar energi
                terbarukan</div>
            <div class="--more"><a href="/artikel" class="underline text-[16px] font-medium text-black">Lihat Semua <i
                        class="bi bi-arrow-right"></i></a></div>
        </div>
    </div>
    <div class="--card-article flex flex-col gap-4">
        {{-- Kartu Artikel 1 dengan animasi float --}}
        <div class="--card grid grid-cols-1 md:grid-cols-[1fr_2fr] gap-4 p-4 shadow-6 rounded-[14px] animate-continuous-float">
            <div class="--images"><img src="{{ asset('img/image 17.png') }}"
                    class="aspect-[16/9] object-cover w-full rounded-[14px]" alt="Limbah Sampah Menjadi Energi"></div>
            <div class="--text flex flex-col justify-between">
                <div>
                    <p class="text-[20px] md:text-[24px] font-bold">Pemanfaatan Limbah Sampah Menjadi Energi</p>
                    <p class="text-[14px] mt-4">Proses mengubah limbah, terutama sampah organik, menjadi sumber energi
                        yang bermanfaat, seperti listrik, panas, atau bahan bakar. Teknologi ini tidak hanya membantu
                        mengurangi jumlah limbah yang berakhir di tempat pembuangan akhir (TPA), tetapi juga
                        berkontribusi pada produksi energi terbarukan yang lebih bersih dan ramah lingkungan.</p>
                </div>
                <p class="text-[14px] font-medium text-[#307B74] mt-4"><a href="/detail_artikel" class="hover:underline">Baca
                        Selenkapnya <i class="bi bi-arrow-right"></i></a></p>
            </div>
        </div>
        {{-- Kartu Artikel 2 dengan animasi float dan sedikit delay --}}
        <div class="--card grid grid-cols-1 md:grid-cols-[1fr_2fr] gap-4 p-4 shadow-6 rounded-[14px] animate-continuous-float" style="animation-delay: -2s;">
            <div class="--images"><img src="{{ asset('img/artikel-home.png') }}"
                    class="aspect-[16/9] object-cover w-full rounded-[14px]" alt="Produk Energi Terbarukan"></div>
            <div class="--text flex flex-col justify-between">
                <div>
                    <p class="text-[20px] md:text-[24px] font-bold">Wawasan Penting tentang Produk Energi Terbarukan</p>
                    <p class="text-[14px] mt-4">Merujuk pada pemahaman tentang perkembangan, manfaat, tantangan, dan
                        peluang dari berbagai sumber dan produk energi yang dapat diperbarui. Energi terbarukan
                        memainkan peran vital dalam transisi dunia </p>
                </div>
                <p class="text-[14px] font-medium text-[#307B74] mt-4"><a href="/detail_artikel" class="hover:underline">Baca
                        Selenkapnya <i class="bi bi-arrow-right"></i></a></p>
            </div>
        </div>
    </div>
</div>

{{-- SCRIPT DIHAPUS KARENA TIDAK DIPERLUKAN UNTUK ANIMASI BERULANG --}}

{{-- STYLE BARU UNTUK ANIMASI FLOAT YANG BERULANG --}}
<style>
    @keyframes float {
      0% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-8px); /* Mengambang ke atas sejauh 8px */
      }
      100% {
        transform: translateY(0px);
      }
    }

    .animate-continuous-float {
        /* Menjalankan animasi 'float' selama 4 detik, dengan gerakan ease-in-out, dan berulang tanpa henti */
        animation: float 4s ease-in-out infinite;
    }
</style>