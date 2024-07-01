@extends('layout/layout')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 p-4">

        <!-- Sidebar -->
        <div class="col-span-1 ">
            <div class="hidden lg:block bg-white p-4 border rounded-lg">
                <button class="p-2 hover:bg-blue-300 rounded-md w-full"><a href="#"
                        class="text-gray-800 ">Home</a></button>
                <button class="p-2  hover:bg-blue-300 rounded-md w-full"><a href="#"
                        class="text-gray-800">Explore</a></button>
                <button class="p-2  hover:bg-blue-300 rounded-md w-full"><a href="#"
                        class="text-gray-800">Feed</a></button>
                <button class="p-2  hover:bg-blue-300 rounded-md w-full"><a href="#"
                        class="text-gray-800">Terms</a></button>
                <button class="p-2  hover:bg-blue-300 rounded-md w-full"><a href="#"
                        class="text-gray-800">Support</a></button>
                <button class="p-2  hover:bg-blue-300 rounded-md w-full"><a href="#"
                        class="text-gray-800">Settings</a></button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-span-1 md:col-span-2 ">
            @include('shared.success-message')

            {{-- share hasab section --}}
            @include('shared.submit-hasab')

            <!-- Hasab item section -->
            <div class="overflow-y-auto h-96">

                @foreach ($hasabs as $hasab)
                    @include('shared/hasab-item')
                @endforeach

            </div>

        </div>
        <!-- Right Sidebar -->
        <div class="col-span-1 hidden lg:block">
            <div class="bg-white p-4 border rounded-lg">
                <input type="text" class="w-full p-2 border rounded mb-2" placeholder="Search">
                <button class="w-full bg-blue-500 text-white p-2 rounded mb-4 hover:bg-blue-300">Search</button>
                <div>
                    <p class="font-bold mb-2">Who to follow</p>
                    <div class="flex justify-between items-center mb-2">
                        <span>Mario Brother</span>
                        <button class="bg-blue-500 text-white p-1 rounded hover:bg-blue-300">Follow</button>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Mario Brother</span>
                        <button class="bg-blue-500 text-white p-1 rounded hover:bg-blue-300">Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
