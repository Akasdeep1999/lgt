<section>
    <!-- Section Header with Icon -->
    <div class="p-6 sm:p-8 border-b border-slate-100 flex items-start gap-4">
        <div
            class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
            <i class="fa-regular fa-user text-base"></i>
        </div>
        <div>
            <h2 class="text-lg font-bold text-slate-900">
                Personal Information
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                Update your display name and administrative email address used for itinerary confirmations and dispatch
                alerts.
            </p>
        </div>
    </div>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="p-6 sm:p-8 space-y-6 max-w-2xl">
        @csrf
        @method('patch')

        <div>
            <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">
                Operator Full Name
            </label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                    <i class="fa-regular fa-id-card text-xs"></i>
                </span>
                <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required
                    autofocus autocomplete="name"
                    class="w-full pl-9 pr-4 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 text-slate-800 placeholder-slate-400 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150" />
            </div>
            <x-input-error class="mt-2 text-xs text-rose-600" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">
                Email Address
            </label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                    <i class="fa-regular fa-envelope text-xs"></i>
                </span>
                <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required
                    autocomplete="username"
                    class="w-full pl-9 pr-4 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 text-slate-800 placeholder-slate-400 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150" />
            </div>
            <x-input-error class="mt-2 text-xs text-rose-600" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div
                    class="mt-3 p-3.5 rounded-xl bg-amber-50 border border-amber-200/80 text-amber-800 text-xs flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-triangle-exclamation text-amber-600"></i>
                        <span>Your email address is currently unverified.</span>
                    </div>
                    <button form="send-verification" class="font-bold underline text-amber-900 hover:text-amber-700">
                        Resend verification
                    </button>
                </div>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 text-xs font-semibold text-emerald-600 flex items-center gap-1.5">
                        <i class="fa-regular fa-circle-check"></i> A new verification link has been dispatched.
                    </p>
                @endif
            @endif
        </div>

        <div class="flex items-center gap-4 pt-2">
            <button type="submit"
                class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm shadow-md shadow-emerald-600/20 transition duration-200 flex items-center gap-2">
                <i class="fa-solid fa-check text-xs"></i> Save Changes
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2500)"
                    class="text-xs font-semibold text-emerald-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-check"></i> Changes successfully saved!
                </p>
            @endif
        </div>
    </form>
</section>
