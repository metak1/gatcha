<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{ Form::model($spell, ['route' => ['spells.update', $spell->id], 'method' => 'put']) }}
    @include('spells.form')
    {{ Form::close() }}
</x-app-layout>