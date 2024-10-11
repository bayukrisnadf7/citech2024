@extends('main')
@section('content')
<div class="flex items-center gap-28">
    <div class="flex w-full gap-3">
        <div class="relative w-full">
            <i class="fa-solid fa-magnifying-glass absolute top-4 left-3 text-slate-300"></i>
            <input type="text" placeholder="Cari Nama Barang" class="border p-3 px-10 w-full rounded-lg">
        </div>
        <div class="flex gap-3 items-center">
            <p>URUTKAN:</p>
            <p class="border p-2 rounded-xl">Terbaru</p>
        </div>
    </div>
</div>
<div class="mt-5">
    <hr>
</div>
@endsection