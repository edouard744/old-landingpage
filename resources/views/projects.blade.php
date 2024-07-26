<!DOCTYPE html>
<html lang="en">

    <x-head description="Mes projets" title="Willems Edouard : Projets" />

        <x-body>


            <x-main-nav />
                <section class='bg-hero h-screen  xl:bg-indigo-800 bg-top bg-cover'>
                    <div class="max-w-7xl py-20 w-full relative mx-auto">
                        <h1 class='text-center text-blue-900 font-bold mb-10'>Mes projets</h1>
                        <div class='flex flex-col items-center mb-20 gap-6'>
                            <article class='p-2 bg-white shadow-lg py-8 md:p-8 duration-150 has-[:hover]:scale-[101%] scale-100 relative flex flex-col items-center justify-between md:flex-row border-grey-100 w-max max-w-full lg:max-w-7xl border-2 rounded-xl'>
                                <div class='flex mb-6 md:mb-0 flex-col'>
                                    <h2 class='text-2xl mb-6'>EasyInk</h2>
                                    <ul class='flex mb-6 gap-2'>
                                        <li>

                                            <div class="py-1 px-3 box">
                                                <span class='text-gradient'>ReactJS</span>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="py-1 px-3 box">
                                                <span class='text-gradient'>Node.JS</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="py-1 px-3 box">
                                                <span class='text-gradient'>CRM</span>
                                            </div>
                                        </li>

                                    </ul>
                                    <p class='max-w-xs'>EasyInk : un CRM pour tatoueur, un projet réalisé lors de mon travail de fin d'étude</p>
                                    <a class=' z-20 w-full absolute h-full top-0 left-0' href='/projects/easyink'>
                                        <span class='sr-only'>Liens vers le projets EasyInk</span>
                                    </a>
                                    <div class='flex items-center gap-2 mt-6'>
                                        <span class='text-purple-light'>En savoir plus</span>
                                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.3299 19.7815L23.9399 10.1215L14.3299 0.461542C14.2432 0.347569 14.1329 0.253573 14.0066 0.18592C13.8803 0.118266 13.741 0.0785337 13.598 0.0694121C13.4551 0.0602904 13.3118 0.081993 13.178 0.13305C13.0441 0.184107 12.9228 0.263326 12.8222 0.365345C12.7216 0.467364 12.6442 0.589801 12.595 0.724366C12.5459 0.858932 12.5262 1.00248 12.5374 1.14531C12.5486 1.28813 12.5903 1.42688 12.6597 1.55218C12.7292 1.67748 12.8247 1.78639 12.9399 1.87154L20.1299 9.12154L0.999941 9.12154C0.734724 9.12154 0.480372 9.2269 0.292835 9.41443C0.105299 9.60197 -5.91278e-05 9.85633 -5.91278e-05 10.1215C-5.91278e-05 10.3868 0.105299 10.6411 0.292835 10.8286C0.480372 11.0162 0.734724 11.1215 0.999941 11.1215L20.1299 11.1215L12.9399 18.3715C12.753 18.5598 12.6484 18.8147 12.6494 19.0801C12.6503 19.3454 12.7566 19.5996 12.9449 19.7865C13.1332 19.9735 13.3881 20.078 13.6535 20.0771C13.9188 20.0762 14.173 19.9698 14.3599 19.7815H14.3299Z" fill="#D0A1FF"/>
                                        </svg>

                                    </div>
                                </div>
                                <div class='mb-6 md:mb-0 max-w-md w-10/12 md:w-1/2'>


                                    <img class='rounded-lg w-full ' src="{{asset('storage/EasyInk.jpg')}}" alt='projet1'>
                                </div>



                            </article>
                        



                        </div>
                    </div>
                </section>
                <x-footer />
        </x-body>
</html>
