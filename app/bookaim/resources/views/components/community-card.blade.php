@props(['name', 'info', 'location'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 w-full">
    <h4 class="font-bold text-lg">{{$name}}</h4>
    <h2 class="font-bold text-lg">{{$location}}</h2>
    <p class="text-gray-800 mt-4">{{$info}}</p>
</div>
