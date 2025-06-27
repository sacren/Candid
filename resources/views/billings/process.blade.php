<x-layouts.app title="Process Invoice">
    <h1 class="text-2xl font-bold p-6 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-800 rounded-lg shadow-sm">
        {{ __('Billings') }}
    </h1>

    <div class="max-w-3xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md border border-gray-200">
        <h1 class="text-3xl font-semibold text-indigo-800 mb-6">Invoice Details</h1>

        <div class="space-y-4">
            <div class="flex justify-between items-center border-b pb-3">
                <span class="text-gray-600">Amount:</span>
                <span class="text-xl font-bold text-green-600">{{ $invoice['formatted_amount'] }}</span>
            </div>

            <div class="flex justify-between items-center border-b pb-3">
                <span class="text-gray-600">Status:</span>
                <span
                    class="px-3 py-1 rounded-full text-white
                    @if ($invoice['status'] === 'Paid') bg-green-500
                    @else bg-red-500 @endif">
                    {{ $invoice['status'] }}
                </span>
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <a href="{{ route('billings.index') }}"
                class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition duration-200">
                Back to Invoices
            </a>
        </div>
    </div>
</x-layouts.app>
