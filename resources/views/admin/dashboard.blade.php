<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mb-4">Welcome to Admin Dashboard</h3>

                    <!-- Navigasi Utama -->
                    <nav>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                {{-- <a href="{{ route('admin.statistics.index') }}" class="nav-link">Visit Statistics</a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('admin/products') }}" class="nav-link">Products</a>
                            </li>
                        </ul>
                    </nav>

                    <hr />

                    <!-- Konten Utama Dashboard -->
                    <div>
                        <p class="mt-4">
                            {{ __("You're logged in!") }}
                        </p>
                        <p>
                            Use the navigation menu above to manage your website.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
