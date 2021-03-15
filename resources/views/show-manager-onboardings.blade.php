<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($manager->name) }}
        </h2>
    </x-slot>
<livewire:show-manager-onboardings :manager="$manager" :onboardings="$onboardings"/>
</x-app-layout>




