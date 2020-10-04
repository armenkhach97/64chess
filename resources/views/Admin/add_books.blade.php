<x-guest-layout>
    <x-slot name="slot">
        <div class="container">
            <form action="{{route('add_book')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
               <div class="form-group">
                <label>Book title</label>
                <input type="text" name="book_title" placeholder="Book title">
               </div>
               <div class="form-group">
                <label>Book link</label>
                <input type="file" name="book_link" >
               </div>
               <div class="form-group">
                <label>Book image</label>
                <input type="file" name="book_image" >
               </div>
               <button type="submit" class="btn btn-success">Save</button>
            </form>  
        </div>
    </x-slot>
</x-guest-layout>