<section class="flex flex-col gap-5 max-w-screen-2xl mx-auto mt-20">
    <div id=""
        class="text-center font-jersey text-white w-full about-box transition-all opacity-0 -translate-x-30 duration-700 ease-out">
        <div class="flex justify-center items-center">
            <div class="flex flex-col justify-center items-start">
                <h1 class="text-6xl md:text-[96px] md:leading-16">
                    {{ __('messages.experiencias') }}
                </h1>
            </div>
        </div>
    </div>
    <div
        class="about-box rotate-1 w-full h-full px-2 md:px-24 py-10 transition-all opacity-0 -translate-x-30 duration-700 ease-out">
        <div class="bg-[#160B0D] p-1 rounded-3xl">
            <div
                class="bg-linear-to-b from-[#160B0D] via-[#0B0314] to-[#7207B9] rounded-3xl p-10  flex flex-col xl:flex-row justify-between items-end xl:items-start relative gap-32  md:gap-56 xl:gap-0 w-full">

                <div
                    class="flex flex-col md:flex-row justify-center items-center md:justify-start md:items-start gap-5 w-full">
                    <div class="max-w-24 overflow-hidden object-cover rounded-2xl">
                        <img src="{{ asset('images/experience/makeweb.webp') }}" alt="MakeWeb" draggable="false">
                    </div>
                    <div class="flex flex-col w-full gap-3">
                        <div
                            class="flex flex-col gap-3 border-b-2 border-[#D1D5D8]/30 w-full justify-center items-center md:items-start md:justify-start">
                            <div
                                class="flex flex-col w-full justify-center items-center md:items-start md:justify-start">
                                <h6
                                    class="text-white text-xl font-bungee drop-shadow-[0_4px_0px_rgba(0,0,0,1)] text-center md:text-start">
                                    {{ __('messages.cargo_fullstack') }}</h6>
                                <span class="font-caveat text-white text-3xl">Make Web</span>
                            </div>
                            <div class="flex w-full justify-center items-center md:items-start md:justify-start">
                                <div
                                    class="font-lexend text-sm text-[#D1D5D8] bg-[#7207B9]/30 border-[#7207B9] rounded-xl flex justify-center items-center p-2">
                                    <span>{{ __('messages.periodo_atual') }}</span>
                                </div>
                            </div>
                            <div class="font-lexend text-[#D1D5D8] mb-3 text-center md:text-start">
                                <i class="fas fa-map-marker-alt"></i>
                                Sorocaba, São Paulo, {{ __('messages.pais') }}
                            </div>
                        </div>
                        <div class="flex flex-col border-b-2 border-[#D1D5D8]/30 w-full">
                            <p class="font-lexend text-sm text-[#D1D5D8] mb-3 text-center md:text-start">
                                {{ __('messages.exp_descricao') }}
                            </p>
                        </div>
                        <div class="flex flex-col gap-3 w-full">
                            <span class="font-lexend text-sm text-[#D1D5D8] text-center md:text-start">
                                {{ __('messages.competencias_tecnicas') }}
                            </span>
                            <div
                                class="flex flex-wrap gap-3 w-full justify-center items-center md:items-start md:justify-start">
                                <div class="rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300">
                                    <svg viewBox="0 0 128 128" class="w-10 h-10">
                                        <ellipse cx="64" cy="64" rx="60" ry="40"
                                            fill="#777BB4" />
                                        <text x="50%" y="55%" text-anchor="middle" fill="white" font-size="40"
                                            font-family="Arial" dy=".3em">PHP</text>
                                    </svg>
                                </div>

                                <div class="rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300">
                                    <img src="{{ asset('images/experience/laravel.svg') }}" alt="Laravel"
                                        class="h-10 w-10" draggable="false">
                                </div>

                                <div class="rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300">
                                    <img src="{{ asset('images/projects/mysql-icon.svg') }}" alt="MySQL"
                                        class="h-10 w-10" draggable="false">
                                </div>

                                <div class="rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300">
                                    <img src="{{ asset('images/experience/tailwind.svg') }}" alt="TailWind"
                                        class="h-10 w-10" draggable="false">
                                </div>


                                <div class="rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-10 h-10">
                                        <path fill="#E34F26" d="M0 32l34.9 394.2L192 480l157.1-53.8L384 32H0z" />
                                        <path fill="#EF652A" d="M192 446.7l127.1-43.6L349.3 64H192v382.7z" />
                                        <path fill="#EBEBEB"
                                            d="M192 208.1H128l-4.4-49.3H192V112H72.5l1.2 13.5 12.4 139.3H192v-56.7z" />
                                        <path fill="#EBEBEB"
                                            d="M192 368.6l-.2.1-53.6-18.2-3.4-38.2H86.5l6.5 73.1 98.9 34.6.1-.1V368.6z" />
                                        <path fill="#FFFFFF"
                                            d="M191.8 208.1v56.7h59.6l-5.6 61.6-54 18.3v51.3l98.7-34.6 1-11.5 11.4-128.1.8-13.5H191.8z" />
                                        <path fill="#FFFFFF"
                                            d="M191.8 112v46.8h116.3l1-11.3 2.3-25.5 1.2-13.5H191.8z" />
                                    </svg>
                                </div>

                                <div class="rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-10 h-10">
                                        <path fill="#264DE4" d="M0 32l34.9 394.2L192 480l157.1-53.8L384 32H0z" />
                                        <path fill="#2965F1" d="M192 446.7l127.1-43.6L349.3 64H192v382.7z" />
                                        <path fill="#EBEBEB"
                                            d="M192 208.1H128l-4.4-49.3H192V112H72.5l1.2 13.5 12.4 139.3H192v-56.7z" />
                                        <path fill="#EBEBEB"
                                            d="M192 368.6l-.2.1-53.6-18.2-3.4-38.2H86.5l6.5 73.1 98.9 34.6.1-.1V368.6z" />
                                        <path fill="#FFFFFF"
                                            d="M191.8 208.1v56.7h59.6l-5.6 61.6-54 18.3v51.3l98.7-34.6 1-11.5 11.4-128.1.8-13.5H191.8z" />
                                        <path fill="#FFFFFF"
                                            d="M191.8 112v46.8h116.3l1-11.3 2.3-25.5 1.2-13.5H191.8z" />
                                    </svg>
                                </div>

                                <div class="rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300">
                                    <img src="{{ asset('images/experience/js.webp') }}" alt="JavaScript" draggable="false"
                                        class="h-10 w-10">
                                </div>

                                <div class="rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300">
                                    <svg viewBox="0 0 24 24" class="w-10 h-10">
                                        <path fill="#F05032"
                                            d="M23.6 10.6L13.4.4c-.5-.5-1.3-.5-1.8 0L9.5 2.5l2.7 2.7c.6-.2 1.3-.1 1.8.4.6.6.7 1.5.3 2.2l2.6 2.6c.7-.3 1.6-.2 2.2.4.8.8.8 2.1 0 2.9-.8.8-2.1.8-2.9 0-.6-.6-.7-1.5-.3-2.2l-2.4-2.4v6.4c.2.1.4.2.6.4.8.8.8 2.1 0 2.9-.8.8-2.1.8-2.9 0-.8-.8-.8-2.1 0-2.9.2-.2.4-.3.6-.4V9.3c-.2-.1-.4-.2-.6-.4-.6-.6-.7-1.5-.3-2.2L8.1 3.9 0 12l11.6 11.6c.5.5 1.3.5 1.8 0l10.2-10.2c.5-.5.5-1.3 0-1.8z" />
                                    </svg>
                                </div>

                                <div
                                    class="rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-github size-5">
                                        <path
                                            d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                        </path>
                                        <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                    </svg>
                                </div>

                            </div>
                        </div>

                        <div class="flex flex-col gap-3 ">
                            <span class="font-lexend text-sm text-[#D1D5D8] text-center md:text-start">
                                {{ __('messages.competencias_comportamentais') }}
                            </span>
                            <div
                                class="flex flex-wrap gap-3 font-lexend text-[12px] md:text-sm justify-center items-center md:justify-start md:items-start">

                                <div
                                    class="flex justify-center items-center rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300">
                                    <i class="fa-solid fa-comments text-[#D1D5D8] mr-2"></i>
                                    <span class="text-[#D1D5D8]">
                                        {{ __('messages.soft_comunicacao') }}

                                    </span>
                                </div>

                                <div
                                    class="flex justify-center items-center rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300">
                                    <i class="fa-solid fa-users text-[#D1D5D8] mr-2"></i>
                                    <span class="text-[#D1D5D8]">
                                        {{ __('messages.soft_time') }}
                                    </span>
                                </div>

                                <div
                                    class="flex justify-center items-center rounded-full p-2 border-2 border-white/30 hover:scale-110 duration-300">
                                    <i class="fa-solid fa-lightbulb text-[#D1D5D8] mr-2"></i>
                                    <span class="text-[#D1D5D8]">
                                        {{ __('messages.soft_problemas') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="absolute top-8 right-4 w-4 h-4 bg-[#7207B9] rounded-full opacity-40"></div>
                <div class="absolute top-4 left-4 w-4 h-4 bg-[#9D4EDD] rounded-full opacity-40"></div>
            </div>
        </div>
    </div>
</section>
