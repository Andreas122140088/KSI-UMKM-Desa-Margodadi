<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Website Visit Statistics') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Visit Statistics</h1>
                    <hr />

                    <h3>Total Visitors: {{ $totalVisitors }}</h3>

                    <h3>Visitors Per Day (Last 7 Days):</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Visitors</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visitorsPerDay as $visitor)
                            <tr>
                                <td>{{ $visitor->date }}</td>
                                <td>{{ $visitor->total }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
