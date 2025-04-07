<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Role-based dashboard links -->
                    @auth
                        @if(auth()->user()->role === 'admin')
                            <!-- Show only to Admin -->
                            <div class="mb-4">
                                <a href="{{ route('item-groups.index') }}" class="text-blue-500 underline">Manage Item Groups</a><br>
                                <a href="{{ route('items.index') }}" class="text-blue-500 underline">Manage Items</a><br>
                                <a href="{{ route('expenditures.index') }}" class="text-blue-500 underline">View All Expenditures</a>
                            </div>
                        @endif

                        @if(auth()->user()->role === 'user')
                            <!-- Show only to regular user -->
                            <a href="{{ route('expenditures.index') }}" class="text-green-500 underline">My Expenditures</a>
                        @endif
                    @endauth
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
