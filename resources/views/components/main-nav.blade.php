@php
    $currentUrl = Request::url();

@endphp
<nav class="w-full z-20 bg-white sm:border-b-2 sm:border-grey-400 relative h-full min-w-max ">
    <div class="nav-container sm:max-w-5xl mx-auto flex justify-between items-center relative'">
        <input class="checkbox absolute h-16 w-10 top-0 right-5 opacity-0 cursor-pointer z-40" type="checkbox" />
        <div class="top-burger-menu sm:block">
            <div class="hamburger-lines flex flex-col justify-between h-5 w-8 absolute top-5 right-5 z-[31]">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <div class="logo z-20 sm:top-0 ml-5 sm:p-6 md:left-0  md:relative  absolute  top-4 left-4 text-xl text-blue-600">
                <a href="/">logo</a>
            </div>
        </div>
        <ul class="menu-items sm:relative flex flex-col sm:flex-row gap-16 justify-center bg-blue-800 sm:bg-transparent  sm:text-blue-600 z-20  items-center pt-28 sm:py-6 h-screen sm:h-max w-full  absolute top-0 left-0 text-center text-2xl sm:text-lg">
            <li class="list-none"><a href="/home" class="hover:underline focus:underline sm:hover:text-blue-600 sm:focus:text-blue-600  focus:scale-105 duration-200 hover:scale-105 block {{str_contains( $currentUrl, '/home') ? ' sm:text-blue-600 text-white underline sm:no-underline font-semibold' : 'font-medium sm:text-grey-800 text-white ' }}">Home</a></li>
            <li class="list-none"><a href="/projects" class="hover:underline focus:underline sm:hover:text-blue-600 sm:focus:text-blue-600  focus:scale-105 duration-200 hover:scale-105 block {{str_contains($currentUrl,'/projects') ? ' sm:text-blue-600 text-white underline sm:no-underline font-semibold' : 'font-medium sm:text-grey-800 text-white ' }}">Projets</a></li>
            <li class="list-none"><a href="/contact" class="hover:underline focus:underline sm:hover:text-blue-600 sm:focus:text-blue-600  focus:scale-105 duration-200 hover:scale-105 block {{str_contains($currentUrl,'/contact') ? ' sm:text-blue-600 text-white underline sm:no-underline font-semibold' : 'font-medium sm:text-grey-800 text-white ' }}">Contact</a></li>
        </ul>
    </div>
</nav>
