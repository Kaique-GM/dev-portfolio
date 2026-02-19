<section class="py-10 md:py-16 z-1000 flex flex-col gap-16">
    <div id="projetos" class="text-center font-jersey text-white w-full">
        <div class="flex justify-center items-center">
            <div class="flex flex-col justify-center items-start">
                <h1 class="text-6xl md:text-[96px] md:leading-16 reverse-box transition-transform duration-1000 ease-in-out rotate-180">
                    {{ __('messages.projetos') }}
                </h1>
            </div>
        </div>
    </div>
    <div class="flex flex-col w-full max-w-screen-2xl mx-auto lg:flex-row justify-center items-center gap-10 p-4  about-box transition-all opacity-0 -translate-x-30 duration-700 ease-out">
        <div class="rounded-3xl border-3 border-[#160B0D] md:w-181.5 h-100 md:h-130 p-2 bg-[#160B0D]">
            <div class="px-4 pt-4 flex flex-col justify-between items-center w-full h-full bg-linear-to-b from-[#14090B] via-[#1C0D10] to-[#B91C1C] rounded-2xl overflow-hidden">
                <div onclick="window.open(this.dataset.url, '_blank')" data-url="https://github.com/Kaique-GM/MiauMigo-web" class="flex justify-between w-full items-center text-lg md:text-xl text-white font-bungee group cursor-pointer">
                    <div>
                        <h6 class="drop-shadow-[0_4px_0px_rgba(0,0,0,1)]">{{ __('messages.proj_miaumigo_desc_card') }}</h6>
                    </div>
                    <div
                        class="group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-10 h-10 transition-all duration-300 ease-in-out group-hover:translate-x-2 group-hover:scale-110">

                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
                <div class="md:px-5">
                    <img src="{{ asset('images/projects/miauMigo.webp') }}" alt="Miaumigo" class="rounded-t-xl shadow-[0px_-20px_50px_rgba(185,28,28,1)] hover:scale-110 hover:-rotate-3 duration-500 hover:rounded-b-xl">
                </div>
            </div>
        </div>
        <div class="flex max-w-xl">
            <div class=" ">
                <div class="relative pl-7">
                    <div class="absolute left-0 top-4 w-5 h-1 bg-[#B91C1C] rounded-full"></div>

                    <div class="flex flex-row justify-start items-center text-white gap-4 ">
                        <h6 class="text-2xl font-bungee">MiauMigo Shop</h6>
                        <div onclick="window.open(this.dataset.url, '_blank')" data-url="https://github.com/Kaique-GM/MiauMigo-web" class="rounded-full hover:bg-zinc-900 cursor-pointer p-2 duration-300 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github size-5">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                                <path d="M9 18c-4.51 2-5-2-7-2"></path>
                            </svg>
                        </div>
                    </div>
                    <span class="font-caveat text-[#B91C1C] text-3xl">{{ __('messages.proj_miaumigo_tipo') }}</span>
                    <p class="font-lexend md:text-lg text-[#D1D5D8]">
                        {{ __('messages.proj_miaumigo_desc') }}
                    </p>
                </div>
                <div class="pl-7">
                    <ul class="font-lexend md:text-lg text-[#D1D5D8] flex flex-col gap-2 mt-4">
                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0"
                                style="fill: rgba(185,28,28,0.9);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_miaumigo_feat_1') }}</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0"
                                style="fill: rgba(185,28,28,0.9);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_miaumigo_feat_2') }}</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0"
                                style="fill: rgba(185,28,28,0.9);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_miaumigo_feat_3') }}</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0"
                                style="fill: rgba(185,28,28,0.9);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_miaumigo_feat_4') }}</span>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-wrap gap-3 mt-6 pl-7">
                    <div class="rounded-full p-2 border-2 border-white/10 hover:scale-110 duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 272" class="w-10 h-10">
                            <path fill="#DD0031" d="M128 0L0 48l19.2 160L128 272l108.8-64L256 48z" />
                            <path fill="#C3002F" d="M128 0v272l108.8-64L256 48z" />
                            <path fill="#FFF" d="M128 32L48 208h30l16-40h68l16 40h30L128 32zm28 112H100l28-68z" />
                        </svg>
                    </div>

                    <div class="rounded-full p-2 border-2 border-white/10 hover:scale-110 duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-10 h-10 rounded-full overflow-hidden">
                            <path fill="#3178C6" d="M0 0h256v256H0z" />
                            <path fill="#FFF" d="M150.3 200.7v-22.6c3.6 1.8 7.5 3.1 11.6 3.9 4.1.8 8.1 1.2 12 1.2 4.4 0 7.8-.7 10.2-2.1 2.4-1.4 3.6-3.4 3.6-6 0-1.6-.5-3-1.5-4.1-1-1.1-2.4-2.1-4.2-3-1.8-.9-4-1.8-6.5-2.7-2.5-.9-5.2-1.9-8.1-3.1-3.9-1.6-7.4-3.3-10.4-5.1-3-1.8-5.5-3.9-7.5-6.2-2-2.3-3.5-5-4.5-8-1-3-1.5-6.5-1.5-10.5 0-5 1-9.3 3-13 2-3.7 4.7-6.7 8-9.1 3.3-2.4 7.2-4.2 11.5-5.3 4.3-1.1 8.8-1.7 13.5-1.7 3.9 0 7.7.3 11.4.8 3.7.5 7.3 1.4 10.8 2.5v21.2c-3.2-1.6-6.6-2.8-10.1-3.6-3.5-.8-6.9-1.2-10.2-1.2-1.6 0-3.1.1-4.5.4-1.4.3-2.6.7-3.6 1.3-1 .6-1.8 1.3-2.4 2.2-.6.9-.9 1.9-.9 3 0 1.4.4 2.6 1.2 3.6.8 1 1.9 1.9 3.4 2.8 1.5.9 3.3 1.7 5.4 2.6 2.1.9 4.5 1.9 7.2 3 4.1 1.6 7.8 3.3 11.1 5.1 3.3 1.8 6 3.9 8.2 6.3 2.2 2.4 3.9 5.2 5.1 8.3 1.2 3.1 1.8 6.8 1.8 11 0 5.3-1 9.8-3.1 13.5-2.1 3.7-4.8 6.7-8.3 9-3.5 2.3-7.5 4-12 5-4.5 1-9.2 1.5-14.2 1.5-4.3 0-8.6-.4-12.9-1.1-4.3-.7-8.1-1.8-11.3-3.2zM103.5 101.7H72.8V80h86.7v21.7h-30.7v98.6h-25.3z" />
                        </svg>
                    </div>
                    <div class="rounded-full p-2 border-2 border-white/10 hover:scale-110 duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-10 h-10">
                            <path fill="#E34F26"
                                d="M0 32l34.9 394.2L192 480l157.1-53.8L384 32H0z" />
                            <path fill="#EF652A"
                                d="M192 446.7l127.1-43.6L349.3 64H192v382.7z" />
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
                    <div class="rounded-full p-2 border-2 border-white/10 hover:scale-110 duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-10 h-10">
                            <path fill="#264DE4"
                                d="M0 32l34.9 394.2L192 480l157.1-53.8L384 32H0z" />
                            <path fill="#2965F1"
                                d="M192 446.7l127.1-43.6L349.3 64H192v382.7z" />
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
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-full max-w-screen-2xl mx-auto lg:flex-row justify-center items-center gap-10 p-4  about-box transition-all opacity-0 -translate-x-30 duration-700 ease-out">
        <div class="rounded-3xl border-3 border-[#160B0D] md:w-181.5 h-100 md:h-130 p-2 bg-[#160B0D]">
            <div class="px-4 pt-4 flex flex-col justify-between items-center w-full h-full bg-linear-to-b from-[#14090B] via-[#1B0D1E] to-[#4F46E5] rounded-2xl overflow-hidden">
                <div onclick="window.open(this.dataset.url, '_blank')" data-url="https://github.com/Kaique-GM/WalletCare-App" class="flex justify-between w-full items-center text-lg md:text-xl text-white font-bungee group cursor-pointer">
                    <div>
                        <h6 class="drop-shadow-[0_4px_0px_rgba(0,0,0,1)]">{{ __('messages.proj_walletcare_desc_card') }}</h6>
                    </div>
                    <div
                        class="group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-10 h-10 transition-all duration-300 ease-in-out group-hover:translate-x-2 group-hover:scale-110">

                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
                <div class="md:px-5">
                    <img src="{{ asset('images/projects/walletCare.webp') }}" alt="walletCare" class="rounded-t-xl shadow-[0px_-20px_50px_rgba(79,70,229,1)] hover:scale-110 hover:-rotate-3 duration-500 hover:rounded-b-xl">
                </div>
            </div>
        </div>
        <div class="flex max-w-xl">
            <div class=" ">
                <div class="relative pl-7">
                    <div class="absolute left-0 top-4 w-5 h-1 bg-[#4F46E5] rounded-full"></div>

                    <div class="flex flex-row justify-start items-center text-white gap-4 ">
                        <h6 class="text-2xl font-bungee">WalletCare</h6>
                        <div onclick="window.open(this.dataset.url, '_blank')" data-url="https://github.com/Kaique-GM/WalletCare-App" class="rounded-full hover:bg-zinc-900 cursor-pointer p-2 duration-300 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github size-5">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                                <path d="M9 18c-4.51 2-5-2-7-2"></path>
                            </svg>
                        </div>
                    </div>
                    <span class="font-caveat text-[#4F46E5] text-3xl">{{ __('messages.proj_walletcare_tipo') }}</span>
                    <p class="font-lexend md:text-lg text-[#D1D5D8]">
                        {{ __('messages.proj_walletcare_desc') }}
                    </p>
                </div>
                <div class="pl-7">
                    <ul class="font-lexend md:text-lg text-[#D1D5D8] flex flex-col gap-2 mt-4">
                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0"
                                style="fill: rgba(79,70,229,1);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_walletcare_feat_1') }}</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0"
                                style="fill: rgba(79,70,229,1);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_walletcare_feat_2') }}</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0"
                                style="fill: rgba(79,70,229,1);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_walletcare_feat_3') }}</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0"
                                style="fill: rgba(79,70,229,1);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_walletcare_feat_4') }}</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0" style="fill: rgba(79,70,229,1);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_walletcare_feat_5') }}</span>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-row gap-3 mt-6 pl-7">
                    <div class="rounded-full p-2 border-2 border-white/10 hover:scale-110 duration-300">
                        <img src="{{ asset('images/projects/java-icon.svg') }}" alt="Java" class="h-10 w-10">
                    </div>

                    <div class="rounded-full p-2 border-2 border-white/10 hover:scale-110 duration-300">
                        <img src="{{ asset('images/projects/mysql-icon.svg') }}" alt="MySQL" class="h-10 w-10">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-full max-w-screen-2xl mx-auto lg:flex-row justify-center items-center gap-10 p-4  about-box transition-all opacity-0 -translate-x-30 duration-700 ease-out">
        <div class="rounded-3xl border-3 border-[#160B0D] md:w-181.5 h-100 md:h-130 p-2 bg-[#160B0D]">
            <div class="px-4 pt-4 flex flex-col justify-between items-center w-full h-full bg-linear-to-b from-[#14090B] via-[#1B0D1E] to-[#007A3F] rounded-2xl overflow-hidden">
                <div onclick="window.open(this.dataset.url, '_blank')" data-url="https://github.com/Kaique-GM/Snake-Game-java" class="flex justify-between w-full items-center text-lg md:text-xl text-white font-bungee group cursor-pointer">
                    <div>
                        <h6 class="drop-shadow-[0_4px_0px_rgba(0,0,0,1)]">{{ __('messages.proj_snake_desc_card') }}</h6>
                    </div>
                    <div
                        class="group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-10 h-10 transition-all duration-300 ease-in-out group-hover:translate-x-2 group-hover:scale-110">

                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
                <div class="md:px-5">
                    <img src="{{ asset('images/projects/snakeGame.webp') }}" alt="snakeGame" class="rounded-t-xl max-h-87.5 shadow-[0px_-20px_50px_rgba(0,122,63,1)] hover:scale-120 hover:-rotate-3 duration-500 hover:rounded-b-xl">
                </div>
            </div>
        </div>
        <div class="flex max-w-xl">
            <div class=" ">
                <div class="relative pl-7">
                    <div class="absolute left-0 top-4 w-5 h-1 bg-[#007A3F] rounded-full"></div>

                    <div class="flex flex-row justify-start items-center text-white gap-4 ">
                        <h6 class="text-2xl font-bungee">Snake Game</h6>
                        <div onclick="window.open(this.dataset.url, '_blank')" data-url="https://github.com/Kaique-GM/Snake-Game-java" class="rounded-full hover:bg-zinc-900 cursor-pointer p-2 duration-300 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github size-5">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                                <path d="M9 18c-4.51 2-5-2-7-2"></path>
                            </svg>
                        </div>
                    </div>
                    <span class="font-caveat text-[#007A3F] text-3xl">{{ __('messages.proj_snake_tipo') }}</span>
                    <p class="font-lexend md:text-lg text-[#D1D5D8]">
                       {{ __('messages.proj_snake_desc') }}
                    </p>
                </div>
                <div class="pl-7">
                    <ul class="font-lexend md:text-lg text-[#D1D5D8] flex flex-col gap-2 mt-4">
                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0"
                                style="fill: rgba(0,122,63,1);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_snake_feat_1') }}</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0"
                                style="fill: rgba(0,122,63,1);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_snake_feat_2') }}</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" class="mt-1 shrink-0"
                                style="fill: rgba(0,122,63,1);">
                                <path d="M12 1C12 1 12 8 10 10C8 12 1 12 1 12C1 12 8 12 10 14C12 16 12 23 12 23C12 23 12 16 14 14C16 12 23 12 23 12C23 12 16 12 14 10C12 8 12 1 12 1Z"></path>
                            </svg>
                            <span>{{ __('messages.proj_snake_feat_3') }}</span>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-row gap-3 mt-6 pl-7">
                    <div class="rounded-full p-2 border-2 border-white/10 hover:scale-110 duration-300">
                        <img src="{{ asset('images/projects/java-icon.svg') }}" alt="Java" class="h-10 w-10">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center font-jersey text-white w-full  about-box transition-all opacity-0 -translate-x-30 duration-700 ease-out">
        <div class="flex justify-center items-center">
            <div class="flex flex-row justify-center items-center gap-4">
                <h1 class="text-4xl md:leading-16">
                    {{ __('messages.github_outros') }}
                </h1>
                <div onclick="window.open(this.dataset.url, '_blank')" data-url="https://github.com/Kaique-GM" class="rounded-full hover:bg-zinc-900 cursor-pointer p-2 duration-300 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github size-5">
                        <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                        <path d="M9 18c-4.51 2-5-2-7-2"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>