<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12 min-w-screen min-h-screen ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="font-mono text-center text-9xl text-white">
                <span class="text-gray-800">CONHEÇA O MOVIMENTO</span> <span class="text-blue-600">EMPRESA JÚNIOR</span>
            </h1>
        </div>
    </div>
    @include('layouts.ecompjr')
</x-app-layout>
