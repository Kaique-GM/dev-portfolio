<div class="max-w-screen-2xl mx-auto p-2 mt-20 xl:mt-50">
    <div id="about-box" class="flex flex-col gap-10 lg:gap-0 lg:flex-row items-center justify-center p-4 h-full w-full transition-all opacity-0 -translate-x-30 duration-700 ease-out">
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
                                DESENVOLVEDOR
                            </span>
                            <span class="text-lg font-caveat text-dark_blue_2">
                                FULL STACK
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
                        Sobre mim
                    </span>
                    <h2 class="text-2xl md:text-4xl font-bungee text-white drop-shadow-[0_4px_0px_rgba(0,0,0,1)]">
                        Dev Full Stack
                    </h2>
                </div>
            </div>

            <div class="flex flex-col w-full max-w-full gap-2 justify-center items-center md:items-start text-center md:text-start p-2 ">
                <h3 class="font-caveat text-dark_blue_2 text-2xl md:text-3xl font-bold">Um pouco sobre minha jornada na tecnologia</h3>

                <p class="font-lexend md:text-xl text-[#D1D5D8]">
                    Formado em Análise e Desenvolvimento de Sistemas pela Facens, curto tirar projetos do papel e transformar ideias em soluções reais. Sou apaixonado por tecnologia e estou sempre buscando evoluir.
                </p>
                <br>
                <p class="font-lexend md:text-xl text-[#D1D5D8]">
                    No dia a dia, trabalho com Laravel, Livewire, Tailwind CSS, JavaScript e SQL, criando sistemas responsivos, integrações com APIs e dando manutenção em projetos já em produção. Sempre busco entregar um código bem organizado, escalável e versionado com Git.
                </p>
            </div>

            <div class="mt-5 flex flex-col md:flex-row justify-start items-center gap-4 w-full">
                <button class="font-bungee text-xl text-white bg-dark_blue_3 px-4 py-4 flex justify-center items-center border-b-4 border-dark_blue_4 rounded-xl cursor-pointer hover:scale-110 duration-300 gap-3">
                    <i class="fa-solid fa-folder-open"></i>
                    MEUS PROJETOS
                </button>

                <button onclick="window.open(this.dataset.url, '_blank')" data-url="{{ asset('files/C.4.1.pdf') }}" class="font-bungee text-xl text-white bg-dark_blue_3 px-4 py-4 flex justify-center items-center border-b-4 border-dark_blue_4 rounded-xl cursor-pointer hover:scale-110 duration-300 gap-3">
                    <i class="fa-solid fa-download"></i>
                    DOWNLOAD CV
                </button>
            </div>
        </div>
    </div>