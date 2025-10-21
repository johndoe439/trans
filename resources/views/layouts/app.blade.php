<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="web development agency" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="dash/images/favicon.ico" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('/dash/css/output.css') }}" />

</head>

<body
    class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-3">
    {{-- <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="/dash/pre-loader/bar-loader.gif" alt="loader" />
    </div> --}}
    <!-- Start Header -->
    <header
        class="header px-4 sm:px-6 h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-white dark:bg-dark-card rounded-none xl:rounded-15 flex items-center mb-4 xl:m-4 group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_32px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_32px)] group-data-[sidebar-size=sm]:group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[theme-width=box]:xl:mr-0 dk-theme-card-square z-10 ac-transition">
        <div class="flex-center-between grow">
            <!-- Header Left -->
            <div class="flex items-center gap-4">
                <div class="menu-hamburger-container flex-center">
                    <button type="button" id="app-menu-hamburger" class="menu-hamburger hidden xl:block"></button>
                    <button type="button" class="menu-hamburger block xl:hidden" data-drawer-target="app-menu-drawer"
                        data-drawer-show="app-menu-drawer" aria-controls="app-menu-drawer"></button>
                </div>

            </div>
            <!-- Header Right -->
            <div class="flex items-center gap-1 sm:gap-3">
                <!-- Dark Light Button -->
                <button type="button"
                    class="themeMode size-8 flex-center hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md"
                    onclick="toggleThemeMode()">
                    <i
                        class="ri-contrast-2-line text-[22px] dark:text-dark-text-two dark:before:!content-['\f1bf']"></i>
                </button>


                <!-- Language Select Button -->

                <!-- Border -->
                <div
                    class="w-[1px] h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-[#EEE] dark:bg-dark-border hidden sm:block">
                </div>
                <!-- User Profile Button -->
                <div class="relative">
                    <button type="button" data-popover-target="dropdownProfile" data-popover-trigger="click"
                        data-popover-placement="bottom-end"
                        class="text-gray-500 dark:text-dark-text flex items-center gap-2 sm:pr-4 relative after:absolute after:right-0 after:font-remix after:content-['\ea4e'] after:text-[18px] after:hidden sm:after:block">
                        <img src="/dash/images/app/avatar-20.png" alt="user-img"
                            class="size-7 sm:size-9 rounded-50 dk-theme-card-square" />


                        <span
                            class="font-semibold leading-none text-lg capitalize hidden sm:block">{{ Auth::user()->name }}</span>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownProfile"
                        class="invisible z-backdrop bg-white text-left divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-dark-card-shade dark:divide-dark-border-four">
                        <div class="px-4 py-3 text-sm text-gray-500 dark:text-white">
                            <div class="font-medium">{{ Auth::user()->name }}</div>
                            <div class="truncate">
                                <a href="" class="__cf_email__">{{ Auth::user()->email }}</a>
                            </div>
                        </div>
                      
                        <div class="py-2">


                            <form method="POST"
                                action="{{ route('logout') }}"class="flex font-medium px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-dark-icon dark:text-gray-200 dark:hover:text-white">
                                @csrf

                                <button class="group-data-[sidebar-size=sm]:hidden block"> Signout </button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <div>
        <!-- Start App Menu -->
        <div id="app-menu-drawer"
            class="app-menu flex flex-col gap-y-2.5 bg-white dark:bg-dark-card w-app-menu fixed top-0 left-0 bottom-0 -translate-x-full group-data-[sidebar-size=sm]:min-h-screen group-data-[sidebar-size=sm]:h-max xl:translate-x-0 rounded-r-10 xl:rounded-15 xl:group-data-[sidebar-size=lg]:w-app-menu xl:group-data-[sidebar-size=sm]:w-app-menu-sm xl:group-data-[sidebar-size=sm]:absolute xl:group-data-[sidebar-size=lg]:fixed xl:top-4 xl:left-4 xl:bottom-4 z-backdrop xl:group-data-[theme-width=box]:left-auto dk-theme-card-square ac-transition"
            tabindex="-1">
            <div
                class="px-4 h-header flex items-center shrink-0 group-data-[sidebar-size=sm]:px-2 group-data-[sidebar-size=sm]:justify-center">
                <a href="index-2.html" class="group-data-[sidebar-size=lg]:block hidden">
                    <img src="assets/images/logo/logo-text.svg" alt="logo" class="group-[.dark]:hidden" />
                    <img src="assets/images/logo/logo-text-dark.svg" alt="logo" class="group-[.light]:hidden" />
                </a>
                <a href="index-2.html" class="group-data-[sidebar-size=lg]:hidden block">
                    <img src="assets/images/logo/logo-icon.svg" alt="logo" />
                </a>
            </div>
            <div id="app-menu-scrollbar" data-scrollbar
                class="pl-4 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:!overflow-visible !overflow-x-hidden smooth-scrollbar">
                <div class="group-data-[sidebar-size=lg]:max-h-full">
                    <ul id="navbar-nav"
                        class="text-[14px] !leading-none space-y-1 group-data-[sidebar-size=sm]:space-y-2.5 group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:flex-col group-data-[sidebar-size=sm]:items-start group-data-[sidebar-size=sm]:mx-2 group-data-[sidebar-size=sm]:overflow-visible">

                        <!-- Users -->
                        <li
                            class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                            <a href="{{ route('dashboard') }}"
                                class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                                <span
                                    class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <path
                                            d="M4.30692 10.1428V13.2197C4.30692 13.5461 4.17725 13.8592 3.94644 14.09C3.71562 14.3208 3.40257 14.4505 3.07615 14.4505H1.84539C1.51897 14.4505 1.20592 14.3208 0.975107 14.09C0.744293 13.8592 0.614624 13.5461 0.614624 13.2197V8.91205H3.07615C3.40257 8.91205 3.71562 9.04172 3.94644 9.27253C4.17725 9.50334 4.30692 9.81639 4.30692 10.1428ZM12.9223 8.91205C12.5959 8.91205 12.2828 9.04172 12.052 9.27253C11.8212 9.50334 11.6915 9.81639 11.6915 10.1428V13.2197C11.6915 13.5461 11.8212 13.8592 12.052 14.09C12.2828 14.3208 12.5959 14.4505 12.9223 14.4505H14.153C14.4795 14.4505 14.7925 14.3208 15.0233 14.09C15.2541 13.8592 15.3838 13.5461 15.3838 13.2197V8.91205H12.9223Z"
                                            fill="#EEEEEE"
                                            class="group-hover/menu-link:fill-[url(#g_23)] group-[.active]/menu-link:fill-[url(#g_23)] dark:fill-none" />
                                        <path
                                            d="M13.6831 3.27054C12.5654 2.14638 11.1393 1.37929 9.58525 1.06649C8.03123 0.75368 6.41934 0.909233 4.95382 1.51343C3.4883 2.11763 2.23512 3.14329 1.35309 4.46042C0.471066 5.77755 -0.000112336 7.32687 -0.000732422 8.91205V13.2197C-0.000732422 13.7094 0.193772 14.1789 0.539992 14.5252C0.886211 14.8714 1.35579 15.0659 1.84541 15.0659H3.07618C3.56581 15.0659 4.03538 14.8714 4.3816 14.5252C4.72782 14.1789 4.92233 13.7094 4.92233 13.2197V10.1428C4.92233 9.65319 4.72782 9.18362 4.3816 8.8374C4.03538 8.49118 3.56581 8.29667 3.07618 8.29667H1.25772C1.41125 6.61483 2.18791 5.05113 3.43523 3.91255C4.68254 2.77397 6.31041 2.14276 7.99924 2.14285H8.05078C9.73257 2.14995 11.3511 2.78492 12.5891 3.9233C13.8271 5.06167 14.5952 6.62137 14.7431 8.29667H12.9223C12.4327 8.29667 11.9631 8.49118 11.6169 8.8374C11.2707 9.18362 11.0761 9.65319 11.0761 10.1428V13.2197C11.0761 13.7094 11.2707 14.1789 11.6169 14.5252C11.9631 14.8714 12.4327 15.0659 12.9223 15.0659H14.1531C14.6427 15.0659 15.1123 14.8714 15.4585 14.5252C15.8047 14.1789 15.9992 13.7094 15.9992 13.2197V8.91205C16.0032 7.86558 15.8007 6.82859 15.4032 5.86052C15.0058 4.89244 14.4212 4.01231 13.6831 3.27054ZM3.07618 9.52744C3.23939 9.52744 3.39591 9.59227 3.51132 9.70768C3.62673 9.82308 3.69156 9.97961 3.69156 10.1428V13.2197C3.69156 13.3829 3.62673 13.5395 3.51132 13.6549C3.39591 13.7703 3.23939 13.8351 3.07618 13.8351H1.84541C1.68221 13.8351 1.52568 13.7703 1.41027 13.6549C1.29487 13.5395 1.23003 13.3829 1.23003 13.2197V9.52744H3.07618ZM14.7684 13.2197C14.7684 13.3829 14.7036 13.5395 14.5882 13.6549C14.4728 13.7703 14.3163 13.8351 14.1531 13.8351H12.9223C12.7591 13.8351 12.6026 13.7703 12.4872 13.6549C12.3717 13.5395 12.3069 13.3829 12.3069 13.2197V10.1428C12.3069 9.97961 12.3717 9.82308 12.4872 9.70768C12.6026 9.59227 12.7591 9.52744 12.9223 9.52744H14.7684V13.2197Z"
                                            fill="#999999"
                                            class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                        <defs>
                                            <linearGradient id="g_23" x1="2.18655" y1="3.46529" x2="8.18057"
                                                y2="12.9769" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#795DED" />
                                                <stop offset="0.0001" stop-color="#7D5DFE" />
                                                <stop offset="1" stop-color="#76D466" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                                <span
                                    class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                    Tracking Codes
                                </span>
                            </a>
                        </li>











                    </ul>
                </div>
            </div>


            <!-- Logout Link -->
            <div class="mt-auto px-7 py-6 group-data-[sidebar-size=sm]:px-2">
                <form method="POST"
                    action="{{ route('logout') }}"class="flex-center-between text-gray-500 dark:text-dark-text font-semibold leading-none bg-gray-200 dark:bg-[#090927] dark:group-data-[sidebar-size=sm]:bg-dark-card-shade rounded-[10px] px-6 py-4 group-data-[sidebar-size=sm]:p-[12px_8px] group-data-[sidebar-size=sm]:justify-center dk-theme-card-square">
                    @csrf

                    <button class="group-data-[sidebar-size=sm]:hidden block"> logout </button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                        fill="none">
                        <path
                            d="M6.66645 15.3328C6.66645 15.5096 6.59621 15.6792 6.47119 15.8042C6.34617 15.9292 6.17661 15.9995 5.9998 15.9995H1.33329C0.979679 15.9995 0.640552 15.859 0.390511 15.609C0.140471 15.3589 0 15.0198 0 14.6662V1.33329C0 0.979679 0.140471 0.640552 0.390511 0.390511C0.640552 0.140471 0.979679 0 1.33329 0H5.9998C6.17661 0 6.34617 0.0702357 6.47119 0.195256C6.59621 0.320276 6.66645 0.48984 6.66645 0.666645C6.66645 0.84345 6.59621 1.01301 6.47119 1.13803C6.34617 1.26305 6.17661 1.33329 5.9998 1.33329H1.33329V14.6662H5.9998C6.17661 14.6662 6.34617 14.7364 6.47119 14.8614C6.59621 14.9865 6.66645 15.156 6.66645 15.3328ZM15.8045 8.47139L12.4713 11.8046C12.378 11.898 12.2592 11.9615 12.1298 11.9873C12.0004 12.0131 11.8663 11.9999 11.7444 11.9494C11.6225 11.8989 11.5184 11.8133 11.4451 11.7036C11.3719 11.5939 11.3329 11.4649 11.333 11.333V8.66638H5.9998C5.823 8.66638 5.65343 8.59615 5.52841 8.47113C5.40339 8.34611 5.33316 8.17654 5.33316 7.99974C5.33316 7.82293 5.40339 7.65337 5.52841 7.52835C5.65343 7.40333 5.823 7.33309 5.9998 7.33309H11.333V4.66651C11.3329 4.53459 11.3719 4.4056 11.4451 4.29587C11.5184 4.18615 11.6225 4.10062 11.7444 4.05012C11.8663 3.99962 12.0004 3.98642 12.1298 4.01218C12.2592 4.03795 12.378 4.10152 12.4713 4.19486L15.8045 7.52809C15.8665 7.59 15.9156 7.66352 15.9492 7.74445C15.9827 7.82538 16 7.91213 16 7.99974C16 8.08735 15.9827 8.17409 15.9492 8.25502C15.9156 8.33595 15.8665 8.40948 15.8045 8.47139ZM14.3879 7.99974L12.6663 6.27563V9.72385L14.3879 7.99974Z"
                            fill="currentColor" />
                    </svg>
                </form>

            </div>
        </div>
        <!-- End App Menu -->


    </div>
    {{ $slot }}
    {{--
    @if (Auth::user()->role == 'user')
        <x-user></x-user>
    @elseif(Auth::user()->role == 'admin')
        <x-admin></x-admin>
    @endif --}}


    <script data-cfasync="false" src="/dash/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('dash/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('dash/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dash/js/vendor/flowbite.min.js') }}"></script>
    <script src="{{ asset('dash/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dash/js/pages/dashboard-lms.js') }}"></script>
    <script src="{{ asset('dash/js/component/app-menu-bar.js') }}"></script>
    <script src="{{ asset('dash/js/component/tab.js') }}"></script>
    <script src="{{ asset('dash/js/switcher.js') }}"></script>
    <script src="{{ asset('dash/js/layout.js') }}"></script>
    <script src="{{ asset('dash/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


</body>


</html>
