@extends('main')
@section('content')
    <div class="--container flex flex-col gap-8">
        <section class="grid grid-cols-2 gap-16 mt-12">
            <div class="--component">
                <p class="font-bold text-[38px]">Menginspirasi ribuan siswa dan individu di seluruh Indonesia untuk belajar
                    dan berinovasi dalam teknologi
                    energi terbarukan.</p>
                <p class="text-[#6B7290] mt-4">Dukung pembelajaran kolaboratif untuk menciptakan solusi yang berkelanjutan
                    dan efisien dalam menghadapi
                    tantangan energi masa depan. Tingkatkan keahlian Anda dan ambil bagian dalam membangun masa depan yang
                    ramah lingkungan.</p>
                <div class="flex gap-4">
                    <button class="btn p-4 bg-[#D1F16A] font-medium rounded-[14px] shadow-1 mt-8">Gabung Pelatihan Kami <i
                            class="bi bi-arrow-right"></i></button>
                    <button class="btn p-4 bg-[#171717] text-white font-medium rounded-[14px] shadow-1 mt-8">Hubungi Kami <i
                            class="bi bi-arrow-right"></i></button>
                </div>
            </div>
            <div class="--component flex flex-col gap-4">
                <p class="text-[#6B7290]">Tingkatkan perkembangan pembelajaran energi terbarukan melalui platform terbuka
                    dan
                    kolaboratif.
                    Integrasikan tantangan dan topik energi berkelanjutan serta beragam alat pembelajaran lainnya, sehingga
                    siswa dan
                    peserta pelatihan memiliki informasi yang lebih kaya untuk mendalami setiap materi dan meningkatkan
                    keterampilan mereka.</p>
                <p class="text-[#6B7290]">Raih pengalaman belajar yang menyeluruh dengan cepat tanpa kerumitan sistem
                    tradisional. Percepat
                    pemahaman teknologi penting, hilangkan kesulitan, dan terapkan perubahan dengan mudah, didukung oleh
                    catatan lengkap untuk setiap proses pengembangan.</p>
                <p class="text-[#6B7290]">Platform ini juga menyediakan sumber daya interaktif yang dapat diakses kapan
                    saja,
                    memberikan fleksibilitas bagi peserta untuk belajar sesuai dengan jadwal mereka. Dengan berbagai materi
                    ajar seperti video, simulasi interaktif, dan diskusi kelompok, peserta dapat memperdalam pemahaman
                    mereka tentang teknologi ramah lingkungan.</p>
                <p class="text-[#6B7290]">Perusahaan kami adalah pusat pelatihan dan forum diskusi terkemuka di bidang
                    energi
                    terbarukan. Kami menyediakan berbagai kursus dari tingkat dasar hingga tingkat lanjut yang dirancang
                    untuk mempersiapkan peserta menghadapi tantangan dalam pengembangan energi hijau. Selain itu, kami juga
                    memiliki toko online yang menawarkan produk energi terbarukan berkualitas tinggi, seperti panel surya,
                    turbin angin, dan baterai penyimpanan energi, menjadikan kami salah satu platform yang paling populer
                    dan dipercaya oleh komunitas pecinta energi hijau.</p>
            </div>
        </section>
        <section>
            <p class="font-bold text-[38px]">Testimoni Siswa Pelatihan</p>
            <div class="mt-8 grid grid-cols-4 gap-4">
                <div class="shadow-1 bg-white">
                    <div class="p-10 bg-white dark:bg-gray-900 flex flex-col justify-between h-full">
                        <p class="text-gray-700 dark:text-gray-300">Pelatihan yang sangat informatif! Saya belajar banyak tentang panel surya dan penerapannya.</p>
                        <div class="mt-8 flex gap-4 items-start">
                            <img class="h-12 w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1599029039297077249/p0znhFdE_400x400.jpg" alt="" />
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 dark:text-white">Oketa Fred</h3>
                                <span class="text-sm tracking-wide text-gray-600 dark:text-gray-400">Kelas: Pembuatan Panel Surya dan Implementasinya.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow-1 bg-white">
                    <div class="p-10 bg-white dark:bg-gray-900 flex flex-col justify-between h-full">
                        <p class="text-gray-700 dark:text-gray-300">Pelatihan ini sangat berguna untuk memahami energi terbarukan dan implementasinya dalam kehidupan sehari-hari.</p>
                        <div class="mt-8 flex gap-4 items-start">
                            <img class="h-12 w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1599029039297077249/p0znhFdE_400x400.jpg" alt="" />
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 dark:text-white">Sarah J.</h3>
                                <span class="text-sm tracking-wide text-gray-600 dark:text-gray-400">Kelas: Energi Terbarukan untuk Pemula di Masa Pandemi.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow-1 bg-white">
                    <div class="p-10 bg-white dark:bg-gray-900 flex flex-col justify-between h-full">
                        <p class="text-gray-700 dark:text-gray-300">Materi yang disampaikan sangat jelas dan aplikatif. Saya merasa lebih siap untuk menerapkan teknologi hijau.</p>
                        <div class="mt-8 flex gap-4 items-start">
                            <img class="h-12 w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1599029039297077249/p0znhFdE_400x400.jpg" alt="" />
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 dark:text-white">John Doe</h3>
                                <span class="text-sm tracking-wide text-gray-600 dark:text-gray-400">Kelas: Teknologi Energi Terbarukan Fundamental.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow-1 bg-white">
                    <div class="p-10 bg-white dark:bg-gray-900 flex flex-col justify-between h-full">
                        <p class="text-gray-700 dark:text-gray-300">Pengalaman yang luar biasa! Saya mendapatkan wawasan baru tentang cara kerja energi terbarukan.</p>
                        <div class="mt-8 flex gap-4 items-start">
                            <img class="h-12 w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1599029039297077249/p0znhFdE_400x400.jpg" alt="" />
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 dark:text-white">Lisa Ray</h3>
                                <span class="text-sm tracking-wide text-gray-600 dark:text-gray-400">Kelas: Penerapan Energi Terbarukan di Rumah.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow-1 bg-white">
                    <div class="p-10 bg-white dark:bg-gray-900 flex flex-col justify-between h-full">
                        <p class="text-gray-700 dark:text-gray-300">Sangat direkomendasikan! Pelatihan ini memberikan pemahaman yang mendalam tentang sumber energi alternatif.</p>
                        <div class="mt-8 flex gap-4 items-start">
                            <img class="h-12 w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1599029039297077249/p0znhFdE_400x400.jpg" alt="" />
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 dark:text-white">Michael K.</h3>
                                <span class="text-sm tracking-wide text-gray-600 dark:text-gray-400">Kelas: Sistem Energi Terbarukan dan Lingkungan.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow-1 bg-white">
                    <div class="p-10 bg-white dark:bg-gray-900 flex flex-col justify-between h-full">
                        <p class="text-gray-700 dark:text-gray-300">Pelatihan ini membuka mata saya tentang potensi energi terbarukan untuk masa depan yang lebih baik.</p>
                        <div class="mt-8 flex gap-4 items-start">
                            <img class="h-12 w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1599029039297077249/p0znhFdE_400x400.jpg" alt="" />
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 dark:text-white">Anna P.</h3>
                                <span class="text-sm tracking-wide text-gray-600 dark:text-gray-400">Kelas: Energi Hijau dan Keberlanjutan Masa Depan.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow-1 bg-white">
                    <div class="p-10 bg-white dark:bg-gray-900 flex flex-col justify-between h-full">
                        <p class="text-gray-700 dark:text-gray-300">Materi yang disampaikan sangat jelas dan dapat dipraktikkan dengan baik. Saya sangat puas!</p>
                        <div class="mt-8 flex gap-4 items-start">
                            <img class="h-12 w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1599029039297077249/p0znhFdE_400x400.jpg" alt="" />
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 dark:text-white">James T.</h3>
                                <span class="text-sm tracking-wide text-gray-600 dark:text-gray-400">Kelas: Inovasi dalam Energi Terbarukan di Era Teknologi.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow-1 bg-white">
                    <div class="p-10 bg-white dark:bg-gray-900 flex flex-col justify-between h-full">
                        <p class="text-gray-700 dark:text-gray-300">Pelatihan ini sangat membantu saya memahami teknologi energi terbarukan dan aplikasinya di dunia nyata.</p>
                        <div class="mt-8 flex gap-4 items-start">
                            <img class="h-12 w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1599029039297077249/p0znhFdE_400x400.jpg" alt="" />
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 dark:text-white">Emily C.</h3>
                                <span class="text-sm tracking-wide text-gray-600 dark:text-gray-400">Kelas: Aplikasi Energi Terbarukan di Masyarakat.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section>
            <p class="font-bold text-[38px]">Tim Pengembang RevoEnergy.</p>
            <div class="mt-8 grid grid-cols-4 gap-4">
                <div class="">
                    <div class="relative w-full h-full flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                        <div
                            class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                            <img src="{{ asset('img/20230716_202926.jpg') }}" alt="card-image"
                                class="object-cover w-full h-full" />
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <p
                                    class="block font-sans text-[18px] font-bold text-base antialiased leading-relaxed text-blue-gray-900">
                                    Agung Kurniawan
                                </p>
                                <p
                                    class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900 relative">
                                    Backend Developer <img src="{{ asset('img/flow2.png') }}"
                                        class="w-full absolute top-full left-0" alt="">
                                </p>
                            </div>
                            <p
                                class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-75 mt-6">
                                Backend Developer bertanggung jawab untuk membangun dan mengelola logika server, database,
                                serta aplikasi untuk mendukung fungsi sisi server dari sebuah website.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="relative w-full h-full flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                        <div
                            class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                            <img src="{{ asset('img/20230716_202926.jpg') }}" alt="card-image"
                                class="object-cover w-full h-full" />
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <p
                                    class="block font-sans text-[18px] font-bold text-base antialiased leading-relaxed text-blue-gray-900">
                                    Bayu Krisna
                                </p>
                                <p
                                    class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900 relative">
                                    UI/UX Designer <img src="{{ asset('img/flow2.png') }}"
                                        class="w-full absolute top-full left-0" alt="">
                                </p>
                            </div>
                            <p
                                class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-75 mt-6">
                                UI/UX Designer bertanggung jawab untuk membuat tampilan dan pengalaman pengguna yang
                                intuitif, memastikan interaksi pengguna dengan produk mudah dipahami.</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="relative w-full h-full flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                        <div
                            class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                            <img src="{{ asset('img/20230716_202926.jpg') }}" alt="card-image"
                                class="object-cover w-full h-full" />
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <p
                                    class="block font-sans text-[18px] font-bold text-base antialiased leading-relaxed text-blue-gray-900">
                                    Hairul Anam
                                </p>
                                <p
                                    class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900 relative">
                                    Frontend Developer <img src="{{ asset('img/flow2.png') }}"
                                        class="w-full absolute top-full left-0" alt="">
                                </p>
                            </div>
                            <p
                                class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-75 mt-6">
                                Frontend Developer fokus pada tampilan visual dan interaksi pengguna di website atau
                                aplikasi, memastikan bahwa desain UI dapat diakses dan fungsional di berbagai perangkat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="relative w-full h-full flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                        <div
                            class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                            <img src="{{ asset('img/20230716_202926.jpg') }}" alt="card-image"
                                class="object-cover w-full h-full" />
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <p
                                    class="block font-sans text-[18px] font-bold text-base antialiased leading-relaxed text-blue-gray-900">
                                    Aji Seto
                                </p>
                                <p
                                    class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900 relative">
                                    Project Management <img src="{{ asset('img/flow2.png') }}"
                                        class="w-full absolute top-full left-0" alt="">
                                </p>
                            </div>
                            <p
                                class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-75 mt-6">
                                Berfokus pada perencanaan, pengorganisasian, dan pengelolaan sumber daya untuk mencapai
                                tujuan tertentu dalam kerangka waktu dan batasan anggaran yang telah ditetapkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('core.home.section7')
    </div>
@endsection
