<x-guest-layout>
    
        <h1>admin panel</h1>

    <x-slot name="adminslot">
      <div class="container">
       <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col-md-2">#</th>
                <th scope="col-md-3">Name</th>
                <th scope="col-md-3">Email</th>
                <th scope="col-md-2">Roles</th>
                <th scope="col-md-2">Buttom</th>
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
                    <button class="btn btn-success">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
              </tr> 
                @endforeach
              
            </tbody>
          </table>
        </div>
        </div>
    </x-slot>
</x-guest-layout>
