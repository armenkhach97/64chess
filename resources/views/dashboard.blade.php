<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        @if (Auth::user()->hasRole('admin'))
            <a href="{{route('users')}}" class="btn btn-success">Admin page</a>
        @endif
    </x-slot>
</x-app-layout>
