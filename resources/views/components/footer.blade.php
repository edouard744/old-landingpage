@php
    $currentUrl = explode('/', Request::url());

    $locale = App::currentLocale();
@endphp

<footer class="bg-footer js-footer-box overflow-hidden px-4 py-24 text-white md:px-8" {{ $attributes }}>
    <button
        class="scrollToTopBtn group rounded-full bg-blue-600 p-4 transition-all hover:scale-105 hover:bg-blue-800 focus:scale-105 focus:bg-blue-800"
    >
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path stroke-dasharray="20" stroke-dashoffset="20" d="M3 3l18 0">
                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="20;0" />
                </path>
                <path stroke-dasharray="16" stroke-dashoffset="16" d="M12 21l0 -13.5">
                    <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.3s" dur="0.2s" values="16;0" />
                </path>
                <path stroke-dasharray="8" stroke-dashoffset="8" d="M12 7l4 4M12 7l-4 4">
                    <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="8;0" />
                </path>
            </g>
        </svg>
        <span class="sr-only">{{ __('buttons.scrollToTop') }}</span>
    </button>

    <div class="js-footer-up mx-auto mb-14 flex max-w-7xl flex-col gap-4 border-b-2 px-10 pb-10 lg:px-0">
        <span class="js-footer-up text-xl font-bold">Willems Edouard</span>
        <span class="js-footer-up text-xl">{{ __('message.footer.subtitle') }}</span>
    </div>
    <div class="mb:items-center mx-auto mb-10 flex max-w-7xl flex-col px-10 md:flex-row md:justify-between lg:px-0">
        <div class="js-footer-left mb-10 flex flex-col justify-center gap-6 md:justify-start">
            <span class="js-footer-left text-xl font-bold">{{ __('message.footer.navigation') }}</span>
            <a class="js-footer-left hover:underline" href="/{{ $locale }}/home">
                {{ __('buttons.navigation.home') }}
            </a>
            <a class="js-footer-left hover:underline" href="/{{ $locale }}/services">
                {{ __('buttons.navigation.services') }}
            </a>
            <a class="js-footer-left hover:underline" href="/{{ $locale }}/projects">
                {{ __('buttons.navigation.projects') }}
            </a>
            <a class="js-footer-left hover:underline" href="/{{ $locale }}/contact">
                {{ __('buttons.navigation.contact') }}
            </a>
        </div>
        <div class="flex min-w-32 flex-col gap-4 pb-4">
            <span class="js-footer-left text-xl font-semibold">{{ __('message.footer.network') }}</span>
            <div class="flex gap-2">
                <div class="js-footer-left flex basis-12">
                    <a target="_blank" href="#" class="social-icon">
                        <x-facebook-svg class="h-7 w-7" />
                    </a>
                </div>
                <div class="js-footer-left flex basis-12">
                    <a target="_blank" href="#" class="social-icon">
                        <x-linkedin-svg class="h-6 w-6" />
                    </a>
                </div>
            </div>
        </div>
        <div class="js-footer-left mb-10 flex flex-col justify-center gap-6 md:justify-start">
            <span class="js-footer-left text-xl font-bold">{{ __('message.footer.informations.title') }}</span>
            <a href="mailto:contact@willems-edouard.be" class="js-footer-left hover:underline focus:underline">
                <span>
                    {{ __('message.footer.informations.email') }}
                </span>
            </a>
            <a href="tel:+32498043730" class="js-footer-left hover:underline focus:underline">
                {{ __('message.footer.informations.phone') }}
            </a>
        </div>
    </div>
    <div
        class="js-footer-down mx-auto mb-10 flex max-w-7xl flex-col justify-center gap-6 border-t-2 px-10 py-10 md:mb-0 md:flex-row md:items-center md:justify-end lg:justify-between lg:px-0"
    >
        <span class="js-footer-down">©Willems Edouard 2024</span>
        <a class="js-footer-down hover:underline" href="/privacy-policy">{{ __('message.footer.conditions') }}</a>
    </div>
</footer>
