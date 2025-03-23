@props(['communities'])

<form method="POST" action="{{ route('donate.store') }}">
    @csrf

    <!-- Book title -->
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Book Title</label>
        <input type="text" id="title" name="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <!-- Book condition -->
    <div class="mb-4">
        <label for="condition" class="block text-sm font-medium text-gray-700">Condition</label>
        <input type="text" id="condition" name="condition" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <!-- Community selection -->
    <div class="mb-4">
        <label for="community_id" class="block text-sm font-medium text-gray-700">Community</label>
        <select id="community_id" name="community_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @foreach($communities as $community)
                <option value="{{ $community->id }}">{{ $community->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Notes -->
    <div class="mb-4">
        <label for="notes" class="block text-sm font-medium text-gray-700">Notes (Optional)</label>
        <textarea id="notes" name="notes" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Donate</button>
</form>
