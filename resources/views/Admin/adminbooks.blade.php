<x-guest-layout>
    <x-slot name="slot">
        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Books
            </h2>
            <a href="{{route('add_books')}}" class="btn btn-success">New Book</a>
            @foreach ($books as $book)
                <div class="col-md-4">
                    <img src="{{$book->image}}" >
                    <a href="{{$book->link}}">{{$book->title}}</h3></a>
                </div>
            @endforeach    
        </div>
    </x-slot>
</x-guest-layout>