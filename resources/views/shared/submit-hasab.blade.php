<div class="mb-4">
    <form action={{ route('hasab.create') }} method="post">
        @csrf
        <textarea name="created_hasab" class="w-full p-2 border rounded mb-2" rows="2" placeholder="Share your ideas"></textarea>
        <button class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-400">Share</button>
    </form>
</div>
