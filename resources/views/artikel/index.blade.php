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
    <div class="flex mt-10 gap-5">
        <div class="w-3/4">
            <div class="flex flex-col gap-5">
                <div class="border w-full p-5 rounded-xl max-h-56">
                    <div class="flex gap-5">
                        <div class="flex flex-col">
                            <p class="font-bold text-2xl">Pemanfaatan Limbah Sampah Menjadi Energi</p>
                            <div class="mt-4">
                                <p class="line-clamp-3 text-slate-400">Proses mengubah limbah, terutama sampah organik,
                                    menjadi sumber
                                    energi yang bermanfaat, seperti listrik, panas, atau bahan bakar. Teknologi ini tidak
                                    hanya membantu mengurangi jumlah limbah yang berakhir di tempat pembuangan akhir (TPA),
                                    tetapi juga berkontribusi pada produksi energi terbarukan yang lebih bersih dan ramah
                                    lingkungan.</p>
                            </div>
                            <p class="mt-5 text-secondary">24 September 2024</p>
                        </div>
                        <img src="img/artikel-1.png" alt="" width="300" class="max-h-max">
                    </div>
                </div>
                <div class="border w-full p-5 rounded-xl max-h-56">
                    <div class="flex gap-5">
                        <div class="flex flex-col">
                            <p class="font-bold text-2xl">Wawasan Penting tentang Produk Energi Terbarukan</p>
                            <div class="mt-4">
                                <p class="line-clamp-3 text-slate-400">Merujuk pada pemahaman tentang perkembangan, manfaat,
                                    tantangan, dan peluang dari berbagai sumber dan produk energi yang dapat diperbarui.
                                    Energi terbarukan memainkan peran vital dalam transisi dunia menuju sistem energi yang
                                    lebih bersih dan berkelanjutan, sekaligus mengurangi ketergantungan pada bahan bakar
                                    fosil.</p>
                            </div>
                            <p class="mt-5 text-secondary">24 September 2024</p>
                        </div>
                        <img src="img/artikel-2.png" alt="" width="300" class="max-h-max">
                    </div>
                </div>
                <div class="border w-full p-5 rounded-xl max-h-56">
                    <div class="flex gap-5">
                        <div class="flex flex-col">
                            <p class="font-bold text-2xl">Pemanfaatan Limbah Sampah Menjadi Energi</p>
                            <div class="mt-4">
                                <p class="line-clamp-3 text-slate-400">Proses mengubah limbah, terutama sampah organik,
                                    menjadi sumber
                                    energi yang bermanfaat, seperti listrik, panas, atau bahan bakar. Teknologi ini tidak
                                    hanya membantu mengurangi jumlah limbah yang berakhir di tempat pembuangan akhir (TPA),
                                    tetapi juga berkontribusi pada produksi energi terbarukan yang lebih bersih dan ramah
                                    lingkungan.</p>
                            </div>
                            <p class="mt-5 text-secondary">24 September 2024</p>
                        </div>
                        <img src="img/artikel-3.png" alt="" width="300" class="max-h-max">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-2/5">
            <div class="border w-full p-5 rounded-xl">
                <p>Tag</p>
                <div class="grid grid-cols-3 gap-5 mt-3">
                    <p class="bg-slate-300 p-1 rounded-full text-center">#panelsurya</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#gogreen</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#infoterkini</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#renewables</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#cleanenergy</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#solarpower</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#windenergy</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#fossilfree</p>
                    <p class="bg-slate-300 p-1 rounded-full text-center">#sustainable</p>
                </div>
            </div>
        </div>
    </div>
@endsection
