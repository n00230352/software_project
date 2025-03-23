@props(['name', 'info', 'location'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 w-full">
    <h4 class="font-semibold text-lg text-[#1D1D1D]">{{$name}}</h4>
    <h2 class="text-gray-600 text-sm">{{$location}}</h2>
    <p class="text-gray-800 mt-4 text-sm">{{$info}}</p>
</div>


