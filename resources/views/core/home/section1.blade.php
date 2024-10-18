<div class="--container w-full h-auto bg-[#f1f1f1] rounded-[30px] mt-4 relative p-10 grid grid-cols-2">
    <div class="--wrapper-component-1 flex flex-col gap-5">
        <div class="--title-pagar px-4 py-2 rounded-full bg-[#D1F16A] w-fit">
            <span class="text-[14px] font-bold text-black">#1 Produk & Pelatihan</span>
        </div>
        <div class="-title">
            <div class="text-[50px] font-bold text-black">Explore <span class="relative">
                    Produk
                    <img src="{{ asset('img/flow.png') }}" class="w-[200px] absolute left-0 bottom-[-10px] bg-cover"
                        alt="">
                </span> & <span class="relative">Pelatihan
                    <img src="{{ asset('img/flow2.png') }}" class="w-[250px] absolute left-0 bottom-[-10px] bg-cover"
                        alt="">
                </span> Teknologi <span class="text-[#307B74] !font-black">Energi</span> Terbarukan.</div>
        </div>
        <div class="--wrapper-description text-[16px] text-black">
            Temukan produk dan pelatihan terbaik untuk teknologi energi terbarukan. Dukung masa depan hijau dan
            berkelanjutan!
        </div>
        <div class="--button">
            <button class="px-4 py-2 bg-black text-white rounded-full text-[14px] font-medium shadow-1" onclick="window.location.href='/produk'">
                Produk Kami <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <div class="--component-card grid grid-cols-[1fr_2fr] gap-2">
            <div class="--card1 p-4 rounded-[20px] bg-[#307B74] flex flex-col gap-8 justify-between">
                <p class="text-white text-[18px] font-medium">Pelatihan Dengan Guru <span
                        class="text-[#D1F16A]">Bersetifikat</span> Terbaik</p>
                <div class="--count-data text-white">
                    <p class="text-[50px] font-medium">32+</p>
                    <p class="text-[16px]">1650+ Lebih Mengikuti Kursus</p>
                </div>
            </div>
            <div class="relative">
                <img src="{{ asset('img/Frame 25.png') }}" oncontextmenu="return false;" class="w-full object-contain" draggable="false" alt="">
                <a href="/pelatihan" class="absolute bottom-0 right-0 w-[140px] h-[45px]"></a>
            </div>
            <div
                class="--card2 hidden w-full bg-gradient-to-l from-[#D1F16A] to-[#f1f1f1] from-[70%] to-[30%] rounded-[30px] relative flex-col justify-between">
                <div class="--images w-2/3 h-1/2 bg-[#f1f1f1] pr-2 pb-2 relative rounded-br-[20px]">
                    <img src="{{ asset('img/images-coding.png') }}" class="w-full h-full object-cover rounded-[20px]"
                        alt="">
                    <div class="w-[20px] h-[20px] bg-[#D1F16A] rounded-tl-full absolute left-0 top-full"></div>
                </div>
                <div
                    class="--desription h-full w-fit flex justify-items-center items-center p-4 rounded-[20px] bg-[#D1F16A] relative">
                    <p class="text-[18px] font-medium w-2/3">Upgrade Skill dengan belajar Teknologi Energi Terbarukan.
                    </p>
                </div>
                <div class="--button absolute p-1.5 bg-[#f1f1f1] right-0 bottom-0 z-30 rounded-tl-[20px]">
                    <button class="px-4 py-2 bg-black text-white rounded-full text-[14px] font-medium shadow-1">
                        Produk Kami <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="--wrapper-component-2">
        <img src="{{ asset('img/university-study.png') }}" class="absolute right-0 bottom-0 w-[620px] h-auto object-cover"
            alt="">
        <div class="--square-decoration flex gap-4 absolute right-[70px] top-[100px]">
            <div class="--square-group-1 flex flex-col gap-4">
                <div class="--square w-[45px] h-[55px] bg-white rounded-[10px] blur-[2px]"></div>
                <div class="--square w-[45px] h-[55px] bg-white rounded-[10px] blur-[2px]"></div>
            </div>
            <div class="--square-group-2 flex flex-col gap-4 mt-12">
                <div class="--square w-[45px] h-[55px] bg-white rounded-[10px] blur-[2px]"></div>
                <div class="--square w-[45px] h-[55px] bg-white rounded-[10px] blur-[2px]"></div>
            </div>
        </div>
        <div
            class="--card-overlay absolute bg-[#307B74] rounded-[20px] text-white p-3 flex gap-2 w-fit items-center top-[250px] right-[400px]">
            <div class="--images w-[50px] h-[50px] rounded-[10px] overflow-hidden"><img
                    src="{{ asset('img/Rectangle 16.png') }}" class="w-full bg-cover" alt=""></div>
            <div class="--title text-[14px] font-medium">Produk & Pelatihan <br>Energi Terbarukan</div>
        </div>
    </div>
</div>
