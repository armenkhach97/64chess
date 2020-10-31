<x-guest-layout>
    <x-slot name="slot">
      <div class="container">
        <h1>Users</h1>
       <a href="#" class="btn btn-success">New</a>
      </div>
      
      <div class="container">
       <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col-md-2">#</th>
                <th scope="col-md-3">User Name</th>
                <th scope="col-md-3">Homework Title</th>
                <th scope="col-md-2">Content</th>
                <th scope="col-md-2">Image</th>
                <th scope="col-md-2"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($homeworks as $homework)
                <tr>
                <th scope="row">{{$homework->id}}</th>
                @foreach ($homework->users as $user)
                <td>{{$user->name}}</td>
                @endforeach
                <td>{{$homework->title}}</td>
                <td>
                {{$homework->homework}}
                </td>
                <td>
                {{$homework->image}}
                </td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr> 
                @endforeach
              
            </tbody>
          </table>
        </div>
        </div>
    </x-slot>
</x-guest-layout>
