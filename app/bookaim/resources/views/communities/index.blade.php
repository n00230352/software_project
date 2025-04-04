<x-app-layout>

    <div class = "py-12">
        <div class = "max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class = "bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class = "font-semibold text-lg mb-4">Discover Communities to Help:</h3>
                    <div class="space-y-6">
                        @foreach ($communities as $community)
                            
                            <x-community-card :name="$community->name" :info="$community->info" :location="$community->location" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
