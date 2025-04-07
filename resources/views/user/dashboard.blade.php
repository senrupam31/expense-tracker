<x-app-layout>
    <div class="max-w-2xl mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-black">User Dashboard</h1>

        <div class="space-y-4">
            <a href="{{ route('expenditures.index') }}" class="block bg-indigo-200 hover:bg-indigo-300 text-black font-semibold py-2 px-4 rounded">
                My Expenditures
            </a>

            <a href="{{ route('expenditures.create') }}" class="block bg-yellow-200 hover:bg-yellow-300 text-black font-semibold py-2 px-4 rounded">
                Add New Expenditure
            </a>
        </div>
    </div>
</x-app-layout>
