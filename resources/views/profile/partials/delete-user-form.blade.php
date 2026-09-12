<section>
    <!-- Section Header -->
    <div class="p-6 sm:p-8 border-b border-rose-100 flex items-start gap-4 bg-rose-50/30">
        <div
            class="w-10 h-10 rounded-xl bg-rose-50 border border-rose-200 text-rose-600 flex items-center justify-center shrink-0">
            <i class="fa-solid fa-triangle-exclamation text-base"></i>
        </div>
        <div>
            <h2 class="text-lg font-bold text-rose-950">
                Danger Zone
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                Permanently eliminate this administrator account. This action cannot be reversed and logs will be
                archived.
            </p>
        </div>
    </div>

    <div class="p-6 sm:p-8 max-w-2xl flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <p class="text-sm font-semibold text-slate-800">Deactivate & Purge Operator</p>
            <p class="text-xs text-slate-400 mt-0.5">All personal permissions and assigned tours will be decoupled.</p>
        </div>

        <button type="button" x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            class="px-5 py-2.5 rounded-xl bg-white border border-rose-300 text-rose-600 hover:bg-rose-50 font-semibold text-xs transition duration-150 shrink-0 shadow-sm flex items-center justify-center gap-2">
            <i class="fa-regular fa-trash-can"></i> Delete Account
        </button>
    </div>

    <!-- Confirmation Modal with Eye Toggle -->
    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 sm:p-8 bg-white">
            @csrf
            @method('delete')

            <div
                class="w-12 h-12 rounded-2xl bg-rose-50 border border-rose-100 text-rose-600 flex items-center justify-center mb-4">
                <i class="fa-solid fa-trash-can text-lg"></i>
            </div>

            <h2 class="text-lg font-bold text-slate-900">
                Are you sure you want to delete your account?
            </h2>

            <p class="mt-2 text-xs sm:text-sm text-slate-500 leading-relaxed">
                Once removed, all tour package drafts, private logs, and administrative keys assigned directly to this
                operator ID will be deleted. Please confirm your password below.
            </p>

            <div class="mt-5" x-data="{ show: false }">
                <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">
                    Confirm Your Password
                </label>
                <div class="relative max-w-md">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                        <i class="fa-solid fa-lock text-xs"></i>
                    </span>
                    <input id="password" name="password" :type="show ? 'text' : 'password'" placeholder="••••••••"
                        class="w-full pl-9 pr-10 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 text-slate-800 placeholder-slate-400 focus:bg-white focus:border-rose-500 focus:ring-2 focus:ring-rose-500/10 focus:outline-none transition" />
                    <button type="button" @click="show = !show" tabindex="-1"
                        class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-rose-600 transition">
                        <i :class="show ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye'" class="text-xs"></i>
                    </button>
                </div>
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-xs text-rose-600" />
            </div>

            <div class="mt-6 flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                <button type="button" x-on:click="$dispatch('close')"
                    class="px-4 py-2 rounded-xl bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-semibold text-xs transition duration-150">
                    Cancel
                </button>

                <button type="submit"
                    class="px-4 py-2 rounded-xl bg-rose-600 hover:bg-rose-700 text-white font-semibold text-xs shadow-md shadow-rose-600/20 transition duration-150">
                    Confirm Deletion
                </button>
            </div>
        </form>
    </x-modal>
</section>
