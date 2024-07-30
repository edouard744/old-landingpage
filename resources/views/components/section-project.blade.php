<section class=' bg-white js-box relative  py-32' {{ $attributes }}>

    <div class="max-w-7xl w-full lg:max-w-5xl lg:mx-auto" >
        <div class='flex  gap-6 items-center mb-10 flex-col lg:flex-row lg:justify-between'>
            <h2 class='text-scale js-up text-blue-900 font-bold text-center'>Mes réalisations</h2>
            <div class=' js-down'>
                <a href='/projects' class="block w-max bg-blue-600 hover:bg-gray-50 text-white border-2 font-medium duration-100 delay-100 hover:font-bold focus:font-bold hover:border-blue-600 focus:border-blue-600 hover:border-2 focus:border-2 focus:text-blue-600  hover:text-blue-600 slide-animation hover:scale-105 py-4 px-10 text-xl rounded-full mx-auto">
                    Voir la page projets
                </a>
            </div>

        </div>
        <div class='flex flex-col lg:flex-row items-center justify-center mb-20 gap-6'>
            <a class='js-project w-full max-w-2xl lg:max-w-xl lg:w-1/2 border-grey-100 border-2 rounded-lg' href='#'>
                <img class='rounded-lg w-full ' src="{{asset('storage/EasyInk.jpg')}}" alt='projet1'>
            </a>
            <a class='js-project w-full max-w-2xl lg:max-w-xl lg:w-1/2 border-grey-100 border-2 rounded-lg' href='#'>
                <img class='rounded-lg w-full ' src="{{asset('storage/EasyInk.jpg')}}" alt='projet1'>
            </a>
        </div>
    </div>
</section>
