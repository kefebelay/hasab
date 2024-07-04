@if (session()->has('success'))
    <div class="mb-4 bg-green-100 p-4 rounded">
        <p class="text-green-700">{{ session('success') }}</p>
    </div>
@endif
