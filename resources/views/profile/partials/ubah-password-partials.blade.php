<div class="--container">
    <div class="flex flex-col justify-center items-center">
        <img src="{{ asset('img/Writers block-rafiki.png') }}" class="w-1/2 object-cover" alt="">
        <p class="text-4xl font-bold">Ubah Password</p>
        <p class="w-1/2 text-center text-[14px]">Silahakan masukkan email anda untuk keperluan reset password dan pnerimaan kode OTP melalui pesan email</p>
        <div class="w-1/2 mt-4">
            <input type="text" id="last_name"
                class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#D1F16A] focus:border-[#D1F16A] block p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D1F16A] dark:focus:border-[#D1F16A]"
                placeholder="Masukkan Email!" readonly required />
        </div>
        <button class="w-1/2 mt-4 bg-[#171717] text-white font-medium py-2 px-4 rounded-[10px]">Kirim OTP</button>
    </div>
</div>
