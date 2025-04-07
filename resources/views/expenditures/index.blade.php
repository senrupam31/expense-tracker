<x-app-layout>
    <div class="max-w-4xl mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6 text-black text-center">My Expenditures</h1>

        @if ($expenditures->count())
            <table class="w-full table-auto border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-2 border">Item</th>
                        <th class="p-2 border">Amount</th>
                        <th class="p-2 border">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($expenditures as $exp)
                        <tr>
                            <td class="p-2 border">{{ $exp->item->name ?? 'N/A' }}</td>
                            <td class="p-2 border">{{ $exp->amount }}</td>
                            <td class="p-2 border">{{ \Carbon\Carbon::parse($exp->date)->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center text-gray-500 mt-6">No expenditures found.</p>
        @endif
    </div>
</x-app-layout>
