@extends('common/layout')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-4">
        <!-- Sidebar -->
        <div class="col-span-1 bg-white p-4 border rounded-lg">
            <div>
                <ul class="justify-center items-center ">
                    <li><a href="/">Home</a></li>
                    <li><a href="/">Explore</a></li>
                    <li><a href="/">Terms and Conditions</a></li>
                    <li><a href="/">Contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-span-1 md:col-span-2 bg-white p-4 border rounded-lg">
            <div class="mb-4 bg-green-100 p-4 rounded"></div>
            <div class="mb-4">
                <div class="w-full p-2 border rounded mb-2"></div>
                <div class="w-full bg-blue-500 text-white p-2 rounded"></div>
            </div>
            <div class="space-y-4">
                <!-- Post -->
                <div class="border-b pb-4">
                    <div class="flex justify-between items-center mb-2"></div>
                    <div>Post</div>
                    <div class="flex justify-between items-center mt-2"></div>
                </div>
                <!-- Comment -->
                <div class="p-2 bg-gray-100 rounded">Comment</div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="col-span-1 bg-white p-4 border rounded-lg">
            <div class="w-full p-2 border rounded mb-2"></div>
            <div class="w-full bg-blue-500 text-white p-2 rounded mb-4"></div>
            <div>
                <div class="font-bold mb-2"></div>
                <div class="flex justify-between items-center mb-2"></div>
                <div class="flex justify-between items-center"></div>
            </div>
        </div>
    </div>
@endsection
