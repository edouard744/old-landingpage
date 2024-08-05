<section class="js-box relative bg-white py-32" {{ $attributes }}>
    <div class="w-full max-w-7xl lg:mx-auto lg:max-w-5xl">
        <div class="mb-10 flex flex-col items-center gap-6 lg:flex-row lg:justify-between">
            <h2 class="text-scale js-up text-center font-bold text-blue-900">Mes réalisations</h2>
            <div class="js-down">
                <a
                    href="/projects"
                    class="slide mx-auto block w-max rounded-full border-2 bg-blue-600 px-6 py-3 text-xl font-medium text-white delay-100 duration-100 hover:scale-105 hover:border-2 hover:border-blue-600 hover:bg-gray-50 hover:font-bold hover:text-blue-600 focus:border-2 focus:border-blue-600 focus:font-bold focus:text-blue-600"
                >
                    Voir la page projets
                </a>
            </div>
        </div>
        <div class="mb-20 flex flex-col items-center justify-center gap-6 lg:flex-row">
            <a
                class="js-project group relative w-full max-w-2xl rounded-lg border-2 border-grey-100 lg:w-1/2 lg:max-w-xl"
                target="_blank"
                href="https://pression-pro.be/"
            >
                <img
                    class="z-20 h-full max-h-80 w-full rounded-lg object-cover"
                    src="{{ asset('storage/pression-pro.jpg') }}"
                    alt="projet1"
                />
                <div
                    class="transition-02 absolute bottom-20 flex flex-col items-end justify-end gap-4 text-white opacity-0 group-hover:bottom-0 group-hover:opacity-100 group-focus:bottom-0 group-focus:opacity-100"
                >
                    <div
                        class="linear-gradient hidden h-full w-full items-start gap-8 rounded-lg px-4 pb-8 pt-32 group-hover:flex group-focus:flex"
                    >
                        <span class="max-w-sm hyphens-auto text-justify text-xl font-medium">
                            PressionPro: Création d'un site pour un indépendant en nettoyage haute pression
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
            <a
                class="js-project group relative w-full max-w-2xl rounded-lg border-2 border-grey-100 lg:w-1/2 lg:max-w-xl"
                target="_blank"
                href="https://pression-pro.be/"
            >
                <img
                    class="z-20 h-full max-h-80 w-full rounded-lg object-cover"
                    src="{{ asset('storage/pression-pro.jpg') }}"
                    alt="projet1"
                />
                <div
                    class="transition-02 absolute bottom-20 flex flex-col items-end justify-end gap-4 text-white opacity-0 group-hover:bottom-0 group-hover:opacity-100"
                >
                    <div
                        class="linear-gradient hidden h-full w-full items-start gap-8 rounded-lg px-4 pb-8 pt-32 group-hover:flex"
                    >
                        <span class="max-w-sm hyphens-auto text-justify text-xl font-medium">
                            PressionPro: Création d'un site pour un indépendant en nettoyage haute pression
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
