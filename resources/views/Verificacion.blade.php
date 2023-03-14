<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h2 style="color: white;">Verifica tu codigo</h2>
    <form method="GET" action="{{ route('dashboard') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Codigo')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="codigo"  required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            

            <x-primary-button class="ml-3">
                {{ __('Verificar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
