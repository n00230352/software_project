
<div class="border rounded-lg p-4 shadow-md">
    <h3 class="text-lg font-semibold">{{ $name }}</h3>
    <p class="text-sm text-gray-600">Condition: {{ $condition }}</p>
    <p class="text-sm text-gray-600">Location: {{ $location }}</p>
    @if($notes)
        <p class="text-sm text-gray-600">Notes: {{ $notes }}</p>
    @endif
</div>
