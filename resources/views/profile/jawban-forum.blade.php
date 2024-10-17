@extends('main')
@section('content')
    <div class="--container mt-12 px-60">
        <div class="--heading text-2xl text-[#171717] font-medium relative w-fit">
            Pengaturan Akun
            <img src="{{ asset('img/flow2.png') }}" class="w-full absolute top-ful left-0" alt="">
        </div>
        <div class="--content mt-12 flex gap-8 items-start">
            <div class="--component-sidebar sticky top-8">
            @include('profile.partials.aside')
            </div>
            <div class="--component-section py-8 px-6 rounded-[20px] bg-white shadow-1 w-full flex flex-col gap-8">
                @include('profile.partials.jawaban-forum-partials')
            </div>
        </div>
@endsection
