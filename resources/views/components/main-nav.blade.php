@php
    $currentUrl = Request::url();
@endphp

<nav class="sm:border-grey-400 relative z-20 h-full w-full min-w-max bg-white sm:border-b-2">
    <div class="nav-container relative' mx-4 flex items-center justify-between sm:max-w-3xl md:mx-auto">
        <input class="checkbox absolute right-5 top-0 z-40 h-16 w-10 cursor-pointer opacity-0" type="checkbox" />
        <div class="top-burger-menu sm:block">
            <div class="hamburger-lines absolute right-5 top-5 z-[31] flex h-5 w-8 flex-col justify-between">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <div
                class="logo absolute left-4 top-4 z-20 ml-5 text-xl text-blue-600 sm:top-0 sm:p-6 md:relative md:left-0"
            >
                <a href="/">logo</a>
            </div>
        </div>
        <ul
            class="menu-items absolute left-0 top-0 z-20 flex h-screen w-full flex-col items-center justify-center gap-16 bg-blue-800 pt-28 text-center text-2xl sm:relative sm:h-max sm:flex-row sm:justify-end sm:bg-transparent sm:py-6 sm:text-lg sm:text-blue-600"
        >
            <li class="list-none">
                <a
                    href="/home"
                    class="{{ str_contains($currentUrl, '/home') ? ' sm:text-blue-600 text-white underline sm:no-underline font-semibold' : 'font-medium sm:text-grey-800 text-white ' }} block duration-200 hover:scale-105 hover:underline focus:scale-105 focus:underline sm:hover:text-blue-600 sm:focus:text-blue-600"
                >
                    Accueil
                </a>
            </li>
            <li class="list-none">
                <a
                    href="/projects"
                    class="{{ str_contains($currentUrl, '/projects') ? ' sm:text-blue-600 text-white underline sm:no-underline font-semibold' : 'font-medium sm:text-grey-800 text-white ' }} block duration-200 hover:scale-105 hover:underline focus:scale-105 focus:underline sm:hover:text-blue-600 sm:focus:text-blue-600"
                >
                    Projets
                </a>
            </li>
            <li class="list-none">
                <a
                    href="/contact"
                    class="{{ str_contains($currentUrl, '/contact') ? ' sm:text-blue-600 text-white underline sm:no-underline font-semibold' : 'font-medium sm:text-grey-800 text-white ' }} block duration-200 hover:scale-105 hover:underline focus:scale-105 focus:underline sm:hover:text-blue-600 sm:focus:text-blue-600"
                >
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>
