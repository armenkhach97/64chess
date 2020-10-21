<x-guest-layout>
    <x-slot name="slot">
        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Books
            </h2>
            <a href="{{route('add_books')}}" class="btn btn-success">New Book</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Link</th>
                    <th scope="col">Image</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($books as $book)  
                    <tr>
                      <th>{{$book->title}}</th>
                      <td>{{$book->link}}</td>
                      <td><img src="{{asset('books\\'.$book->image)}}" width="100px" height="100px"></td>
                      <td>
                          <button type="submit" class="btn btn-success">Edit</button>
                          <a href="{{route('delete_book',$book->id)}}" type="submit" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  @endforeach  
                </tbody>
              </table>              
        </div>
    </x-slot>
</x-guest-layout>