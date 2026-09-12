<section>
    <!-- Section Header with Icon -->
    <div class="p-6 sm:p-8 border-b border-slate-100 flex items-start gap-4">
        <div
            class="w-10 h-10 rounded-xl bg-slate-100 border border-slate-200 text-slate-700 flex items-center justify-center shrink-0">
            <i class="fa-solid fa-shield-halved text-base"></i>
        </div>
        <div>
            <h2 class="text-lg font-bold text-slate-900">
                Security & Password
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                Ensure your administrator portal uses an uncompromised password to protect booking data and customer
                details.
            </p>
        </div>
    </div>

    <form method="post" action="{{ route('password.update') }}" class="p-6 sm:p-8 space-y-6 max-w-2xl">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div x-data="{ show: false }">
            <label for="update_password_current_password"
                class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">
                Current Password
            </label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                    <i class="fa-solid fa-key text-xs"></i>
                </span>
                <input id="update_password_current_password" name="current_password" :type="show ? 'text' : 'password'"
                    autocomplete="current-password" placeholder="••••••••"
                    class="w-full pl-9 pr-10 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 text-slate-800 placeholder-slate-400 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150" />
                <button type="button" @click="show = !show" tabindex="-1"
                    class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-emerald-600 transition">
                    <i :class="show ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye'" class="text-xs"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-xs text-rose-600" />
        </div>

        <!-- New Password -->
        <div x-data="{ show: false }">
            <label for="update_password_password"
                class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">
                New Password
            </label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                    <i class="fa-solid fa-lock text-xs"></i>
                </span>
                <input id="update_password_password" name="password" :type="show ? 'text' : 'password'"
                    autocomplete="new-password" placeholder="••••••••"
                    class="w-full pl-9 pr-10 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 text-slate-800 placeholder-slate-400 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150" />
                <button type="button" @click="show = !show" tabindex="-1"
                    class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-emerald-600 transition">
                    <i :class="show ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye'" class="text-xs"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-xs text-rose-600" />
        </div>

        <!-- Confirm Password -->
        <div x-data="{ show: false }">
            <label for="update_password_password_confirmation"
                class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">
                Confirm New Password
            </label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                    <i class="fa-solid fa-lock text-xs"></i>
                </span>
                <input id="update_password_password_confirmation" name="password_confirmation"
                    :type="show ? 'text' : 'password'" autocomplete="new-password" placeholder="••••••••"
                    class="w-full pl-9 pr-10 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 text-slate-800 placeholder-slate-400 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150" />
                <button type="button" @click="show = !show" tabindex="-1"
                    class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-emerald-600 transition">
                    <i :class="show ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye'" class="text-xs"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-xs text-rose-600" />
        </div>

        <div class="flex items-center gap-4 pt-2">
            <button type="submit"
                class="px-5 py-2.5 rounded-xl bg-slate-900 hover:bg-emerald-600 text-white font-semibold text-sm shadow-md shadow-slate-900/10 transition duration-200 flex items-center gap-2">
                <i class="fa-solid fa-rotate text-xs"></i> Update Password
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2500)"
                    class="text-xs font-semibold text-emerald-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-check"></i> Password changed securely!
                </p>
            @endif
        </div>
    </form>
</section>
