<x-layouts.app title="Checkbox Field">
    <h1 class="text-2xl font-bold p-6 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-800 rounded-lg shadow-sm">
        {{ __('Checkbox Field') }}
    </h1>

    <input type="checkbox" id="{{ $field->render() }}" name="{{ $field->render() }}" value="{{ $field->render() }}"
        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
</x-layouts.app>
