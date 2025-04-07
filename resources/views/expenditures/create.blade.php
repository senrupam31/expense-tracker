<x-app-layout>
    <div class="max-w-xl mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6 text-center text-black">Add New Expenditure</h1>

        <form method="POST" action="{{ route('expenditures.store') }}">
            @csrf

            <div class="mb-4">
                <label for="item_group" class="block mb-1 font-semibold text-black">Item Group:</label>
                <select id="item_group" class="w-full border p-2 rounded" onchange="filterItems()" required>
                    <option value="">Select Item Group</option>
                    @foreach ($itemGroups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="item_id" class="block mb-1 font-semibold text-black">Item:</label>
                <select name="item_id" id="item_id" class="w-full border p-2 rounded" required>
                    <option value="">Select Item</option>
                    @foreach ($itemGroups as $group)
                        @foreach ($group->items as $item)
                            <option value="{{ $item->id }}" data-group="{{ $group->id }}">{{ $item->name }}</option>
                        @endforeach
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="amount" class="block mb-1 font-semibold text-black">Amount:</label>
                <input type="number" name="amount" id="amount" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-6">
                <label for="date" class="block mb-1 font-semibold text-black">Date (dd-mm-yyyy):</label>
                <input type="date" name="date" id="date" class="w-full border p-2 rounded" required>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-100 hover:bg-gray-800 text-green font-bold py-2 px-6 rounded">
                    Save
                </button>
            </div>
        </form>
    </div>

    <script>
        function filterItems() {
            const groupId = document.getElementById('item_group').value;
            const items = document.querySelectorAll('#item_id option');

            items.forEach(option => {
                if (!option.value) return;
                const group = option.getAttribute('data-group');
                option.style.display = (group === groupId) ? 'block' : 'none';
            });

            document.getElementById('item_id').value = '';
        }
    </script>
</x-app-layout>
