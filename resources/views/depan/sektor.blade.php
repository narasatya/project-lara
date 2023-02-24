<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('depan') }}/dist/output.css" rel="stylesheet" />
    <title>UMKM-Negeri-Kita</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- HEADER MULAI -->
    {{-- top-56 if desktop --}}
    <header class="absolute top-0 left-0 z-10 flex items-center w-full bg-transparent">
        <div class="container">
            <div class="relative flex items-center justify-between">
                <div class="px-4">
                    <a href="#home" class="block py-6 text-lg font-bold text-primary">UMKM NegeriKita</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="absolute block right-4 lg:hidden">
                        <span class="duration-300 ease-in-out origin-top-left hamburger-line"></span>
                        <span class="duration-300 ease-in-out hamburger-line"></span>
                        <span class="duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
                    </button>


                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none  dark:shadow-slate-500 dark:lg:bg-transparent">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="{{ route('index') }}"
                                    class="flex py-2 mx-8 text-base text-dark group-hover:text-primary">Halaman
                                    Utama</a>
                            </li>
                            <li class="group">
                                <a href="#sektor"
                                    class="flex py-2 mx-8 text-base text-dark group-hover:text-primary">Sektor
                                    Usaha</a>
                            </li>
                            <li class="group">
                                <a href="#hub"
                                    class="flex py-2 mx-8 text-base text-dark group-hover:text-primary">Hubungi Kami</a>
                            </li>
                            {{-- <li class="flex items-center pl-8 mt-3 lg:mt-0">
                                <div class="flex">
                                    <span class="mr-2 text-sm text-slate-500">
                                        <img src="{{ asset('depan') }}/dist/img/brightness.png" class="w-6 h-6">
                                    </span>
                                    <input type="checkbox" class="hidden" id="dark-toggle" />
                                    <label for="dark-toggle">
                                        <div
                                            class="flex items-center h-5 p-1 rounded-full cursor-pointer w-9 bg-slate-500">
                                            <div
                                                class="w-4 h-4 transition duration-300 ease-in-out bg-white rounded-full toggle-circle">
                                            </div>
                                        </div>
                                    </label>
                                    <span class="ml-2 text-sm text-slate-500">
                                        <img src="{{ asset('depan') }}/dist/img/moon.png" alt=""
                                            class="w-6 h-6">
                                    </span>
                                </div>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SELESAI -->

    <!-- HERO SECTION MULAI -->
    {{-- pt-60 if desktop --}}
    <section id="home" class="mt-20 bg-violet-100 dark:bg-dark">
        <img src="{{ asset('depan') }}/dist/img/GAMBAR UMKM 2 GRADASI PUTIH.png" alt="pasar"
            class="w-full bg-gradient-to-b to-violet-" />
        <div class="container pt-10">
            <div class="flex flex-wrap">
                <div class="w-full px-4 text-center">
                    <h1 class="text-base font-semibold text-primary md:text-xl">
                        <span class="block mt-1 mb-5 text-4xl font-bold text-dark lg:text-5xl dark:text-white">UMKM
                            NegeriKita</span>
                    </h1>
                    <p class="mb-10 font-medium leading-relaxed text-secondary">
                        Program ini dibuat sebagai
                        <i class="font-bold text-dark dark:text-white">perantara</i> Pengusaha dengan
                        Pembeli yang dapat menguntungkan satu sama lain.Dengan tersedianya data profil UMKM dimaksud,
                        diharapkan dapat memberikan manfaat bagi para pihak terutama bagi UMKM dalam rangka mempercepat
                        akses pembiayaan dari perbankan. Data profil UMKM menyajikan data informasi pengusaha (nama
                        usaha, produk usaha, alamat, dll).
                </div>

            </div>
        </div>
    </section>
    <!-- HERO SECTION SELESAI -->

    <!-- BODY SECTION MULAI -->
    <section id="sektor" class="pb-32 pt-36 dark:bg-dark">
        <div class="container">
            <div class="overflow-auto rounded-lg shadow">
                <table class="w-full">
                    <thead class="justify-center border-b-2 border-gray-200 bg-primary">
                        <tr>
                            <th class="p-3 text-base font-semibold tracking-wide text-left text-white lg:pl-20">SEKTOR
                                UMKM</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-300">
                        @foreach ($data as $item)
                            <tr class="bg-gray-100 dark:bg-slate-700">
                                <td class="p-3 text-base text-primary whitespace-nowrap lg:pl-20">
                                    <a href="{{ url('/sektorDetail/' . $item->id) }}" class="hover:underline">
                                        {{ $item->namaSektor }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- BODY SECTION SELESAI -->

    {{-- FOOTER SECTION MULAI --}}
    <footer id="hub" class="pt-24 pb-12 bg-dark dark:bg-slate-800">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 font-medium text-slate-300 md:w-1/3">
                    <h2 class="mb-5 text-4xl font-bold text-white">STEMSA</h2>
                    <h3 class="mb-2 text-2xl font-bold">Hubungi Kami</h3>
                    <p>narasatya@smkn2-solo.net</p>
                    <p>Jl. Adi Sucipto No.33, Manahan</p>
                    <p>Kec. Banjarsari, Kota Surakarta</p>
                    <p>Jawa Tengah</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="mb-5 text-xl font-semibold text-white">Kategori Tulisan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="" class="inline-block mb-3 text-base hover:text-primary">Usaha Mikro Kecil
                                Menengah</a>
                        </li>
                        <li>
                            <a href="" class="inline-block mb-3 text-base hover:text-primary">Bisnis
                                Digital</a>
                        </li>
                        <li>
                            <a href="" class="inline-block mb-3 text-base hover:text-primary">Wirausaha
                                Digital</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="mb-5 text-xl font-semibold text-white">Tautan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#home" class="inline-block mb-3 text-base hover:text-primary">Halaman Utama</a>
                        </li>
                        <li>
                            <a href="#sektor" class="inline-block mb-3 text-base hover:text-primary">Sektor
                                Usaha</a>
                        </li>
                        <li>
                            <a href="#hub" class="inline-block mb-3 text-base hover:text-primary">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <a href="https://www.instagram.com/nara.aanoraga/" target="_blank"
                        class="flex items-center justify-center mr-3 border rounded-full w-9 h-9 border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>

                    <a href="https://github.com/narasatya" target="_blank"
                        class="flex items-center justify-center mr-3 border rounded-full w-9 h-9 border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>GitHub</title>
                            <path
                                d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                        </svg>
                    </a>

                    <a href="https://www.linkedin.com/in/nara-satya-anoraga-9b9283251/" target="_blank"
                        class="flex items-center justify-center mr-3 border rounded-full w-9 h-9 border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn</title>
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>

                    <a href="https://twitter.com/naraa_sa" target="_blank"
                        class="flex items-center justify-center mr-3 border rounded-full w-9 h-9 border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Twitter</title>
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                </div>
                <p class="text-sm font-medium text-center text-slate-500">Code by <span
                        class="font-bold text-primary">nara.aanoraga</span> with ❤️</p>
            </div>
        </div>
    </footer>
    {{-- FOOTER SECTION SELESAI --}}

    {{-- BACK TO TOP MULAI --}}
    <a href="#home" id="to-top"
        class="fixed bottom-4 right-4 h-14 w-14 rounded-full bg-primary z-[9999] p-4 justify-center items-center hover:animate-pulse hidden">
        <span class="block w-5 h-5 mt-2 rotate-45 border-t-2 border-l-2"></span>
    </a>
    {{-- BACK TO TOP SELESAI --}}

    <script>
        // Navbar-fixed
        window.onscroll = function() {
            const header = document.querySelector('header');
            const fixedNav = header.offsetTop;
            const toTop = document.querySelector('#to-top');

            if (window.pageYOffset > fixedNav) {
                header.classList.add('navbar-fixed');
                toTop.classList.remove('hidden');
                toTop.classList.add('flex');
            } else {
                header.classList.remove('navbar-fixed');
                toTop.classList.remove('flex');
                toTop.classList.add('hidden');
            }
        }
        // Hamburger
        const hamburger = document.querySelector('#hamburger');
        const navMenu = document.querySelector('#nav-menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger-active');
            navMenu.classList.toggle('hidden');
        });

        // Klik luar Hamburger
        window.addEventListener('click', function(e) {
            if (e.target != hamburger && e.target != navMenu) {
                hamburger.classList.remove('hamburger-active');
                navMenu.classList.add('hidden');
            }
        });

        //darkmode
        // const darkToggle = document.querySelector('#dark-toggle');
        // const html = document.querySelector('html');

        // darkToggle.addEventListener('click', function() {
        //     if (darkToggle.checked) {
        //         html.classList.add('dark');
        //     } else {
        //         html.classList.remove('dark');
        //     }
        // });
    </script>
</body>

</html>
