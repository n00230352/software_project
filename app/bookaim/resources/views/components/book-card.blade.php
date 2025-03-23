@props(['name', 'condition', 'location', 'notes'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 w-full">
    <h4 class="font-bold text-lg">{{ $name }}</h4>
    <h5 class="font-semibold text-md text-gray-600">{{ $condition }}</h5>
    <h2 class="font-bold text-lg">{{ $location }}</h2>
    <p class="text-gray-800 mt-4">{{ $notes }}</p>
</div>
