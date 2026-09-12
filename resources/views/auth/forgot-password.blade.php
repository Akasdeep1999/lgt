<x-guest-layout>
    <div class="mb-8">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
            Reset Password 🔑
        </h2>
        <p class="mt-2 text-xs sm:text-sm text-slate-500 leading-relaxed">
            Forgot your password? No problem. Enter your account email address and we'll send you a link to reset it.
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
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
                    placeholder="admin@letsgotravel.com"
                    class="w-full pl-9 pr-4 py-3 text-xs font-medium rounded-xl border border-slate-200 bg-white text-slate-800 placeholder-slate-400 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150 shadow-sm" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-rose-600 font-medium" />
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit"
                class="w-full py-3 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md shadow-emerald-600/20 transition duration-200 flex items-center justify-center gap-2">
                <i class="fa-paper-plane fa-solid text-xs"></i>
                {{ __('Email Password Reset Link') }}
            </button>
        </div>

        <!-- Back to Login Navigation -->
        <div class="text-center pt-2">
            <a href="{{ route('login') }}"
                class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-emerald-600 transition">
                <i class="fa-solid fa-arrow-left text-[10px]"></i>
                {{ __('Back to Sign In') }}
            </a>
        </div>
    </form>
</x-guest-layout>
