<x-guest-layout>
    <x-slot name="slot">
        <div class="container">
            <form action="#" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
               <div class="form-group">
                <label>Homework title</label>
                <input type="text" name="homework_title" placeholder="Homework title">
               </div>
               <div class="form-group">
                <label>Homework content</label>
                <input type="textarea" name="homework_content" >
               </div>
               <div class="form-group">
                <label>Homework image</label>
                <input type="file" name="homework_image" >
               </div>
               <button type="submit" class="btn btn-success">Save</button>
            </form>  
        </div>
    </x-slot>
</x-guest-layout>