<div id="sobre" class="max-w-screen-2xl mx-auto px-2 py-16 lg:py-36 flex flex-col gap-26">
    <div class="about-box flex flex-col gap-10 lg:gap-0 lg:flex-row items-center justify-center p-4 h-full w-full transition-all opacity-0 -translate-x-30 duration-700 ease-out">
        <div class="w-full h-full">
            <div class="flex justify-center items-center relative">
                <div class="bg-[#0F172A] max-w-110 rounded-4xl p-4 md:p-6 z-10 border-4 border-blue-400 shadow-card hover:scale-105 duration-500">
                    <div class="flex justify-end items-end w-full aspect-4/5 rounded-2xl border-4 border-blue-900 bg-cover bg-center bg-no-repeat" style="background-image: url(<?= asset('images/about/background.webp') ?>);">
                        <img src="{{ asset('images/about/perfil_2_sem_fundo.webp') }}" alt="" class="object-contain object-center w-full" draggable="false">
                    </div>
                    <div class="flex justify-between items-center mt-5 px-5">
                        <span class="font-bungee text-2xl md:text-4xl text-white drop-shadow-[0_4px_0px_rgba(0,0,0,1)] -rotate-5">
                            KIQ
                        </span>
                        <div class="flex flex-col justify-center items-end font-bold">
                            <span class="text-lg font-caveat text-dark_blue_2">
                                @if(app()->getLocale() == 'en')
                                {{ __('messages.sobre_prof_2') }}
                                @else
                                {{ __('messages.sobre_prof_1') }}
                                @endif
                            </span>
                            <span class="text-lg font-caveat text-dark_blue_2">
                                @if(app()->getLocale() == 'en')
                                {{ __('messages.sobre_prof_1') }}
                                @else
                                {{ __('messages.sobre_prof_2') }}
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

                <div class="absolute w-60 md:w-112.5 lg:w-100 xl:w-112.5 h-105 md:h-152.5 inset-0 z-5 top-5 left-1/2 -translate-x-[45%] rotate-6 rounded-4xl bg-[#1e1b4b] border-3 border-blue-900 shadow-card"></div>
                <div class="absolute w-50 md:w-97.5 lg:w-[320px] xl:w-97.5 h-102.5 md:h-153.75 inset-0 z-4 top-10 left-1/2 -translate-x-[35%] rotate-12 rounded-4xl bg-[#312e81] border-3 border-black shadow-card"> </div>

            </div>
        </div>

        <div class="text-center flex flex-col p-4 w-full md:max-w-2xl justify-center items-center z-30">
            <div class="flex flex-col md:flex-row justify-start items-center  w-full">
                <div class="flex justify-center items-center w-24 h-24 mw-32 md:h-32">
                    <img src="{{ asset('images/about/pixel.gif') }}" alt="" class="object-contain object-center w-24 h-24 md:w-32 md:h-32" draggable="false">
                </div>
                <div class="flex flex-col justify-center items-center md:items-start">
                    <span class="text-4xl md:text-5xl font-caveat text-dark_blue_2">
                        {{ __('messages.sobre') }}
                    </span>
                    <h2 class="text-2xl md:text-4xl font-bungee text-white drop-shadow-[0_4px_0px_rgba(0,0,0,1)]">
                        {{ __('messages.sobre_mim') }}
                    </h2>
                </div>
            </div>

            <div class="flex flex-col w-full max-w-full gap-2 justify-center items-center md:items-start text-center md:text-start p-2 ">
                <h3 class="font-caveat text-dark_blue_2 text-2xl md:text-3xl font-bold"> {{ __('messages.sobre_sub') }}
                </h3>

                <p class="font-lexend md:text-xl text-[#D1D5D8]">
                    {{ __('messages.sobre_p1') }}
                </p>
                <br>
                <p class="font-lexend md:text-xl text-[#D1D5D8]">
                    {{ __('messages.sobre_p2') }}
                </p>
            </div>

            <div class="mt-5 flex flex-col md:flex-row justify-start items-center gap-4 w-full">
                <button onclick="document.querySelector('#projetos').scrollIntoView({ behavior: 'smooth' })" class="font-bungee text-xl text-white bg-dark_blue_3 px-4 py-4 flex justify-center items-center border-b-4 border-dark_blue_4 rounded-xl cursor-pointer hover:scale-110 duration-300 gap-3">
                    <i class="fa-solid fa-folder-open"></i>
                    {{ __('messages.sobre_btn') }}
                </button>

                <button onclick="window.open(this.dataset.url, '_blank')" data-url="{{ asset('files/C.4.1.pdf') }}" class="font-bungee text-xl text-white bg-dark_blue_3 px-4 py-4 flex justify-center items-center border-b-4 border-dark_blue_4 rounded-xl cursor-pointer hover:scale-110 duration-300 gap-3">
                    <i class="fa-solid fa-download"></i>
                    DOWNLOAD CV
                </button>
            </div>
        </div>

    </div>

    <div class="about-box -rotate-1 w-full h-full px-2 md:px-24 py-10 transition-all opacity-0 -translate-x-30 duration-700 ease-out">
        <div class="bg-linear-to-b from-[#3B82F6] via-[#3B82F6] to-[#B91C1C] p-1 rounded-3xl">
            <div class="bg-linear-to-b from-[#0F172A] via-[#0F172A] to-[#2b0f12] rounded-3xl p-10  flex flex-col xl:flex-row justify-between items-end xl:items-start relative gap-32  md:gap-56 xl:gap-0">
                <div class="flex flex-col gap-12 w-full">
                    <div>
                        <h5 class="font-bungee rotate-0.2 text-white drop-shadow-[0_4px_0px_rgba(0,0,0,1)] text-[26px] md:text-[60px] ">
                            {{ __('messages.certificados_title') }}
                        </h5>
                        <span class="font-caveat text-dark_blue_2 font-bold text-2xl">“{{ __('messages.certificados_sub') }}”</span>
                    </div>

                    <div class="relative ">
                        <img src="{{ asset('images/about/Tailwind.webp') }}" alt="Certificado" class="max-w-36 md:max-w-72 rounded-xl md:rounded-3xl cert-img transition-all opacity-0 -translate-x-30 duration-1000 ease-in-out">
                        <img src="{{ asset('images/about/Java_Fiap.webp') }}" alt="Certificado" class="max-w-36 md:max-w-72 rounded-xl md:rounded-3xl absolute top-5 md:top-12 left-5 md:left-12 cert-img transition-all opacity-0 -translate-x-30 duration-1300 ease-in-out">
                        <img src="{{ asset('images/about/Git.webp') }}" alt="Certificado" class="max-w-36 md:max-w-72 rounded-xl md:rounded-3xl absolute top-10 md:top-22 left-10 md:left-22 cert-img transition-all opacity-0 -translate-x-30 duration-1600 ease-in-out">
                        <img src="{{ asset('images/about/ScrumCertificate.webp') }}" alt="Certificado" class="max-w-36 md:max-w-72 rounded-xl md:rounded-3xl absolute top-16 md:top-32 left-16 md:left-32 cert-img transition-all opacity-0 -translate-x-30 duration-1900 ease-in-out">
                        <img src="{{ asset('images/about/CertificadoJava.webp') }}" alt="Certificado" class="max-w-36 md:max-w-72 rounded-xl md:rounded-3xl absolute top-20 md:top-42 left-20 md:left-42 cert-img transition-all opacity-0 -translate-x-30 duration-2200 ease-in-out">
                    </div>
                </div>

                <div class="flex flex-col justify-start items-end gap-5 w-full md:max-w-137.5 rotate-0.2 ">
                    <div class="flex flex-col justify-start items-end">
                        <h5 class="font-bungee text-end text-white drop-shadow-[0_4px_0px_rgba(0,0,0,1)] text-xl md:text-[32px] ">
                            {{ __('messages.graduacao_nome') }}

                        </h5>
                        <span class="font-caveat text-dark_blue_2 font-bold text-lg md:text-2xl">FACENS</span>
                        <p class="font-lexend md:text-xl text-[#D1D5D8]">{{ __('messages.graduacao_conclusao') }} 2025</p>
                    </div>

                    <div class="flex flex-col justify-start items-end">
                        <h5 class="font-bungee text-end text-white drop-shadow-[0_4px_0px_rgba(0,0,0,1)] text-xl md:text-[32px] ">
                            {{ __('messages.cert_java_nome') }}
                        </h5>
                        <span class="font-caveat text-dark_blue_2 font-bold text-lg md:text-2xl">Udemy</span>
                        <p class="font-lexend md:text-xl text-[#D1D5D8]">{{ __('messages.data_java') }}</p>
                    </div>

                    <div class="flex flex-col justify-start items-end">
                        <h5 class="font-bungee text-end text-white drop-shadow-[0_4px_0px_rgba(0,0,0,1)] text-xl md:text-[32px] ">
                            {{ __('messages.cert_git_nome') }}
                        </h5>
                        <span class="font-caveat text-dark_blue_2 font-bold text-lg md:text-2xl">Udemy</span>
                        <p class="font-lexend md:text-xl text-[#D1D5D8]">Jul/2025</p>
                    </div>

                    <div class="flex flex-col justify-start items-end">
                        <span class="font-caveat text-[#DC2626] font-bold text-xl md:text-2xl">{{ __('messages.cert_outros') }}</span>
                    </div>
                </div>

                <div class="absolute top-4 right-4 w-4 h-4 bg-[#3B82F6] rounded-full opacity-20"></div>
                <div class="absolute top-8 left-4 w-4 h-4 bg-[#3B82F6] rounded-full opacity-20"></div>
            </div>
        </div>
    </div>
</div>