<x-app-layout>
    <x-slot name="header">
        <h2 class = "font-semibold text-xl text gray-800 leading-tight">
            {{__('All books') }}
        </h2>
    </x-slot>

    <div class = "py-12">
        <div class = "max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class = "bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class = "font-semibold text-lg mb-4">List of books:</h3>
                    <div class="grid gri-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($books as $book)
                            <x-book-card
                                :name="$book->title"
                                :condition="$book->condition"
                                :location="$book->donation->community->location"
                                :notes="$book->donation->notes"
                            />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
