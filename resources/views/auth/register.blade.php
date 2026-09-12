{{-- <x-guest-layout>
    <div class="mb-8">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
            Create Account 🚀
        </h2>
        <p class="mt-2 text-xs sm:text-sm text-slate-500">
            Sign up to access the admin desk and start managing travel packages.
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">
                {{ __('Full Name') }}
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <i class="fa-regular fa-user text-xs"></i>
                </div>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    autocomplete="name" placeholder="John Doe"
                    class="w-full pl-9 pr-4 py-3 text-xs font-medium rounded-xl border border-slate-200 bg-white text-slate-800 placeholder-slate-400 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150 shadow-sm" />
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-xs text-rose-600 font-medium" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">
                {{ __('Email Address') }}
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <i class="fa-regular fa-envelope text-xs"></i>
                </div>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    autocomplete="username" placeholder="admin@letsgotravel.com"
                    class="w-full pl-9 pr-4 py-3 text-xs font-medium rounded-xl border border-slate-200 bg-white text-slate-800 placeholder-slate-400 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150 shadow-sm" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-rose-600 font-medium" />
        </div>

        <!-- Password -->
        <div x-data="{ showPassword: false }">
            <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">
                {{ __('Password') }}
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <i class="fa-solid fa-lock text-xs"></i>
                </div>
                <input id="password" :type="showPassword ? 'text' : 'password'" name="password" required
                    autocomplete="new-password" placeholder="••••••••"
                    class="w-full pl-9 pr-10 py-3 text-xs font-medium rounded-xl border border-slate-200 bg-white text-slate-800 placeholder-slate-400 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150 shadow-sm" />

                <!-- Toggle Eye Button -->
                <button type="button" @click="showPassword = !showPassword"
                    class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none transition duration-150">
                    <i class="fa-solid" :class="showPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-rose-600 font-medium" />
        </div>

        <!-- Confirm Password -->
        <div x-data="{ showConfirmPassword: false }">
            <label for="password_confirmation"
                class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">
                {{ __('Confirm Password') }}
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <i class="fa-solid fa-shield-halved text-xs"></i>
                </div>
                <input id="password_confirmation" :type="showConfirmPassword ? 'text' : 'password'"
                    name="password_confirmation" required autocomplete="new-password" placeholder="••••••••"
                    class="w-full pl-9 pr-10 py-3 text-xs font-medium rounded-xl border border-slate-200 bg-white text-slate-800 placeholder-slate-400 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150 shadow-sm" />

                <!-- Toggle Eye Button -->
                <button type="button" @click="showConfirmPassword = !showConfirmPassword"
                    class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none transition duration-150">
                    <i class="fa-solid" :class="showConfirmPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-xs text-rose-600 font-medium" />
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit"
                class="w-full py-3 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md shadow-emerald-600/20 transition duration-200 flex items-center justify-center gap-2">
                <i class="fa-solid fa-user-plus text-xs"></i>
                {{ __('Register Account') }}
            </button>
        </div>

        <!-- Already Registered Navigation -->
        <div class="text-center pt-2">
            <span class="text-xs text-slate-500">Already registered?</span>
            <a href="{{ route('login') }}"
                class="ms-1 text-xs font-semibold text-emerald-600 hover:text-emerald-700 transition">
                {{ __('Sign In') }}
            </a>
        </div>
    </form>
</x-guest-layout> --}}
