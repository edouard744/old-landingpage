<section
    class="js-intro-box relative -mb-10 -mt-14 rounded-[3rem] border-2 border-[#E1E7EE] bg-[#FEFEFE] px-2 shadow-xl"
>
    <div class="md:mx-auto md:max-w-5xl">
        <div id="intro-header" class="js-intro-trigger mb-9 pt-24">
            <h2
                class="js-intro-down text-scale-sm mx-auto mb-7 max-w-sm text-center font-bold text-blue-900 sm:max-w-xl md:max-w-2xl"
            >
                {{ __('message.intro.title') }}
                <span class="text-blue-600">{{ __('message.intro.title_last') }}</span>
            </h2>
            <p class="js-intro-down mx-auto mb-10 max-w-2xl text-center font-semibold">
                {{ __('message.intro.subtitle') }}
            </p>
            <div class="js-intro-up">
                <a
                    href="/services"
                    class="mx-auto mb-20 block w-max min-w-72 max-w-full rounded-full border-2 border-blue-600 bg-blue-600 px-3 py-3 text-center text-xl font-bold text-white transition-all hover:scale-105 hover:bg-blue-700 hover:underline focus:scale-105 focus:bg-blue-700 focus:underline"
                >
                    {{ __('buttons.services2') }}
                </a>
            </div>
        </div>
        <div class="relative grid-cols-2 gap-20 lg:mb-40 lg:grid">
            <x-double-arrow-svg
                class="absolute left-1/2 top-1/2 hidden -translate-x-1/2 -translate-y-1/2 transform lg:block"
            />
            <div class="js-group-down mb-20 flex flex-col items-center gap-5 text-center lg:mb-0 lg:justify-center">
                <x-create-svg class="js-service-section-down" />
                <span class="js-service-section-down text-3xl font-semibold text-blue-800">
                    {{ __('message.intro.creation.title') }}
                </span>
                <p class="js-service-section-down max-w-md text-xl font-medium">
                    {{ __('message.intro.creation.text') }}
                </p>
            </div>
            <div class="js-group-down mb-20 flex flex-col items-center gap-5 text-center lg:mb-0 lg:justify-center">
                <x-cleaning-svg class="js-service-section-down" />
                <span class="js-service-section-down text-3xl font-semibold text-blue-800">
                    {{ __('message.intro.cleaning.title') }}
                </span>
                <p class="js-service-section-down max-w-md text-xl font-medium">
                    {{ __('message.intro.cleaning.text') }}
                </p>
            </div>
            <div class="js-group-up mb-20 flex flex-col items-center gap-5 text-center lg:mb-0 lg:justify-center">
                <x-learning-svg class="js-service-section-up" />
                <span class="js-service-section-up text-3xl font-semibold text-blue-800">
                    {{ __('message.intro.maintenance.title') }}
                </span>
                <p class="js-service-section-up max-w-md text-xl font-medium">
                    {{ __('message.intro.maintenance.text') }}
                </p>
            </div>
            <div class="js-group-up mb-20 flex flex-col items-center gap-5 text-center lg:mb-0 lg:justify-center">
                <x-communicate-svg class="js-service-section-up" />
                <span class="js-service-section-up text-3xl font-semibold text-blue-800">
                    {{ __('message.intro.communication.title') }}
                </span>
                <p class="js-service-section-up max-w-md text-xl font-medium">
                    {{ __('message.intro.communication.text') }}
                </p>
            </div>
        </div>
    </div>
</section>
