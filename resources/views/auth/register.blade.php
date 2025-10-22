<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg">

<head>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
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
                    </div>
                </div>
            </div>
            <!-- End Overview Area -->

            <!-- Start Form Area -->
            <div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
                <div
                    class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                    <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                        Sign Up
                    </h3>
                    <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                        Welcome! create on your account
                    </p>

                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}" class="leading-none mt-8">
                        @csrf

                        <!-- Name Field -->
                        <div class="mb-2.5">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name"  required autofocus
                                autocomplete="name" id="name" placeholder="Debra Holt"
                                class="form-input px-4 py-3.5 rounded-lg @error('name') border-red-500 @enderror">
                            @error('name')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="mt-5">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" placeholder="debra.holt@example.com" type="email" name="email"
                                 required autocomplete="username"
                                class="form-input px-4 py-3.5 rounded-lg @error('email') border-red-500 @enderror">
                            @error('email')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mt-5">
                            <label for="password" class="form-label">Password</label>
                            <div class="relative">
                                <input id="password" placeholder="Password" type="password" name="password" required
                                    autocomplete="new-password"
                                    class="form-input px-4 py-3.5 rounded-lg @error('password') border-red-500 @enderror pr-10">
                                <button type="button" onclick="togglePasswordVisibility('password')"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 hover:text-gray-700">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                            @error('password')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mt-5">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <div class="relative">
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    placeholder="Confirm Password" required autocomplete="new-password"
                                    class="form-input px-4 py-3.5 rounded-lg pr-10">
                                <button type="button" onclick="togglePasswordVisibility('password_confirmation')"
                                    class="absolute  inset-y-0 right-0  pr-3 flex items-center text-gray-500 hover:text-gray-700">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                            @error('password_confirmation')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <br>

                        <!-- Submit Button -->
                        <button  class="btn b-solid btn-primary-solid w-full dk-theme-card-square">
                            Sign Up
                        </button>
                    </form>

                    <div class="font-spline_sans text-gray-900 dark:text-dark-text leading-none text-center my-4">
                        OR
                    </div>

                    <div class="text-gray-900 dark:text-dark-text font-medium leading-none mt-5">
                        Have an account?
                        <a href="{{ route('login') }}" class="text-primary-500 font-semibold">Sign In</a>
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

    <script>
        // Password visibility toggle function
        function togglePasswordVisibility(inputId) {
            const passwordInput = document.getElementById(inputId);
            const icon = passwordInput.nextElementSibling.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('ri-eye-off-line');
                icon.classList.add('ri-eye-line');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('ri-eye-line');
                icon.classList.add('ri-eye-off-line');
            }
        }

        // Hide loader after page loads
        window.addEventListener('load', function() {
            document.getElementById('loader').style.display = 'none';
        });
    </script>
</body>

</html>
