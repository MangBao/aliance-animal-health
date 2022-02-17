@php
    $classMenu = 'main-menu-modern list-none flex mb-0 p-0 text-blue-400 flex-col text-inherit font-bold lg:flex-row lg:justify-end down_lg:pl-3 lg:absolute lg:bottom-0 3xl:relative';
@endphp

<header id="header" class="module header w-full top-0 left-0 fixed z-200 down_lg:overflow-hidden bg-white">
    <div class="container">
        <nav class="row navbar items-center">
            <div
                class="col w-full down_lg:flex down_lg:flex-wrap lg:w-1/5 header-mobile relative justify-between items-center px-8 min-h-90">
                <div class="lg:w-full relative py-5">
                    <a id="header-logo" class="navbar-brand header-logo py-5 inline-block align-middle "
                        href="{!! App::getLogo()['href'] !!}">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/favicon.png')" alt="{!! App::getLogo()['alt'] !!}" class="w-full mb-3">
                    </a>
                    <span class="text-txtLogo tracking-sp8 text-txtLogos font-bold">
                        ABC Animal Clinic
                    </span>
                </div>
                <div class="block lg:hidden">
                    <button class="navbar-toggler hamburger-menu p-4 mt-3 cursor-pointer mb-8" type="button"
                        data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar block bg-primary relative ml-auto w-16 h-2"></span>
                        <span class="icon-bar block bg-primary relative ml-auto w-16 h-2 mt-3"></span>
                        <span class="icon-bar block bg-primary relative ml-auto w-16 h-2 mt-3"></span>
                        <span class="sr-only">Open Menu</span>
                    </button>
                </div>
            </div>

            <div class="col w-full lg:w-4/5 navbar-collapse main-menu flex-col justify-between" id="main-menu"
                data-module="menu">
                <ul class="list-none flex items-baseline justify-end">
                    <li class="mb-0 cursor-pointer ml-9">
                        <span class="icon-font icon-icon-phone1 p-4 rounded-3xl border-solid border-1"></span>
                        (501) 821-0049
                    </li>
                    <li class="mb-0 cursor-pointer ml-9">
                        <span class="icon-font icon-icon-sms p-4 rounded-3xl border-solid border-1"></span>
                        (501) 888-8888
                    </li>
                    <li class="mb-0">
                        <p class="text-right mt-6 mb-0">
                            <a href="" class="btn btn-second w-110 xl:ml-14">Book Now</a>
                        </p>
                    </li>
                </ul>

                {{-- {!! App::getHeaderNav() !!} --}}

                <ul
                    class="main-menu-ul navbar-nav list-none flex mb-0 p-0 text-white flex-col text-inherit lg:flex-row lg:justify-end">
                    <li class="menu-item mb-0 ml-53 has-sub">
                        <a class="block py-9 lg:px-4 no-underline text-primary" href="#">Our Practice</a>
                        <ul class="transition-all duration-300 ease-in-out list-none hidden p-0
                        lg:block lg:absolute lg:opacity-0 lg:pointer-events-none mb-0
                        last-mb-none lg:bg-white down_lg:mt-6 text-blue-500 lg:text-gray-400 lg:left-35 xl:left-28 font-normal down_lg:font-normal">
                            <li class="menu-item"><a class="hover-no-underline" href="#">Meet The Team</a></li>
                            <li class="menu-item"><a class="hover-no-underline" href="#">Testimonials</a></li>
                            <li class="menu-item"><a class="hover-no-underline" href="#">Careers</a></li>
                        </ul>
                    </li>
                    <li class="menu-item mb-0 ml-53">
                        <a class="block py-9 lg:px-4 no-underline text-primary" href="#">Services</a>
                    </li>
                    <li class="menu-item mb-0 ml-53">
                        <a class="block py-9 lg:px-4 no-underline text-primary" href="#">New Clients</a>
                    </li>
                    <li class="menu-item mb-0 ml-53">
                        <a class="block py-9 lg:px-4 no-underline text-primary" href="#">Resources</a>
                    </li>
                    <li class="menu-item mb-0 ml-53">
                        <a class="block py-9 lg:px-4 no-underline text-primary" href="#">Contact</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</header>
