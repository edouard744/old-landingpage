<!DOCTYPE html>
<html lang="en">
    <x-head description="Mes projets" title="Willems Edouard : Projets" />

    <x-body>
        <x-main-nav />
        <section class="bg-contact min-h-screen">
            <div class="relative mx-auto w-full max-w-7xl py-20">
                <h1 class="mb-10 text-center font-bold text-blue-900">Mes projets</h1>
                <div class="mx-2 mb-20 flex justify-center">
                    <a
                        class="js-project group relative mx-8 w-full max-w-2xl rounded-lg lg:max-w-5xl"
                        target="_blank"
                        href="https://pression-pro.be/"
                    >
                        <img
                            class="z-20 h-full w-full rounded-lg object-cover"
                            src="{{ asset('storage/pression-pro.jpg') }}"
                            alt="projet1"
                        />
                        <div
                            class="transition-02 absolute bottom-20 flex w-full flex-col items-end justify-end gap-4 text-white opacity-0 group-hover:bottom-0 group-hover:opacity-100 group-focus:bottom-0 group-focus:opacity-100"
                        >
                            <div
                                class="linear-gradient hidden h-full w-full items-start justify-center gap-8 rounded-lg px-4 pb-8 pt-32 group-hover:flex group-focus:flex"
                            >
                                <span class="max-w-2xl font-medium md:text-xl xl:text-2xl">
                                    PressionPro : Création d'un site pour un indépendant en nettoyage haute pression
                                </span>
                                <div class="white rounded-full bg-grey-50 p-1">
                                    <svg
                                        class="h-10 w-10 fill-grey-800"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 -12 100 125"
                                        xml:space="preserve"
                                    >
                                        <g>
                                            <path
                                                d="M83.3,79.7c0,2-1.6,3.6-3.6,3.6H20.3c-2,0-3.6-1.6-3.6-3.6V20.3c0-2,1.6-3.6,3.6-3.6h23.4V9.5H20.3   c-6,0-10.8,4.8-10.8,10.8v59.4c0,6,4.8,10.8,10.8,10.8h59.4c6,0,10.8-4.8,10.8-10.8V56.3h-7.2V79.7z"
                                            />
                                            <polygon
                                                points="56.3,9.5 56.3,16.7 78.2,16.7 49.9,45 55,50.1 83.3,21.8 83.3,43.7 90.5,43.7 90.5,9.5  "
                                            />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <x-footer />
    </x-body>
</html>
