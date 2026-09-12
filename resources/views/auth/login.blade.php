<x-guest-layout>
    <div class="mb-8">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
            Welcome Back 👋
        </h2>
        <p class="mt-2 text-xs sm:text-sm text-slate-500">
            Please enter your credentials to log into your administrator desk.
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">
                {{ __('Email Address') }}
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <i class="fa-regular fa-envelope text-xs"></i>
                </div>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    autocomplete="username" placeholder="admin@letsgotravel.com"
                    class="w-full pl-9 pr-4 py-3 text-xs font-medium rounded-xl border border-slate-200 bg-white text-slate-800 placeholder-slate-400 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150 shadow-sm" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-rose-600 font-medium" />
        </div>

        <!-- Password Field with Toggle Eye Icon -->
        <div x-data="{ showPassword: false }">
            <div class="flex items-center justify-between mb-1.5">
                <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-600">
                    {{ __('Password') }}
                </label>
                {{-- @if (Route::has('password.request'))
                    <a class="text-xs font-semibold text-emerald-600 hover:text-emerald-700 transition"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif --}}
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <i class="fa-solid fa-lock text-xs"></i>
                </div>

                <input id="password" :type="showPassword ? 'text' : 'password'" name="password" required
                    autocomplete="current-password" placeholder="••••••••"
                    class="w-full pl-9 pr-10 py-3 text-xs font-medium rounded-xl border border-slate-200 bg-white text-slate-800 placeholder-slate-400 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150 shadow-sm" />

                <!-- Toggle Eye Button -->
                <button type="button" @click="showPassword = !showPassword"
                    class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none transition duration-150">
                    <i class="fa-solid" :class="showPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-rose-600 font-medium" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between pt-1">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" name="remember"
                    class="rounded border-slate-300 text-emerald-600 shadow-sm focus:ring-emerald-500 focus:ring-offset-0 w-4 h-4 transition">
                <span class="ms-2 text-xs font-medium text-slate-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit"
                class="w-full py-3 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md shadow-emerald-600/20 transition duration-200 flex items-center justify-center gap-2">
                <i class="fa-solid fa-right-to-bracket text-xs"></i>
                {{ __('Sign In to Dashboard') }}
            </button>
        </div>
    </form>
</x-guest-layout>
