@extends('main')

@section('content')
    <div class="container flex justify-center items-center min-h-screen">
        <div class="flex gap-14">
            <div class="flex items-center flex-col justify-center">
                <div class="flex gap-2 justify-center">
                    <img src="img/logo.png" alt="logo" width="30" height="30">
                    <p class="text-2xl font-bold">RevoEnergy</p>
                </div>
                <div class="flex font-poppins text-5xl font-bold gap-2 mt-3">
                    <p>Solusi</p>
                    <p class="text-primary">Energy</p>
                </div>
                <p class="text-center font-bold text-5xl">Terbarukan</p>
                <img src="img/google.png" alt="google" class="bg-slate-100 p-3 rounded-full mt-5 cursor-pointer">
                <p class="mt-2 font-bold">Atau</p>
                <input type="text" class="input bg-slate-100 p-3 rounded-full w-full mt-6" placeholder="Masukan Nama Lengkap!">
                <input type="text" class="input bg-slate-100 p-3 rounded-full w-full mt-4" placeholder="Masukan Email Anda!">
                <input type="text" class="input bg-slate-100 p-3 rounded-full w-full mt-4" placeholder="Masukan Password!">
                <button class="bg-primary p-3 rounded-full font-bold text-white text-lg w-full mt-8">Daftar Akun</button>
                <p class="text-center mt-6">Sudah punya akun? <a href="/login" class="font-bold underline">Masuk!</a></p>

            </div>
            <div>
                <img src="img/login.png" alt="" width="650" height="650">
            </div>
        </div>
    </div>
@endsection