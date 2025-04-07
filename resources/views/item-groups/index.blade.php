<x-app-layout>
    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6 text-black">All Item Groups & Items</h1>

        @foreach ($itemGroups as $group)
            <div class="mb-6 p-4 border rounded shadow-sm">
                <h2 class="text-xl font-semibold text-blue-700">{{ $group->name }}</h2>

                @if ($group->items->count())
                    <ul class="list-disc pl-5 mt-2 text-gray-800">
                        @foreach ($group->items as $item)
                            <li>{{ $item->name }}</li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500 mt-2">No items found in this group.</p>
                @endif
            </div>
        @endforeach
    </div>
</x-app-layout>
