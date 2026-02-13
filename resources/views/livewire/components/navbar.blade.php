<nav class="w-full h-screen overflow-hidden bg-none absolute top-0 left-0">
    <div class="max-w-375 mx-auto px-6 py-5 flex items-start justify-between relative">
        <div class="absolute top-5 left-1/2 -translate-x-1/2 layer layer_2 z-30" data-speed="2.0">
            <div class="flex justify-center items-center">

                <div class="flex gap-6 group relative">
                    <div class="relative peer/item1">
                        <div
                            class="flex justify-center items-center bg-dark_blue rounded-full w-13 h-13 text-3xl text-white cursor-pointer 
                           hover:scale-125 duration-500 shadow-icon">
                            <a href="https://github.com/Kaique-GM" target="_blank">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                    </div>

                    <div class="relative peer/item2">
                        <div
                            class="flex justify-center items-center bg-dark_blue rounded-full w-13 h-13 text-3xl text-white cursor-pointer 
                           hover:scale-125 duration-500 shadow-icon">
                            <a href="https://www.linkedin.com/in/kaique-gm/" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                    <div class="relative peer/item3">
                        <div
                            class="flex justify-center items-center bg-dark_blue rounded-full w-13 h-13 text-3xl text-white cursor-pointer 
                           hover:scale-125 duration-500 shadow-icon">
                            <a href="mailto:kaiquegmoficial@gmail.com">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>

                    <div
                        class="absolute -bottom-4 left-0 h-1 w-full bg-dark_blue rounded-full duration-500 ease-in-out shadow-bar
                       group-hover:w-13
                       group-hover:left-0
                       peer-hover/item1:left-[0%]
                       peer-hover/item2:left-[38%]
                       peer-hover/item3:left-[75%]"></div>

                </div>
            </div>
        </div>

        <div id="lang-switch" class="z-50 layer layer_2" data-speed="2.0">
            <div class="border-[1.5px] border-background rounded-full flex py-0.4 px-4 gap-4  hover:scale-125 hover:filter-[drop-shadow(0px_0px_12px_rgba(0,0,0,0.6))] duration-300 ">
                <button data-lang="en" class="lang-btn duration-300 cursor-pointer">
                    <img src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/svg/1f1fa-1f1f8.svg"
                        width="30" draggable="false">
                </button>
                <span class="text-background opacity-70 font-semibold text-3xl select-none">/</span>

                <button data-lang="pt" class="lang-btn duration-300 cursor-pointer">
                    <img src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/svg/1f1e7-1f1f7.svg"
                        width="30" draggable="false">
                </button>
            </div>
        </div>

        <div class="relative flex flex-col justify-center items-end text-background font-jersey text-[36px] z-45 layer layer_2" data-speed="2.0">
            <a href="/" class="hover:scale-125 hover:filter-[drop-shadow(0px_0px_12px_rgba(0,0,0,0.6))] duration-300 leading-12">{{ __('messages.sobre') }}</a>
            <a href="#" class="hover:scale-125 hover:filter-[drop-shadow(0px_0px_12px_rgba(0,0,0,0.6))] duration-300 leading-12">{{ __('messages.projetos') }}</a>
            <a href="#" class="hover:scale-125 hover:filter-[drop-shadow(0px_0px_12px_rgba(0,0,0,0.6))] duration-300 leading-12">{{ __('messages.skills') }}</a>
        </div>
    </div>
</nav>