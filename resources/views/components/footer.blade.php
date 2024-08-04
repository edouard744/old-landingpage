<footer class="bg-footer js-footer-box overflow-hidden pt-10 text-white" {{ $attributes }}>
    <div class="js-footer-up mx-auto mb-14 flex max-w-7xl flex-col gap-4 border-b-2 px-10 pb-10 lg:px-0">
        <span class="js-footer-up text-xl font-bold">Willems Edouard</span>
        <span class="js-footer-up text-xl">Transformer votre vision en réalité digital</span>
    </div>
    <div class="mb:items-center mx-auto mb-10 flex max-w-7xl flex-col px-10 md:flex-row md:justify-between lg:px-0">
        <div class="js-footer-left mb-10 flex flex-col justify-center gap-6 md:justify-start">
            <span class="js-footer-left text-xl font-bold">Navigation</span>
            <a class="js-footer-left hover:underline" href="#">Accueil</a>
            <a class="js-footer-left hover:underline" href="#">Projets</a>
            <a class="js-footer-left hover:underline" href="#">Contact</a>
        </div>
        <div class="flex min-w-32 flex-col gap-4 pb-4">
            <span class="js-footer-left text-xl font-semibold">Réseaux</span>
            <div class="flex gap-2">
                <div class="js-footer-left flex basis-12">
                    <a target="_blank" href="#" class="social-icon">
                        <x-facebooksvg class="h-7 w-7" />
                    </a>
                </div>
                <div class="js-footer-left flex basis-12">
                    <a target="_blank" href="#" class="social-icon">
                        <x-linkedinsvg class="h-6 w-6" />
                    </a>
                </div>
            </div>
        </div>
        <div class="js-footer-left mb-10 flex flex-col justify-center gap-6 md:justify-start">
            <span class="js-footer-left text-xl font-bold">Informations</span>
            <a href="mailto:contact@willems-edouard.be" class="js-footer-left hover:underline focus:underline">
                Mail : contact
                @willems-edouard.be
            </a>
            <a href="tel:+32498043730" class="js-footer-left hover:underline focus:underline">Tel : 04 98 04 37 30</a>
        </div>
    </div>
    <div
        class="js-footer-down mx-auto mb-10 flex max-w-7xl flex-col justify-center gap-6 border-t-2 px-10 py-10 md:mb-0 md:flex-row md:items-center md:justify-end lg:justify-between lg:px-0"
    >
        <span class="js-footer-down">Copyright Willems Edouard 2024</span>
        <a class="js-footer-down hover:underline" href="#">Condition générale</a>
    </div>
</footer>
