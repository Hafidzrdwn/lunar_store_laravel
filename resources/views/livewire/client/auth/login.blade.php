<div>
    <section class="flex flex-col md:flex-row h-screen">
        <div class="hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen fixed left-0 top-0">
            <img src="<?= asset('assets/client/images/bg_login_lunar2.png') ?>" alt="Login Background"
                class="w-full h-full object-cover" />
        </div>

        <div
            class="bg-white w-full md:max-w-md lg:max-w-full md:w-1/2 xl:w-1/3 min-h-screen overflow-y-auto px-6 lg:px-16 xl:px-12 lg:ml-auto">
            <div class="w-full max-w-md mx-auto py-12">
                <h1 class="text-xl md:text-2xl font-bold leading-tight mb-3">
                    Log in to your account
                </h1>
                <a href="/" wire:navigate
                    class="flex items-center text-blue-500 hover:text-blue-700 w-max transition-colors">
                    <span>&laquo; Back To Home</span>
                </a>

                <x-alert />

                <form class="mt-6" action="" method="POST">
                    <div>
                        <label class="block text-gray-700" for="email">Email Address</label>
                        <input type="email" wire:model="email" id="email" placeholder="Enter Your Email"
                            class="w-full px-4 py-3 rounded-md mt-2 border @if ($errors->has('email')) border-red-500 @else focus:border-blue-500 @endif focus:bg-white focus:outline-none"
                            value="{{ old('email') }}" autofocus />
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700" for="password">Password</label>
                        <input type="password" wire:model="password" id="password" placeholder="Enter Password"
                            minlength="6"
                            class="w-full px-4 py-3 rounded-md mt-2 border @if ($errors->has('password')) border-red-500 @else focus:border-blue-500 @endif focus:bg-white focus:outline-none" />
                        @error('password')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-2 text-end">
                        <a href="" class="text-sm text-blue-500 hover:text-blue-700">Forgot Password?</a>
                    </div>

                    <button type="submit"
                        class="w-full block bg-blue-500 hover:bg-blue-600 focus:bg-blue-600 text-white font-semibold rounded-lg px-4 py-3 mt-4 text-center">
                        Log In
                    </button>
                </form>

                <hr class="my-4 border-gray-300 w-full" />

                <button type="button"
                    class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            class="w-6 h-6" viewBox="0 0 48 48">
                            <defs>
                                <path id="a"
                                    d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                            </defs>
                            <clipPath id="b">
                                <use xlink:href="#a" overflow="visible" />
                            </clipPath>
                            <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                            <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                            <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                            <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
                        </svg>
                        <span class="ml-4">Log in with Google</span>
                    </div>
                </button>

                <p class="mt-5 text-center mb-6">
                    Need an account?
                    <a href="{{ route('register') }}" wire:navigate
                        class="text-blue-500 hover:text-blue-700 font-semibold underline underline-offset-2">Create an
                        account</a>
                </p>
            </div>
        </div>
    </section>
</div>
