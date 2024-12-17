<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Website Visit Statistics') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Visit Statistics</div>
    
                    <div class="card-body">
                        <p>Total Page Views: <strong>{{ $visitCount }}</strong></p>
    
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Page URL</th>
                                    <th>IP Address</th>
                                    <th>Visited At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($visitStats as $index => $visit)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $visit->page_url }}</td>
                                        <td>{{ $visit->ip_address }}</td>
                                        <td>{{ \Carbon\Carbon::parse($visit->created_at)->diffForHumans() }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No visits recorded yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
