<!-- resources/views/auth/select-role.blade.php -->

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="role" :value="__('Are you an User or an Admin?')" />

                <x-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Next') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
