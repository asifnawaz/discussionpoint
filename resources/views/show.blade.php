@extends('layouts.app')

@section('app.name', $user->name."'s Profile")

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10 sm:mb-10">
    <div class="w-full sm:px-6 sm:py-3 mb-10">

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                {{ $user->name. "'s " . __( "Profile") }}
            </header>
            <div class="container flex justify-center py-20">
                <div class="p-3 bg-white rounded-xl max-w-lg hover:shadow">
                    <div class="flex justify-between w-full">
                        @if(str_contains($user->profile_image_path, "https://"))
                        <img src="{{ $user->profile_image_path }}" width="150" class="rounded-lg">
                        @else
                        <img src="{{ asset('images/'. $user->profile_image_path) }}" width="150" class="rounded-lg">
                        @endif
                        <div class="ml-2">
                            <div class="p-3">
                                <h3 class="text-2xl">{{ $user->name }}</h3> <span>{{ $user->bio }}</span>
                            </div>
                            <div class="justify-between items-center p-3 bg-gray-200 rounded-lg">
                                <div class="mr-3 mb-2"> <span class="text-gray-400 block">Phone</span> <span
                                        class="font-bold text-black text-xl">{{ $user->phone }}</span> </div>
                                <div> <span class="text-gray-400 block">Email</span> <span
                                        class="font-bold text-black text-xl">{{ $user->email }}</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-2 gap-2"> <button
                            class="w-full h-12 rounded-md border-2 text-md hover:shadow hover:bg-red-700 hover:border-red-700 hover:text-white " onClick="window.location = '/';">Go Back</button>
                        @if($user->id === auth()->user()->id)
                        <button
                            class="w-full h-12 rounded-md bg-blue-700 text-white text-md hover:shadow hover:bg-blue-800" onClick="window.location='{{ route('edit') }}'">Edit Profile</button>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection