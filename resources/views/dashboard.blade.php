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
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('profils.index') }}"> Accueil</a>
                </div>
            </div>
        </div>
    </div>

    @can('administrateur')
        <div class="session1">
            <h1>section 1</h1>
        </div>
    @endcan

    @can('management')
        <div>
            <h1>section 2</h1>
        </div>
    @endcan

    @can('utilisateur')
        <div>
            <h1>section 3</h1>
        </div>
    @endcan



</x-app-layout>
