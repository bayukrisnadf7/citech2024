<div class="--container flex flex-col gap-10">
    <div class="--heading text-center animate-fade-up">
        <div class="--heading-text text-3xl md:text-[44px] font-bold text-black leading-tight">
            Bangun Impian, Jadilah Pelopor 
            <span class="text-[#307B74] animate-bounce">Energi Terbarukan!</span>
        </div>
        <div class="--description text-base text-[#798092] mt-4 max-w-3xl mx-auto animate-fade-in">
            "Bangun Impian, Jadilah Pelopor Energi Terbarukan! Dapatkan pelatihan intensif dari mentor terbaik, tersedia secara offline dan online. Kuasai teknologi energi terbarukan untuk masa depan berkelanjutan!"
        </div>
    </div>

    <div class="--mentor-section grid grid-cols-1 lg:grid-cols-[1fr_2fr] gap-8">
        <div class="--component1 font-medium text-2xl md:text-[38px] flex flex-col gap-4 animate-fade-right">
            <div class="--text-1">AMATI.<br>PELAJARI.<br>PRAKTEKKAN.</div>
            <div class="--text-2 relative text-[#307B74] font-medium animate-bounce">
                JADILAH AHLI.
                <img src="{{ asset('img/flow2.png') }}" 
                     class="w-[270px] bg-cover absolute left-0 bottom-[-10px]" alt="">
            </div>
            <div class="--text-3 mt-4 flex flex-col gap-6">
                <p class="text-sm md:text-base text-[#798092] animate-fade-up">
                    Dapatkan benefit berupa sertifikat bergengsi, relasi dengan mentor terbaik dan teman satu kelas.
                </p>
                <div class="--button animate-fade-up">
                    <button onclick="window.location.href='/pelatihan'"
                        class="p-2 bg-black text-white rounded-full text-[14px] font-medium shadow-1 flex items-center gap-2 transition duration-500 hover:scale-110 hover:bg-[#307B74]">
                        Daftar/Konsultasi 
                        <div class="min-w-[20px] min-h-[20px] w-[40px] h-[40px] flex justify-center items-center bg-white p-2 rounded-full">
                            <i class="bi bi-arrow-right text-black"></i>
                        </div>
                    </button>
                </div>
                <div class="--data flex flex-col sm:flex-row items-center gap-4 animate-fade-up">
                    <div class="--pelatihan-offline text-center hover:scale-110 transition duration-500">
                        <p class="text-2xl md:text-[30px] font-medium">6800K+</p>
                        <p class="text-sm md:text-base text-[#307B74]">Siswa Pelatihan Offline</p>
                    </div>
                    <div class="--divider h-12 w-[6px] bg-[#171717] rounded-full hidden sm:block"></div>
                    <div class="--pelatihan-online text-center hover:scale-110 transition duration-500">
                        <p class="text-2xl md:text-[30px] font-medium">3400K+</p>
                        <p class="text-sm md:text-base text-[#307B74]">Siswa Pelatihan Online</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="--component2 grid grid-cols-1 md:grid-cols-[2fr_1fr_1fr] gap-8">
            <div class="--images-1 relative animate-fade-left hover:scale-105 transition duration-700">
                <img src="{{ asset('img/Group 13.png') }}" class="w-full h-full object-cover rounded-[30px]" alt="">
                <div class="--title bg-white flex items-center gap-2 sm:gap-4 !absolute p-2 sm:p-4 bottom-8 sm:bottom-[80px] rounded-tr-full rounded-br-full shadow-lg animate-fade-up">
                    <div class="--name-passion">
                        <div class="--name text-base sm:text-xl font-bold">Patrick Star.</div>
                        <div class="--passion text-[#798092] text-xs">Renewable Energy Engineer</div>
                    </div>
                    <div class="--images"><img src="{{ asset('img/shield-trust 1.png') }}" class="w-8 h-8 sm:w-10 sm:h-10 object-cover" alt=""></div>
                </div>
            </div>
            <div class="--images-3 animate-fade-up hover:scale-105 transition duration-700">
                <img src="{{ asset('img/Group 12.png') }}" class="w-full h-full object-cover rounded-[30px]" alt="">
            </div>
            <div class="--images-2 animate-fade-up hover:scale-105 transition duration-700 delay-200">
                <img src="{{ asset('img/Group 10.png') }}" class="w-full h-full object-cover rounded-[30px]" alt="">
            </div>
        </div>
    </div>
</div>