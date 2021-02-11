<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ url('/users') }}" class="m-5 text-center bg-white border border-black hover:bg-black hover:text-white text-black font-bold py-2 px-4 rounded">
                    Users
                </a>

                <a href="{{ url('/units') }}" class="m-5 text-center bg-white border border-black hover:bg-black hover:text-white text-black font-bold py-2 px-4 rounded">
                    Units
                </a>

                <a href="{{ url('/spells') }}" class="m-5 text-center bg-white border border-black hover:bg-black hover:text-white text-black font-bold py-2 px-4 rounded">
                    Spells
                </a>

                <a href="{{ url('/items') }}" class="m-5 text-center bg-white border border-black hover:bg-black hover:text-white text-black font-bold py-2 px-4 rounded">
                    Items
                </a>
            </div>
        </div>
    </div>
</x-app-layout>