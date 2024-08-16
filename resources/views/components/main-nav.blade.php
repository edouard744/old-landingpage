@php
    $currentUrl = Request::url();
    $locale = App::currentLocale();
    $cook = Request::cookie('lang');
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
                class="logo absolute left-4 top-4 z-20 ml-5 w-max text-xl text-blue-600 sm:top-0 sm:p-6 md:relative md:left-0"
            >
                <div class="relative flex justify-center gap-2">
                    <a class="absolute left-0 top-0 h-full w-full" href="/{{ $locale }}/home">
                        <span class="sr-only">{{ __('buttons.navigation.logo') }}</span>
                    </a>

                    <svg width="41" height="20" viewBox="0 0 41 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_933_199)">
                            <path
                                d="M16.6782 0.530776L16.3538 0.363608C15.1482 -0.257657 13.6746 0.230568 13.0625 1.45409L5.82687 15.9158C5.21471 17.1393 5.69578 18.6348 6.90138 19.2561L7.22577 19.4232C8.43137 20.0445 9.90495 19.5563 10.5171 18.3328L17.7527 3.87106C18.3649 2.64754 17.8838 1.15204 16.6782 0.530776Z"
                                fill="#0A0E67"
                            />
                            <path
                                d="M25.3081 0.53128L24.9837 0.364112C23.7781 -0.257153 22.3045 0.231072 21.6924 1.45459L14.4568 15.9163C13.8446 17.1398 14.3257 18.6353 15.5313 19.2566L15.8557 19.4238C17.0613 20.045 18.5348 19.5568 19.147 18.3333L26.3826 3.87156C26.9948 2.64804 26.5137 1.15255 25.3081 0.53128Z"
                                fill="#0A0E67"
                            />
                            <path
                                d="M3.96988 13.4096L0.390413 5.94616C0.180079 5.50769 0.0474356 5.03269 0.0133273 4.54615C-0.0605739 3.525 0.15355 1.93077 1.86654 0.821155C3.07928 0.0365399 4.68237 -0.115383 6.15092 0.809617C6.96004 1.31923 8.51386 2.775 7.87338 5.27885C7.77864 5.65 7.63273 6.00577 7.46408 6.34808L3.96799 13.4077L3.96988 13.4096Z"
                                fill="#0A0E67"
                            />
                            <path
                                d="M38.3702 14.6596H30.315H23.7548L21.083 19.9981H38.3683C39.8217 19.9981 40.9984 18.8019 40.9984 17.3288C40.9984 15.8538 39.8198 14.6596 38.3683 14.6596H38.3702Z"
                                fill="#4148E6"
                            />
                            <path
                                d="M34.6524 7.36923H27.4101L24.7383 12.7077H34.6524C36.1058 12.7077 37.2825 11.5115 37.2825 10.0385C37.2825 8.56346 36.1039 7.36923 34.6524 7.36923Z"
                                fill="#4148E6"
                            />
                            <path
                                d="M38.3703 0H31.0579L28.4297 5.25385V5.33846H30.5141H38.3684C39.8218 5.33846 40.9986 4.14231 40.9986 2.66923C40.9986 1.19615 39.8199 0 38.3684 0H38.3703Z"
                                fill="#4148E6"
                            />
                        </g>
                        <defs>
                            <clipPath id="clip0_933_199">
                                <rect width="41" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="hidden text-lg font-semibold text-blue-500 sm:inline">Willems Edouard</span>
                </div>
            </div>
        </div>
        <ul
            class="menu-items absolute left-0 top-0 z-20 flex h-screen w-full flex-col items-center justify-center gap-16 bg-blue-800 pt-28 text-center text-2xl sm:relative sm:h-max sm:flex-row sm:justify-end sm:bg-transparent sm:py-6 sm:text-lg sm:text-blue-600"
        >
            <li class="list-none">
                <a
                    href="/{{ $locale }}/home"
                    class="{{ str_contains($currentUrl, '/home') ? ' sm:text-blue-600 text-white underline sm:no-underline font-semibold' : 'font-medium sm:text-grey-800 text-white ' }} block duration-200 hover:scale-105 hover:underline focus:scale-105 focus:underline sm:hover:text-blue-600 sm:focus:text-blue-600"
                >
                    {{ __('buttons.navigation.home') }}
                </a>
            </li>
            <li class="list-none">
                <a
                    href="/{{ $locale }}/projects"
                    class="{{ str_contains($currentUrl, '/projects') ? ' sm:text-blue-600 text-white underline sm:no-underline font-semibold' : 'font-medium sm:text-grey-800 text-white ' }} block duration-200 hover:scale-105 hover:underline focus:scale-105 focus:underline sm:hover:text-blue-600 sm:focus:text-blue-600"
                >
                    {{ __('buttons.navigation.projects') }}
                </a>
            </li>
            <li class="list-none">
                <a
                    href="/{{ $locale }}/contact"
                    class="{{ str_contains($currentUrl, '/contact') ? ' sm:text-blue-600 text-white underline sm:no-underline font-semibold' : 'font-medium sm:text-grey-800 text-white ' }} block duration-200 hover:scale-105 hover:underline focus:scale-105 focus:underline sm:hover:text-blue-600 sm:focus:text-blue-600"
                >
                    {{ __('buttons.navigation.contact') }}
                </a>
            </li>
        </ul>
    </div>
</nav>
