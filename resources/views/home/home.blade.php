@extends('main')
@section('content')
    @include('partials.modals.search-home-modal')
    <div class="--container w-full h-[700px] bg-[#f1f1f1] rounded-[30px] mt-4 relative p-12 grid grid-cols-2">
        <div class="--wrapper-component-1 flex flex-col gap-5">
            <div class="--title-pagar px-4 py-2 rounded-full bg-[#D1F16A] w-fit">
                <span class="text-[14px] font-bold text-black">#1 Produk & Pelatihan</span>
            </div>
            <div class="-title">
                <div class="text-[50px] font-bold text-black">Explore <span class="relative">
                        Produk
                        <img src="{{ asset('img/flow.png') }}" class="w-[200px] absolute left-0 bottom-[-10px] bg-cover" alt="">
                    </span> & <span class="relative">Pelatihan
                        <img src="{{ asset('img/flow2.png') }}" class="w-[250px] absolute left-0 bottom-[-10px] bg-cover" alt="">
                        </span> Teknologi <span class="text-[#307B74] !font-black">Energi</span> Terbarukan.</div>
            </div>
            <div class="--wrapper-description text-[16px] text-black">
                Temukan produk dan pelatihan terbaik untuk teknologi energi terbarukan. Dukung masa depan hijau dan berkelanjutan!
            </div>
            <div class="--button">
                <button class="px-4 py-2 bg-black text-white rounded-full text-[14px] font-medium shadow-1">
                    Produk Kami <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>
        <div class="--wrapper-component-2">
            <img src="{{ asset('img/university-study.png') }}" class="absolute right-0 bottom-0 w-[550px] h-auto bg-cover"
                alt="">
        </div>
    </div>
@endsection
