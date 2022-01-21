<header id="header" class="module header w-full top-0 left-0 fixed z-200 down_lg:overflow-hidden">
    <div class="container">
        <nav class="row navbar items-center">
            <div
                class="col w-full down_lg:flex down_lg:flex-wrap lg:w-2/5 header-mobile relative justify-between items-center px-8 min-h-90">
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

            <div class="col w-full lg:w-3/5 navbar-collapse main-menu flex flex-col justify-between" id="main-menu"
                data-module="menu">
                <p class="text-left lg:hidden">
                    <a href="" class="btn btn-green w-138 md:w-110 xl:mr-64 xl:ml-14">Book Now</a>
                </p>
                <ul
                    class="main-menu-ul navbar-nav list-none flex mb-0 p-0 text-white flex-col text-inherit
        lg:flex-row lg:justify-end">
                    <li class="menu-item mb-0 ">
                        <a class="block py-9 lg:pt- no-underline text-primary" href="#">Our Practice</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block py-9 lg:p-4 no-underline text-primary" href="#">Services</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block py-9 lg:p-4 no-underline text-primary" href="#">New Clients</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block py-9 lg:p-4 no-underline text-primary" href="#">Resources</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block py-9 lg:p-4 no-underline text-primary" href="#">Contact</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</header>
