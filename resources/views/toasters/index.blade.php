<x-layouts.app>
    <h1 class="text-2xl font-bold p-6 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-800 rounded-lg shadow-sm">
        Toaster Details
    </h1>

    @foreach ($slices as $slice)
        <div
            class="p-6 md:p-8 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-700 rounded-md shadow-sm mt-3 last:mb-0">
            {{ $slice }}
        </div>
    @endforeach
</x-layouts.app>
