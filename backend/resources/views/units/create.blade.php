<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{ Form::open(['route' => 'units.store']) }}
    @include('units.form')
    {{ Form::close() }}
</x-app-layout>
