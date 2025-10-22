<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg">


<head>

    <!-- Favicon -->
    <!-- Style CSS -->
    <link rel="stylesheet" href="dash/css/output.css">
</head>

<body class="bg-body-light dark:bg-dark-body">


    <!-- Start Main Content -->
    <div class="main-content m-4">
        <div
            class="grid grid-cols-12 gap-y-7 sm:gap-7 card px-4 sm:px-10 2xl:px-[70px] py-15 lg:items-center lg:min-h-[calc(100vh_-_32px)]">
            <!-- Start Overview Area -->
            <div class="col-span-full lg:col-span-6">
                <div class="flex flex-col items-center justify-center gap-10 text-center">
                    <div class="hidden sm:block">
                        <img src="/dash/images/loti/loti-auth.svg" alt="loti" class="group-[.dark]:hidden">
                        <img src="/dash/images/loti/loti-auth-dark.svg" alt="loti" class="group-[.light]:hidden">
                    </div>
                    <div>
                        <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                            Welcome back!
                        </h3>
                        <p class="font-medium text-gray-500 dark:text-dark-text mt-4 px-[10%]">
                            Whether you're launching a stunning online store optimizing your our object-oriented
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Overview Area -->

            <!-- Start Form Area -->
            <div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
                <div
                    class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                    <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                        Sign In
                    </h3>
                    <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                        Welcome Back! Log in to your account
                    </p>
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-2.5">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" placeholder="debra.holt@example.com" type="email" name="email"
                                required autofocus autocomplete="username" class="form-input px-4 py-3.5 rounded-lg">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        <div class="mt-5">
                            <label for="password" class="form-label">Password</label>
                            <div class="relative">
                                <input type="password" name="password" required autocomplete="current-password" id="password" placeholder="Password" required
                                    class="form-input px-4 py-3.5 rounded-lg">
                                
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        <div class="flex items-center justify-between mt-3 mb-7">
                            <div class="flex items-center gap-1 select-none">
                                <input name="remember" type="checkbox" id="rememberMe">
                                <label for="rememberMe"
                                    class="font-spline_sans text-sm leading-none text-gray-900 dark:text-dark-text cursor-pointer">Remember
                                    Me</label>
                            </div>
                            <a href="{{ route('password.request') }}"
                                class="text-xs leading-none text-primary-500 font-semibold">Forgot password?</a>
                        </div>
                        <!-- Submit Button -->
                        <button class="btn b-solid btn-primary-solid w-full dk-theme-card-square">Sign
                            In</button>
                    </form>
                    <div class="font-spline_sans text-gray-900 dark:text-dark-text leading-none text-center my-4">OR
                    </div>

                    <div class="text-gray-900 dark:text-dark-text font-medium leading-none mt-5">
                        Don’t have an account yet?
                        <a href="{{ route('register') }}" class="text-primary-500 font-semibold">Sign Up</a>
                    </div>
                </div>
            </div>
            <!-- End Form Area -->
        </div>
    </div>
    <!-- End Main Content -->

    <script src="/dash/js/vendor/jquery.min.js"></script>
    <script src="/dash/js/switcher.js"></script>
    <script src="/dash/js/layout.js"></script>
    <script src="/dash/js/main.js"></script>
</body>


</html>
