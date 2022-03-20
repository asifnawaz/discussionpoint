@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10 sm:mb-10">
    <div class="w-full sm:px-6 sm:py-3">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
            role="alert">
            {{ session('status') }}
        </div>
        @endif
        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                {{ __('Edit Profile') }}
            </header>

            <form 
                class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" 
                enctype="multipart/form-data"
                method="POST"
                action="{{ route('update')}}">
                @csrf
                @method('PUT')

                <div class="flex flex-wrap">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                        {{ __('Name') }}:
                    </label>

                    <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                        name="name" value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>

                    @error('name')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-wrap">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                        {{ __('E-Mail Address') }}:
                    </label>

                    <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror"
                        name="email" value="{{ old('email') ?? $user->email }}" required autocomplete="email">

                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-wrap">
                    <label for="bio" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                        {{ __('Bio') }}:
                    </label>
                    <input id="bio" type="bio" class="form-input w-full @error('bio') border-red-500 @enderror"
                        name="bio" value="{{ old('bio') ?? $user->bio }}" required autocomplete="bio">

                    @error('bio')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-wrap">
                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                        {{ __('Phone') }}:
                    </label>
                    <input id="phone" type="phone" class="form-input w-full @error('phone') border-red-500 @enderror"
                        name="phone" value="{{ old('phone') ?? $user->phone }}" required autocomplete="phone">

                    @error('phone')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-wrap">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                        {{ __('Profile Picture') }}:
                    </label>
                    <div class="flex justify-between w-full py-50">
                        <image src="{{ asset('images/'.$user->profile_image_path) }}" />
                    </div>
                    <input id="image" type="file"
                    class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0 
                    @error('image') border-red-500 @enderror"
                    name="image">

                    @error('image')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-wrap sm:py-2">
                    <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                        {{ __('Update Profile') }}
                    </button>
                </div>
            </form>

        </section>
    </div>
</main>
@endsection