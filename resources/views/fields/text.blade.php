<x-layouts.app title="Text Field">
    <h1 class="text-2xl font-bold p-6 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-800 rounded-lg shadow-sm">
        {{ __('Text Field') }}
    </h1>

    <input type="text" id="{{ $field->render() }}" name="{{ $field->render() }}" value="{{ $field->render() }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
</x-layouts.app>
