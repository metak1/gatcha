<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{ Form::open(['route' => 'spells.store']) }}
    @include('spells.form')
    {{ Form::close() }}
</x-app-layout>