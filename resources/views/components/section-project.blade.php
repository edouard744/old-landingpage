<section class='max-w-7xl w-full relative  py-16' {{ $attributes }}>

    <div class='flex items-center  flex-col md:justify-between'>
        <h2 class='text-4xl text-blue-900 font-bold text-center mb-10'>Mes réalisations</h2>
        <div class='mx-auto border-b-blue-600 border-b-2 text-blue-600 font-medium text-2xl md:mx-0 mb-16'>
            <a href='/projects' class="flex gap-2 items-center ">
                <span>page projets</span>
                <x-arrowSvg/>
            </a>
        </div>

    </div>
    <div class='flex flex-col md:flex-row items-center justify-center mb-20 gap-6'>
        <a class=' w-full max-w-xs md:max-w-md md:w-1/3' href='#'>
            <img class='rounded-lg w-full ' src="{{asset('storage/EasyInk.jpg')}}" alt='projet1'>
        </a>
        <a class=' w-full max-w-xs md:max-w-md md:w-1/3' href='#'>
            <img class='rounded-lg w-full' src="{{asset('storage/DreamReal.jpg')}}" alt='projet1'>
        </a>
        <a class=' w-full max-w-xs md:max-w-md md:w-1/3' href='#'>
            <img class='rounded-lg w-full' src="{{asset('storage/Placehold.jpg')}}" alt='projet1'>
        </a>
    </div>
</section>
