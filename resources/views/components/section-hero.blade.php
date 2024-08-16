<section
    class="js-hero-box bg-hero flex h-screen flex-col justify-center bg-cover bg-fixed bg-bottom pb-40 pt-24 md:bg-center"
>
    <div class="relative mx-auto min-h-max max-w-max py-16 text-center lg:w-full lg:max-w-5xl">
        <h1
            class="js-hero-up mx-auto mb-5 max-w-sm text-4xl font-bold text-blue-900 sm:max-w-[510px] md:max-w-2xl md:px-6 md:text-5xl lg:max-w-3xl lg:px-0 lg:text-6xl"
        >
            {{ __('message.hero.title') }}
        </h1>
        <p class="js-hero-up mb-7 max-w-4xl text-lg font-medium text-blue-600 md:max-w-full md:text-xl lg:text-2xl">
            {{ __('message.hero.subtitle') }}
        </p>
        <div class="js-hero-down">
            <a
                href="/contact"
                class="curtain-animation mx-auto block w-max rounded-full border-2 border-blue-600 bg-blue-600 px-5 py-4 text-white delay-100 duration-100 hover:scale-105 hover:font-bold hover:text-blue-600 focus:scale-105 focus:text-blue-600 focus-visible:font-bold"
            >
                {{ __('buttons.contact') }}
            </a>
        </div>
        <x-code-svg
            class="js-floating js-hero-up absolute right-5 top-60 sm:right-10 sm:top-52 sm:h-12 sm:w-12 md:right-20 md:top-56 lg:right-44 lg:top-64"
        />
        <x-web-svg
            class="js-floating js-hero-up absolute right-5 top-36 sm:right-4 sm:top-28 sm:h-10 sm:w-10 md:right-8 md:top-32 lg:right-32"
        />
        <x-mail-svg class="js-floating js-hero-up absolute top-7 sm:left-6 md:left-0 md:top-20 lg:left-20" />
        <x-wordpress-svg
            class="js-floating js-hero-down absolute left-5 top-40 sm:top-32 md:left-2 md:top-52 lg:left-28 lg:top-48"
        />
    </div>
</section>
