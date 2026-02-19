<footer class="w-full bg-[#09040A]">
    <div class="max-w-screen-2xl mx-auto flex flex-col justify-center items-center gap-10 py-10">

        <div class="flex flex-col justify-center items-center">
            <img src="{{ asset('images/about/pixel.gif') }}" alt="GIF"
                class="object-contain object-center w-24 h-24 md:w-32 md:h-32" draggable="false">
            <span class="text-white text-xl font-bungee drop-shadow-[0_4px_0px_rgba(0,0,0,1)] text-center">
                KIQ | Portfólio
            </span>
        </div>

        <div class="flex gap-6 group relative">
            <div class="relative peer/item1">
                <div
                    class="flex justify-center items-center rounded-full w-13 h-13 text-3xl text-white cursor-pointer 
                           hover:scale-125 duration-500 shadow-icon">
                    <a href="https://github.com/Kaique-GM" target="_blank">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </div>
            </div>

            <div class="relative peer/item2">
                <div
                    class="flex justify-center items-center rounded-full w-13 h-13 text-3xl text-white cursor-pointer 
                           hover:scale-125 duration-500 shadow-icon">
                    <a href="https://www.linkedin.com/in/kaique-gm/" target="_blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <div class="relative peer/item3">
                <div
                    class="flex justify-center items-center rounded-full w-13 h-13 text-3xl text-white cursor-pointer 
                           hover:scale-125 duration-500 shadow-icon">
                    <a href="mailto:kaiquegmoficial@gmail.com">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
            </div>

            <div
                class="absolute -bottom-4 left-0 h-1 w-full bg-white rounded-full duration-500 ease-in-out shadow-bar
                       group-hover:w-13
                       group-hover:left-0
                       peer-hover/item1:left-[0%]
                       peer-hover/item2:left-[38%]
                       peer-hover/item3:left-[75%]">
            </div>

        </div>

        <div class="font-lexend text-[#D1D5D8] pt-2">
            &copy; 2026 Kaique Mattos
        </div>
    </div>
</footer>
