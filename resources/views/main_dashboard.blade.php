@extends('common/layout')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-4">
        <!-- Sidebar -->
        <div class="col-span-1 ">
            <div class="bg-white p-4 border rounded-lg">
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
        <div class="col-span-1 md:col-span-2 bg-white p-4 border rounded-lg">
            <div class="mb-4 bg-green-100 p-4 rounded">
                <p class="text-green-700">Idea created Successfully</p>
            </div>
            <div class="mb-4">
                <textarea class="w-full p-2 border rounded mb-2" rows="4" placeholder="Share your ideas"></textarea>
                <button class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-400">Share</button>
            </div>
            <div class="space-y-4">
                <!-- Post -->
                <div class="border-b pb-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold">Mario</span>
                        <span class="text-gray-500">3-5-2023</span>
                    </div>
                    <p>
                        Comes from sections 11032 and 11033 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                        Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular
                        during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a
                        line in section 1.10.32.
                    </p>
                    <div class="flex justify-between items-center mt-2">
                        <div class=" border rounded-md flex gap-1 bg-gray-200">
                            <span class="text-gray-700 cursor-pointer font-bold hover:bg-red-300 p-2 rounded-md"> <i
                                    class="fa-solid fa-heart text-red-500 "></i>
                                80 </span>
                            <span class="text-gray-700 cursor-pointer font-bold hover:bg-blue-300 p-2 rounded-md"> <i
                                    class="fa-solid fa-share text-blue-500"></i>
                                67</span>
                        </div>
                        <button class="bg-blue-200 p-3 rounded hover:bg-blue-500 hover:text-white">Post Comment</button>
                    </div>
                </div>
                <!-- Comment -->
                <div class="p-2 bg-gray-100 rounded">
                    <span class="font-bold">Luigi</span>
                    <p>
                        And 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in
                        45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
                    </p>
                </div>
            </div>



        </div>
        <!-- Right Sidebar -->
        <div class="col-span-1 ">
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
