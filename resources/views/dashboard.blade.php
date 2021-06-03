<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
       <a href="{{route('acceuil')}}">Retour à la page d'acceuil</a> 
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 style="font: size 6px;">Bienvenue la page propriétaires. Veuillez suivre les indications ci-dessous.</h1>
        </div>
    </div>
</x-app-layout>
