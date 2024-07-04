<div class="mb-4">
    <form action={{ route('hasab.create') }} method="post">
        @csrf
        <textarea name="hasab_form" class="w-full p-2 border rounded " rows="2" placeholder="Share your ideas"></textarea>

        @error('hasab_form')
            <span class="block text-red-500 text-base mb-1 ml-1">
                {{ $message }}
            </span>
        @enderror
        <button class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-400 mt-2">Share</button>
    </form>
</div>
