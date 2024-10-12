@extends('main')
@section('content')
    <div class="container flex justify-center items-center min-h-screen">
        <div class="flex gap-14">
            <div class="flex items-center flex-col justify-center">
                <div class="flex gap-2 justify-center">
                    <img src="img/logo.png" alt="logo" width="30" height="30">
                    <p class="text-2xl font-bold">RevoEnergy</p>
                </div>
                <div class="flex font-poppins text-5xl font-bold gap-2 mt-5">
                    <p>Solusi</p>
                    <p class="text-primary">Energy</p>
                </div>
                <p class="text-center font-bold text-5xl">Terbarukan</p>
                <input type="text" class="input bg-slate-100 p-3 rounded-full w-full mt-8" placeholder="Masukan Email Anda!">
                <input type="text" class="input bg-slate-100 p-3 rounded-full w-full mt-4" placeholder="Masukan Password!">
                <button class="bg-primary p-3 rounded-full font-bold text-white text-lg w-full mt-8">Masuk</button>
                <p class="text-center mt-8">Belum punya akun? <a href="/register" class="font-bold underline">Daftar!</a></p>

            </div>
            <div>
                <img src="img/login.png" alt="" width="650" height="650">
            </div>
        </div>
    </div>
@endsection