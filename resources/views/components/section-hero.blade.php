<section
    class="js-hero-box bg-hero flex h-screen flex-col justify-center bg-cover bg-fixed bg-bottom pb-40 pt-24 md:bg-center"
>
    <div class="relative mx-auto min-h-max max-w-max py-16 text-center sm:max-w-lg md:max-w-2xl lg:w-full lg:max-w-5xl">
        <h1
            class="js-hero-up mx-auto mb-5 p-2 text-4xl font-bold text-blue-900 sm:max-w-[510px] md:max-w-2xl md:px-6 md:text-5xl lg:max-w-3xl lg:px-0 lg:text-6xl"
        >
            {{ __('message.hero.title') }}
        </h1>
        <p
            class="js-hero-up mx-auto mb-7 max-w-4xl text-lg font-medium text-blue-600 md:max-w-full md:text-xl lg:max-w-4xl lg:text-2xl"
        >
            {{ __('message.hero.subtitle') }}
        </p>
        <div class="js-hero-down mx-auto flex w-max flex-col justify-center gap-8 py-8 md:flex-row">
            <a
                href="/services"
                class="mx-auto block w-max min-w-72 max-w-full rounded-full border-2 border-blue-600 bg-white px-5 py-4 font-bold text-blue-600 transition-all hover:scale-105 hover:underline focus:scale-105 focus:underline"
            >
                {{ __('buttons.services') }}
            </a>
            <a
                href="/contact"
                class="block w-max min-w-72 max-w-full rounded-full border-2 border-blue-600 bg-blue-600 px-5 py-4 font-bold text-white transition-all hover:scale-105 hover:bg-blue-700 hover:underline focus:scale-105 focus:bg-blue-700 focus:underline"
            >
                {{ __('buttons.contact') }}
            </a>
        </div>
        <x-code-svg
            class="js-floating js-hero-up invisible absolute right-5 top-60 sm:visible sm:right-10 sm:top-60 sm:h-12 sm:w-12 md:right-20 lg:right-44 lg:top-64"
        />
        <x-web-svg
            class="js-floating js-hero-up invisible absolute right-5 top-36 sm:visible sm:right-4 sm:top-28 sm:h-10 sm:w-10 md:right-12 md:top-32 lg:right-32"
        />
        <x-mail-svg
            class="js-floating js-hero-up invisible absolute top-7 sm:visible sm:-left-4 sm:top-20 md:-left-2 md:top-20 lg:left-20"
        />
        <x-wordpress-svg
            class="js-floating js-hero-down left invisible absolute left-5 sm:visible sm:top-64 md:top-56 lg:left-32 lg:top-64"
        />
    </div>
</section>
