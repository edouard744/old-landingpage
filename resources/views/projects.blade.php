<!DOCTYPE html>
<html lang="en">
    <x-head description="Mes projets" title="Willems Edouard : Projets" />

    <x-body>
        <x-main-nav />
        <section class="bg-hero h-screen bg-cover bg-top xl:bg-indigo-800">
            <div class="relative mx-auto w-full max-w-7xl py-20">
                <h1 class="mb-10 text-center font-bold text-blue-900">Mes projets</h1>
                <div class="mb-20 flex flex-col items-center gap-6">
                    <article
                        class="relative flex w-max max-w-full scale-100 flex-col items-center justify-between rounded-xl border-2 border-grey-100 bg-white p-2 py-8 shadow-lg duration-150 has-[:hover]:scale-[101%] md:flex-row md:p-8 lg:max-w-7xl"
                    >
                        <div class="mb-6 flex flex-col md:mb-0">
                            <h2 class="mb-6 text-2xl">Pression Pro</h2>
                            <p class="max-w-xs">
                                EasyInk : un CRM pour tatoueur, un projet réalisé lors de mon travail de fin d'étude
                            </p>
                            <a class="absolute left-0 top-0 z-20 h-full w-full" href="/projects/easyink">
                                <span class="sr-only">Liens vers le projets EasyInk</span>
                            </a>
                            <div class="mt-6 flex items-center gap-2">
                                <span class="text-purple-light">En savoir plus</span>
                                <svg
                                    width="24"
                                    height="21"
                                    viewBox="0 0 24 21"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M14.3299 19.7815L23.9399 10.1215L14.3299 0.461542C14.2432 0.347569 14.1329 0.253573 14.0066 0.18592C13.8803 0.118266 13.741 0.0785337 13.598 0.0694121C13.4551 0.0602904 13.3118 0.081993 13.178 0.13305C13.0441 0.184107 12.9228 0.263326 12.8222 0.365345C12.7216 0.467364 12.6442 0.589801 12.595 0.724366C12.5459 0.858932 12.5262 1.00248 12.5374 1.14531C12.5486 1.28813 12.5903 1.42688 12.6597 1.55218C12.7292 1.67748 12.8247 1.78639 12.9399 1.87154L20.1299 9.12154L0.999941 9.12154C0.734724 9.12154 0.480372 9.2269 0.292835 9.41443C0.105299 9.60197 -5.91278e-05 9.85633 -5.91278e-05 10.1215C-5.91278e-05 10.3868 0.105299 10.6411 0.292835 10.8286C0.480372 11.0162 0.734724 11.1215 0.999941 11.1215L20.1299 11.1215L12.9399 18.3715C12.753 18.5598 12.6484 18.8147 12.6494 19.0801C12.6503 19.3454 12.7566 19.5996 12.9449 19.7865C13.1332 19.9735 13.3881 20.078 13.6535 20.0771C13.9188 20.0762 14.173 19.9698 14.3599 19.7815H14.3299Z"
                                        fill="#D0A1FF"
                                    />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-6 w-10/12 max-w-md md:mb-0 md:w-1/2">
                            <img class="w-full rounded-lg" src="{{ asset('storage/EasyInk.jpg') }}" alt="projet1" />
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <x-footer />
    </x-body>
</html>
