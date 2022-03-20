@extends('layouts.app')

@section('app.name', $user->name."'s Profile")

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10 sm:mb-10 ">
    <!-- <div class="p-3 bg-white rounded-xl max-w-lg hover:shadow">
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
                </div> -->

    <div class="w-full relative mt-4 shadow-2xl rounded my-24 overflow-hidden">
        <div class="top h-64 w-full bg-blue-600 overflow-hidden relative">
            <img alt="" class="bg w-full h-full object-cover object-center absolute z-0">
            <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
                @if(str_contains($user->profile_image_path, "https://"))
                <img src="{{ $user->profile_image_path }}" class="h-48 w-48 object-cover rounded-full">
                @else
                <img src="{{ asset('images/'. $user->profile_image_path) }}"
                    class="h-48 w-48 object-cover rounded-full">
                @endif
                <h1 class="text-2xl font-semibold">{{ $user->name }}</h1>
                <h4 class="text-sm font-semibold">Joined Since '{{ date('y', strtotime($user->created_at)) }}</h4>
            </div>
        </div>
        <div class="grid grid-cols-12 bg-white ">

            <div
                class="col-span-12 w-full px-3 py-6 justify-center flex space-x-4 border-b border-solid md:space-x-0 md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">

                <a href="#" class="text-sm p-2 bg-indigo-900 text-white text-center rounded font-bold">Basic
                    Information</a>
                @if($user->id === auth()->user()->id)
                <a href="#"
                    class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200">Edit
                    Profile</a>
                @endif    

            </div>

            <div
                class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
                <div class="px-4 pt-4">
                    <form action="#" class="flex flex-col space-y-8">

                        <div>
                            <h3 class="text-2xl font-semibold">Basic Information</h3>
                            <hr>
                        </div>

                        <div class="form-item">
                            <label class="text-xl ">Full Name</label>
                            <input type="text" value="{{ $user->name }}"
                                class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200"
                                disabled>
                        </div>

                        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

                            <div class="form-item w-full">
                                <label class="text-xl ">Phone</label>
                                <input type="text" value="{{ $user->phone }}"
                                    class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 "
                                    disabled>
                            </div>

                            <div class="form-item w-full">
                                <label class="text-xl ">Email</label>
                                <input type="text" value="{{ $user->email}}"
                                    class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 "
                                    disabled>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-2xl font-semibold ">More About Me</h3>
                            <hr>
                        </div>

                        <div class="form-item w-full">
                            <label class="text-xl ">Biography</label>
                            <textarea cols="30" rows="10"
                                class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 "
                                disabled>{{ $user->bio }}</textarea>
                        </div>


                    </form>
                </div>
            </div>


        </div>
    </div>
</main>
@endsection