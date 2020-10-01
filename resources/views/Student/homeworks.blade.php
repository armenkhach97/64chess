<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Homeworks
        </h2>
    </x-slot>
    <x-slot name="main">
        <div class="container">
            @foreach ($homeworks as $homework)
                <div class="col-md-4">
                    
                </div>
            @endforeach    
        </div>>
    </x-slot>
</x-app-layout>