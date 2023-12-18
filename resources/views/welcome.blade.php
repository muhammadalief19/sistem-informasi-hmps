<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        HMPS
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/flowbite/dist/flowbite.min.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="overflow-x-hidden text-gray-600 w-full">
    @include('components.navbar')
    <div class="w-full flex flex-col gap-5 items-center pt-[75px]" id="home">
        {{-- hero section --}}
        <section class="w-[90%] grid grid-cols-1 md:grid-cols-2 grid-flow-row gap-5">
            <div class="w-full aspect-square flex flex-col justify-center gap-5 p-1">
                <p class="text-4xl lg:text-5xl w-full font-light" id="text-HMPS">Himpunan Mahasiswa <br><span
                        class="">
                        <span class="text-blue-500 font-bold">PENS</span> Sumenep</span></p>
                <p class="capitalize w-full" id="text-membara">
                    membara dalam berkarya, bersinergi untuk semua
                </p>
                <button type="button"
                    class="w-max text-blue-700 hover:text-white border-2 border-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-base px-8 py-3 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"
                    id="btn-selengkapnya">
                    Selengkapnya
                </button>
            </div>
            <div class="w-full aspect-square flex justify-center items-center p-1 logo-kabinet" id="logo-kabinet">
                <img src={{ asset('images/logo-kabinet.svg') }} alt="" class="w-[95%] lg:w-[80%] animate-float">
            </div>
        </section>
        {{-- hero section --}}

        {{-- section kabinet --}}
        <section class="w-[90%] flex flex-col gap-8 items-center py-5">
            <div class="flex gap-2 h-max items-center" data-aos="fade-up" data-aos-duration="800"
                data-aos-easing="ease-in-out">
                <span class="w-20 h-1 bg-blue-700"></span>
                <p class="uppercase text-xl lg:text-2xl font-bold text-center">kabinet adhigana</p>
                <span class="w-20 h-1 bg-blue-700"></span>
            </div>
            <div class="w-full grid grid-cols-1 lg:grid-cols-3 grid-flow-row gap-10">
                <div class="w-full">
                    <img src={{ asset('images/kahima.svg') }} alt="" class="" data-aos="fade-right"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                </div>
                <div class="lg:col-span-2 flex flex-col gap-5" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <div class="w-full flex flex-col gap-3">
                        <h1 class="text-2xl font-semibold capitalize">visi</h1>
                        <div class="w-full flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="#1d4ed8" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                            </svg>
                            <p class="w-4/5 capitalize">
                                Menjadikan hmps sebagai organisasi yang dapat menampung aspirasi, memajukan Komunitas
                                yang ada di PENS sumenep dan memiliki kesolidaritasan yang tinggi.
                            </p>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-3">
                        <h1 class="text-2xl font-semibold capitalize">misi</h1>
                        <div class="flex flex-col gap-4">
                            <div class="w-full flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="#1d4ed8" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                                <p class="w-4/5 capitalize">
                                    membentuk dan melaksanakan program program sosial Hmps untuk memperkuat solidaritas
                                    baik internal maupun eksternal.
                                </p>
                            </div>
                            <div class="w-full flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="#1d4ed8" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                                <p class="w-4/5 capitalize">
                                    memperkuat hubungan internal dan memperluas hubungan external.
                                </p>
                            </div>
                            <div class="w-full flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="#1d4ed8" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                                <p class="w-4/5 capitalize">
                                    menjadikan hmps sebagai tempat terdekat bagi mahasiswa PENS sumenep untuk
                                    mengembangkan bakat & potensi mahasiswa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- section kabinet --}}

        {{-- section departemen --}}
        <section class="w-[90%] flex flex-col items-center gap-5 py-5">
            <div class="flex gap-2 h-max items-center" data-aos="fade-up" data-aos-duration="800"
                data-aos-easing="ease-in-out">
                <span class="w-20 h-1 bg-blue-700"></span>
                <p class="uppercase text-xl lg:text-2xl font-bold text-center">departemen kami</p>
                <span class="w-20 h-1 bg-blue-700"></span>
            </div>
            <div class="w-[95%] lg:w-4/5 grid grid-cols-3 lg:grid-cols-7">
                <div class="w-full flex justify-center items-center h-auto" data-aos="fade-down"
                    data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src={{ asset('images/badan-inti.svg') }} alt=""
                        class="w-3/4 grayscale hover:grayscale-0 transition-all duration-500 ease-in-out">
                </div>
                <div class="w-full flex justify-center items-center h-auto" data-aos="fade-down"
                    data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src={{ asset('images/harmonal.svg') }} alt=""
                        class="w-3/4 grayscale hover:grayscale-0 transition-all duration-500 ease-in-out">
                </div>
                <div class="w-full flex justify-center items-center h-auto" data-aos="fade-down"
                    data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src={{ asset('images/minat-bakat.svg') }} alt=""
                        class="w-3/4 grayscale hover:grayscale-0 transition-all duration-500 ease-in-out">
                </div>
                <div class="w-full flex justify-center items-center h-auto" data-aos="fade-down"
                    data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src={{ asset('images/medinfo.svg') }} alt=""
                        class="w-3/4 grayscale hover:grayscale-0 transition-all duration-500 ease-in-out">
                </div>
                <div class="w-full flex justify-center items-center h-auto" data-aos="fade-down"
                    data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src={{ asset('images/kwu.svg') }} alt=""
                        class="w-3/4 grayscale hover:grayscale-0 transition-all duration-500 ease-in-out">
                </div>
                <div class="w-full flex justify-center items-center h-auto" data-aos="fade-down"
                    data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src={{ asset('images/sosmas.svg') }} alt=""
                        class="w-3/4 grayscale hover:grayscale-0 transition-all duration-500 ease-in-out">
                </div>
                <div class="w-full flex justify-center items-center h-auto" data-aos="fade-down"
                    data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src={{ asset('images/perhubungan.svg') }} alt="perhubungan"
                        class="w-3/4 grayscale hover:grayscale-0 transition-all duration-500 ease-in-out">
                </div>
            </div>
        </section>
        {{-- section departemen --}}

        {{-- section event --}}
        <section class="w-[90%] flex flex-col items-center gap-5 py-5">
            <div class="flex gap-2 h-max items-center" data-aos="fade-up" data-aos-duration="800"
                data-aos-easing="ease-in-out">
                <span class="w-20 h-1 bg-blue-700"></span>
                <p class="uppercase text-xl lg:text-2xl font-bold text-center">event</p>
                <span class="w-20 h-1 bg-blue-700"></span>
            </div>
            <p class="text-center" data-aos="fade-down" data-aos-duration="800" data-aos-easing="ease-in-out">
                HMPS telah menyelenggarakan beberapa kegiatan akademik dan non-akademik, baik itu formal ataupun
                informal.
            </p>
            <div class="w-[95%] grid grid-cols-1 lg:grid-cols-2 grid-flow-row gap-5">
                <div class="w-full aspect-video rounded-md overflow-hidden relative flex justify-center"
                    x-data="{ data: false }" @mouseover="data = true" @mouseover.away="data = false"
                    data-aos="fade-up-right" data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src={{ asset('images/pkkmb.webp') }} alt="" class="w-full h-full object-cover">
                    <div class="w-[80%] aspect-[10/3] px-7 py-3 bg-white absolute z-10 bottom-5 flex flex-col gap-2 rounded transition-all duration-500"
                        :class="data ? 'bg-blue-600 text-white' : ''">
                        <div class="w-full flex h-max items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            <p class="text-sm">
                                2023-08-16</p>
                        </div>
                        <p class="text-center text-lg font-bold">
                            PKKMB 2023
                        </p>
                        <p class="text-center text-sm">
                            "Transformasi Mahasiswa Menjadi Agent of Change, Agent of Driven & Agent of Creator"
                        </p>
                    </div>
                </div>
                <div class="w-full aspect-video rounded-md overflow-hidden relative flex justify-center"
                    x-data="{ data: false }" @mouseover="data = true" @mouseover.away="data = false"
                    data-aos="fade-up-left" data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src={{ asset('images/fpc.webp') }} alt="" class="w-full h-full object-cover">
                    <div class="w-[80%] aspect-[10/3] px-7 py-3 bg-white absolute z-10 bottom-5 flex flex-col gap-2 rounded transition-all duration-500"
                        :class="data ? 'bg-blue-600 text-white' : ''">
                        <div class="w-full flex h-max items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            <p class="text-sm">
                                2023-08-16</p>
                        </div>
                        <p class="text-center text-lg font-bold">
                            Final Project Competition 2023
                        </p>
                        <p class="text-center text-sm">
                            "Pameran Project Basic Learning"
                        </p>
                    </div>
                </div>
                <div class="w-full aspect-video rounded-md overflow-hidden relative flex justify-center"
                    x-data="{ data: false }" @mouseover="data = true" @mouseover.away="data = false"
                    data-aos="fade-down-right" data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src={{ asset('images/expo.webp') }} alt="" class="w-full h-full object-cover">
                    <div class="w-[80%] aspect-[10/3] px-7 py-3 bg-white absolute z-10 bottom-5 flex flex-col gap-2 rounded-sm transition-all duration-500"
                        :class="data ? 'bg-blue-600 text-white' : ''">
                        <div class="w-full flex h-max items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            <p class="text-sm">
                                2023-08-16</p>
                        </div>
                        <p class="text-center text-lg font-bold">
                            EXPO PENS 2023
                        </p>
                        <p class="text-center text-sm">
                            "Bangun Sinergi Wujudkan Kampus Inovasi"
                        </p>
                    </div>
                </div>
                <div class="w-full aspect-video rounded-md overflow-hidden relative flex justify-center"
                    x-data="{ data: false }" @mouseover="data = true" @mouseover.away="data = false"
                    data-aos="fade-down-left" data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src={{ asset('images/pens-competition.webp') }} alt=""
                        class="w-full h-full object-cover">
                    <div class="w-[80%] aspect-[10/3] px-7 py-3 bg-white absolute z-10 bottom-5 flex flex-col gap-2 rounded-sm transition-all duration-500"
                        :class="data ? 'bg-blue-600 text-white' : ''">
                        <div class="w-full flex h-max items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            <p class="text-sm">
                                2023-08-16</p>
                        </div>
                        <p class="text-center text-lg font-bold">
                            PENS COMPETITION 2023
                        </p>
                        <p class="text-center text-sm capitalize">
                            "only student pens / umum"
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- section event --}}

        {{-- section service --}}
        <section class="w-[90%] flex flex-col items-center gap-5 py-5">
            <div class="flex gap-2 h-max items-center" data-aos="fade-up" data-aos-duration="800"
                data-aos-easing="ease-in-out">
                <span class="w-20 h-1 bg-blue-700"></span>
                <p class="uppercase text-xl lg:text-2xl font-bold text-center">layanan</p>
                <span class="w-20 h-1 bg-blue-700"></span>
            </div>
            <p class="text-center" data-aos="fade-down" data-aos-duration="800" data-aos-easing="ease-in-out">
                Sistem informasi ini memberikan beberapa layanan untuk para pengurus atau anggota aktif HMPS guna
                menunjang keaktifan himpunan
            </p>
            <div class="w-[95%] grid grid-cols-1 lg:grid-cols-3 grid-flow-row gap-5">
                <div class="w-full aspect-4/3 relative before:absolute before:-right-36 before:-top-24 before:-z-10 before:w-36 before:aspect-square hover:before:h-full hover:before:rounded-none hover:before:w-full before:scale-x-100 before:bg-blue-400  hover:before:bg-blue-600 before:transition-all before:duration-200 before:content-[''] hover:text-white overflow-hidden hover:before:top-0 hover:before:right-0 shadow-lg rounded"
                    x-data="{ data: false }" @mouseover="data = true" @mouseover.away="data = false" data-aos="fade-up" data-aos-duration="800"
                    data-aos-easing="ease-in-out">
                    <div class="w-full h-full p-5 flex flex-col gap-4">
                        <div class="w-12 aspect-square  flex justify-center items-center rounded-full transition-all duration-200"
                            :class="data ? 'bg-white text-blue-600' : 'bg-blue-600 text-white'">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <p class="text-lg font-semibold capitalize">
                            surat menyurat
                        </p>
                        <p class="text-sm">
                            Kegiatan surat menyurat dilakukan secara digital dengan menginputkan atribut yang diperlukan
                        </p>
                    </div>
                </div>
                <div class="w-full aspect-4/3 relative before:absolute before:-right-36 before:-top-24 before:-z-10 before:w-36 before:aspect-square hover:before:h-full hover:before:rounded-none hover:before:w-full before:scale-x-100 before:bg-blue-400  hover:before:bg-blue-600 before:transition-all before:duration-200 before:content-[''] hover:text-white overflow-hidden hover:before:top-0 hover:before:right-0 shadow-lg rounded"
                    x-data="{ data: false }" @mouseover="data = true" @mouseover.away="data = false"
                    data-aos="fade-down" data-aos-duration="800" data-aos-easing="ease-in-out">
                    <div class="w-full h-full p-4 flex flex-col gap-4">
                        <div class="w-12 aspect-square  flex justify-center items-center rounded-full transition-all duration-200"
                            :class="data ? 'bg-white text-blue-600' : 'bg-blue-600 text-white'">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                        <p class="text-lg font-semibold capitalize">
                            pengajuan proposal
                        </p>
                        <p class="text-sm">
                            Proses pengajuan proposal dilakukan secara digital dengan mengunggah dokumen
                        </p>
                    </div>
                </div>
                <div class="w-full aspect-4/3 relative before:absolute before:-right-36 before:-top-24 before:-z-10 before:w-36 before:aspect-square hover:before:h-full hover:before:rounded-none hover:before:w-full before:scale-x-100 before:bg-blue-400  hover:before:bg-blue-600 before:transition-all before:duration-200 before:content-[''] hover:text-white overflow-hidden hover:before:top-0 hover:before:right-0 shadow-lg rounded"
                    x-data="{ data: false }" @mouseover="data = true" @mouseover.away="data = false"
                    data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                    <div class="w-full h-full p-4 flex flex-col gap-4">
                        <div class="w-12 aspect-square  flex justify-center items-center rounded-full transition-all duration-200"
                            :class="data ? 'bg-white text-blue-600' : 'bg-blue-600 text-white'">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <p class="text-lg font-semibold capitalize">
                            inventaris
                        </p>
                        <p class="text-sm">
                            Pendataan mengenai proses peminjamana sarana dan prasarana yang dimilik HMPS
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- section service --}}
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script>
        AOS.init();
        gsap.from("#logo-kabinet", {
            duration: 1.5,
            x: 150,
            opacity: 0
        })
        gsap.from("#text-HMPS", {
            duration: 2,
            y: 50,
            opacity: 0
        })
        gsap.from("#text-membara", {
            duration: 1.5,
            y: 100,
            opacity: 0
        })
        gsap.from("#btn-selengkapnya", {
            duration: 1,
            y: 150,
            opacity: 0
        })
    </script>
</body>

</html>
