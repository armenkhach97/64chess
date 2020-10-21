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
                <th scope="col-md-3">Name</th>
                <th scope="col-md-3">Email</th>
                <th scope="col-md-2">Roles</th>
                <th scope="col-md-2">Button</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                <th scope="row">1</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @foreach ($user->roles as $role)
                        <small style="background: rgb(0, 225, 255)">{{$role->name}} </small> ,
                    @endforeach
                </td>
                <td>
                    <a href="{{route('edit_user',$user->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('delete_user',$user->id)}}" class="btn btn-danger">Delete</a>
                </td>
              </tr> 
                @endforeach
              
            </tbody>
          </table>
        </div>
        </div>
    </x-slot>
</x-guest-layout>
