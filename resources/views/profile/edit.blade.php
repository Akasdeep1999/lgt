<x-app-layout>
    <!-- Header Banner -->
    <div class="relative overflow-hidden rounded-3xl bg-white border border-slate-200/80 p-8 lg:p-10 shadow-sm">
        <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-bold uppercase tracking-wider mb-3">
                    <i class="fa-solid fa-id-badge"></i> Account Management
                </div>
                <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                    Operator Profile & Security
                </h1>
                <p class="mt-2 text-slate-500 text-sm sm:text-base leading-relaxed max-w-2xl">
                    Configure your credentials, administrative security keys, and account lifecycle preferences.
                </p>
            </div>

            <!-- Quick Profile Overview Card -->
            <div class="flex items-center gap-4 p-3.5 rounded-2xl bg-slate-50 border border-slate-200/70 shrink-0">
                <div
                    class="w-12 h-12 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-bold text-base shadow-sm">
                    {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                </div>
                <div>
                    <p class="text-sm font-bold text-slate-900 leading-snug">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-slate-500 font-medium">{{ Auth::user()->email }}</p>
                    <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-700 mt-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Verified Operator
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Forms Container -->
    <div class="space-y-8">
        <!-- 2-Column Grid for Personal Information & Security on Desktop -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            <!-- 1. General Profile Details -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden h-full">
                @include('profile.partials.update-profile-information-form')
            </div>

            <!-- 2. Security / Password Update -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden h-full">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- 3. Danger Zone (Full Width Below) -->
        <div class="bg-white rounded-2xl border border-rose-200/70 shadow-sm overflow-hidden">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
