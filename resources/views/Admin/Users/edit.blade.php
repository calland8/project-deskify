<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            @method('PATCH')
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name')}} {{ $user->name }}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }} {{ $user->email }}" />
            </div>

            <div class=" mb-6">
                @foreach($roles as $role)
                <div class="form-check">
                    <!-- check if user has role checked and check that value on the edit form -->
                    <input class="form-check-input" name="roles[]" type="checkbox" value="{{ $role->id }}" id="{{ $role->name }}" @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toarray())) checked @endif @endisset>
                    <label class="form-check-label" for="{{ $role->name }}">
                        {{ $role->name}}
                    </label>
                </div>
                @endforeach
            </div>

            <x-button class="ml-4">
                {{ __('Submit') }}
            </x-button>

        </form>
    </x-auth-card>
</x-guest-layout>