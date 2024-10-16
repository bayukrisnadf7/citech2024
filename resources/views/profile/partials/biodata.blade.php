<div class="--image-btnaction flex items-center gap-12">
    <div class="--image"><img src="{{ asset('img/20230716_202926.jpg') }}"
            class="rounded-[20px] min-w-72 object-cover w-72" alt=""></div>
    <div class="flex flex-col gap-7">
        <div class="--btn flex items-center gap-4">
            <div class="--ubah"><button
                    class="px-6 py-4 shadow-6 bg-[#D1F16A] text-[#171717] font-medium rounded-[14px]">Ubah
                    Foto</button></div>
            <div class="--ubah"><button
                    class="px-6 py-4 bg-[#f1f1f1] text-[#171717] font-medium rounded-[14px]">Hapus
                    Foto</button></div>
        </div>
        <div class="--point flex items-center gap-4">
            <span class="text-[#798092]">Poin:</span>
            <div
                class="w-[35px] h-[35px] min-w-[35px] min-h-[35px] flex justify-center items-center bg-[#f1f1f1] rounded-full">
                <i class="bi bi-piggy-bank-fill"></i>
            </div>
            <span class="font-bold text-[20px]">Rp. 15.000</span>
        </div>
        <div class="--warning bg-orange-100 p-4 rounded-lg text-orange-800">
            Poin bisa anda gunakan untuk membeli produk dan pelatihan. <span class="underline font-bold">Lihat cara mendapatkan point.</span>
        </div>
    </div>
</div>
<div class="--input-data">
    <div class="flex items-center mb-4">
        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-[#D1F16A] dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aktifkan Mode Edit</label>
    </div>
    <form>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="first_name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Awal</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#D1F16A] focus:border-[#D1F16A] block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D1F16A] dark:focus:border-[#D1F16A]"
                    placeholder="John" value="Agung Kurniawan" required readonly/>
            </div>
            <div>
                <label for="last_name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Akhir</label>
                <input type="text" id="last_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#D1F16A] focus:border-[#D1F16A] block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D1F16A] dark:focus:border-[#D1F16A]"
                    placeholder="Doe" value="Kurniawan" readonly required />
            </div>
            <div>
                <label for="company"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                <input type="text" id="company"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#D1F16A] focus:border-[#D1F16A] block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D1F16A] dark:focus:border-[#D1F16A]"
                    placeholder="Flowbite" value="Software Engineer" readonly required />
            </div>
            <div>
                <label for="phone"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telephone</label>
                <input type="tel" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#D1F16A] focus:border-[#D1F16A] block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D1F16A] dark:focus:border-[#D1F16A]"
                    placeholder="123-45-678" value="081331640909" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" readonly required />
            </div>
            <div>
                <label for="website"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                <input type="url" id="website"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#D1F16A] focus:border-[#D1F16A] block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D1F16A] dark:focus:border-[#D1F16A]"
                    placeholder="flowbite.com" value="Laki-Laki" readonly required />
            </div>
            <div>
                <label for="visitors"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="visitors"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#D1F16A] focus:border-[#D1F16A] block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D1F16A] dark:focus:border-[#D1F16A]"
                    placeholder="" value="agungklewang26@gmail.com" readonly required />
            </div>
        </div>
        <button type="submit"
            class="text-white bg-[#171717] hover:bg-[#D1F16A] hover:text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-4 text-center dark:bg-blue-600 dark:hover:bg-[#D1F16A] dark:focus:ring-blue-800">Simpan Perubahan</button>
    </form>
</div>
