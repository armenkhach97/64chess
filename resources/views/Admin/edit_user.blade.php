<x-guest-layout>
    
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('edit_user_id',$user_id) }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Name') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <select name="Role">
                    <option name='role' value="null">None</option>
                    @foreach ($roles as $role)
                        
                         <x-jet-label value="{{ __('Roles') }}" />
                         <option name='role' value="{{$role->name}}">{{$role->name}}</option>
                    
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Edit') }}
                </x-jet-button>
            </div>
        </form>
</x-guest-layout>
