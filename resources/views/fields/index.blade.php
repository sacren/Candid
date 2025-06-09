<x-layouts.app title="Abstract">
    <h1 class="text-2xl font-bold p-6 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-800 rounded-lg shadow-sm">
        {{ __('Field Details') }}
    </h1>

    <ul>
        @foreach ($fields as $field)
            <li
                class="p-6 md:p-8 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-700 rounded-md shadow-sm mt-3 last:mb-0">
                {{ $field }}
            </li>
        @endforeach
    </ul>
</x-layouts.app>
