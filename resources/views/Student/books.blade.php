<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Books
        </h2>
    </x-slot>
    <x-slot name="main">
        <div class="container">
            @foreach ($books as $book)
                <div class="col-md-4">
                    <img src="{{$book->image}}" >
                    <a href="{{$book->link}}">{{$book->title}}</h3></a>
                </div>
            @endforeach    
        </div>>
    </x-slot>
</x-app-layout>