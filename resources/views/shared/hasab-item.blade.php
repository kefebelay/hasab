<div class="space-y-4 mb-4 border rounded-md p-4 bg-white ">
    <div class="border-b pb-4">
        <div class="flex gap-2 items-center mb-2">
            <div class="flex items-center gap-2">
                <div> <img class=" h-14 w-14 rounded-full" src="https://i.pravatar.cc/150?u={{ $hasab->id }}"
                        alt="profile img">
                </div>
                <span class="font-bold">Mario</span>
            </div>
            <span class="text-gray-500">{{ $hasab->created_at }}</span>
        </div>
        <p>{{ $hasab->content }}</p>
        <div class="flex justify-between items-center mt-2">
            <div class="border rounded-md flex gap-1 bg-gray-200">
                <span class="text-gray-700 cursor-pointer font-bold hover:bg-red-300 p-2 rounded-md">
                    <i class="fa-solid fa-heart text-red-500"></i> {{ $hasab->likes }}
                </span>
                <span class="text-gray-700 cursor-pointer font-bold hover:bg-blue-300 p-2 rounded-md">
                    <i class="fa-solid fa-share text-blue-500"></i>
                    {{ $hasab->shares }}</span>
            </div>
            <button class="bg-blue-200 p-3 rounded hover:bg-blue-500 hover:text-white">
                Post Comment
            </button>
        </div>
    </div>
    <!-- replies -->
    <div class="text-center text-gray-600 font-extrabold">
        <h1>Replies</h1>
    </div>
    <div class="p-2 bg-gray-100 rounded-md">
        <div class="flex items-center gap-2">
            <div> <img class=" h-14 w-14 rounded-full" src="https://i.pravatar.cc/150?u={{ $hasab->id + 130 }}"
                    alt="profile img">
            </div>
            <span class="font-bold">luigi</span>
            <span class="text-gray-700">{{ $hasab->created_at }}</span>
        </div>
        <p>
            And 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good
            and Evil) by Cicero, written in 45 BC. This book is a treatise on
            the theory of ethics, very popular during the Renaissance.
        </p>
    </div>
</div>
