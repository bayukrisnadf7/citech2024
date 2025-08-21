<div class="--container w-full h-auto bg-[#f1f1f1] rounded-[30px] mt-4 relative p-6 md:p-10 grid grid-cols-1 lg:grid-cols-2 overflow-hidden">
    <div class="--wrapper-component-1 flex flex-col gap-5 animate-fade-up">
        <div class="--title-pagar px-4 py-2 rounded-full bg-[#D1F16A] w-fit transition duration-500 hover:scale-105">
            <span class="text-[14px] font-bold text-black">#1 Produk & Pelatihan</span>
        </div>
        <div class="-title animate-fade-right">
            <div class="text-[36px] md:text-[50px] font-bold text-black leading-tight">
                Explore
                <span class="relative inline-block animate-bounce">
                    Produk
                    <img src="{{ asset('img/flow.png') }}" class="w-[150px] md:w-[200px] absolute left-0 bottom-[-10px]" alt="">
                </span> &
                <span class="relative inline-block animate-pulse">
                    Pelatihan
                    <img src="{{ asset('img/flow2.png') }}" class="w-[200px] md:w-[250px] absolute left-0 bottom-[-10px]" alt="">
                </span>
                Teknologi <span class="text-[#307B74] !font-black animate-wiggle">Energi</span> Terbarukan.
            </div>
        </div>
        <div class="--wrapper-description text-[16px] text-black animate-fade-up">
            Temukan produk dan pelatihan terbaik untuk teknologi energi terbarukan.
            Dukung masa depan hijau dan berkelanjutan!
        </div>
        <div class="--button animate-fade-up">
            <button onclick="window.location.href='/produk'"
                class="px-4 py-2 bg-black text-white rounded-full text-[14px] font-medium shadow-1 transition duration-500 hover:scale-110 hover:bg-[#307B74]">
                Produk Kami <i class="bi bi-arrow-right"></i>
            </button>
        </div>

        <div class="--component-card grid grid-cols-1 sm:grid-cols-[1fr_2fr] gap-4 mt-4">
            <div class="--card1 p-4 rounded-[20px] bg-[#307B74] flex flex-col gap-8 justify-between animate-fade-right">
                <p class="text-white text-[18px] font-medium">Pelatihan Dengan Guru <span
                        class="text-[#D1F16A]">Bersetifikat</span> Terbaik</p>
                <div class="--count-data text-white">
                    <p class="text-[50px] font-medium">32+</p>
                    <p class="text-[16px]">1650+ Lebih Mengikuti Kursus</p>
                </div>
            </div>
            <div class="relative animate-fade-left">
                <img src="{{ asset('img/Frame 25.png') }}" class="w-full object-contain transition duration-500 hover:scale-105" alt="">
                <a href="/pelatihan" class="absolute bottom-0 right-0 w-[140px] h-[45px]"></a>
            </div>
        </div>
    </div>

    <div class="--wrapper-component-2 relative animate-fade-left hidden lg:block">
        <img src="{{ asset('img/university-study.png') }}" class="absolute right-0 bottom-0 w-[620px] h-auto object-cover animate-fade-in" alt="">

        <div class="--square-decoration flex gap-4 absolute right-[70px] top-[100px] animate-float">
            <div class="--square-group-1 flex flex-col gap-4">
                <div class="--square w-[45px] h-[55px] bg-white rounded-[10px] blur-[2px]"></div>
                <div class="--square w-[45px] h-[55px] bg-white rounded-[10px] blur-[2px]"></div>
            </div>
            <div class="--square-group-2 flex flex-col gap-4 mt-12">
                <div class="--square w-[45px] h-[55px] bg-white rounded-[10px] blur-[2px]"></div>
                <div class="--square w-[45px] h-[55px] bg-white rounded-[10px] blur-[2px]"></div>
            </div>
        </div>

        <div class="--card-overlay absolute bg-[#307B74] rounded-[20px] text-white p-3 flex gap-2 w-fit items-center top-[250px] right-[400px] shadow-lg animate-fade-up hover:scale-105 transition duration-500">
            <div class="--images w-[50px] h-[50px] rounded-[10px] overflow-hidden">
                <img src="{{ asset('img/Rectangle 16.png') }}" class="w-full bg-cover" alt="">
            </div>
            <div class="--title text-[14px] font-medium">Produk & Pelatihan <br>Energi Terbarukan</div>
        </div>
    </div>
</div>