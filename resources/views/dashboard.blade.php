<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">
                        {{ __("Selamat datang,") }} <strong>{{ Auth::user()->email }}</strong>
                    </p>
                    <p class="mb-4">
                        {{ __("Role Anda:") }} <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">
                            {{ Auth::user()->getRoleName() ?? 'N/A' }}
                        </span>
                    </p>
                    <p class="text-gray-600">
                        {{ __("Anda telah berhasil login ke sistem.") }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
