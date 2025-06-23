<x-layouts.app title="Billings">
    <h1 class="text-2xl font-bold p-6 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-800 rounded-lg shadow-sm">
        {{ __('Billings') }}
    </h1>

    <div class="p-6 bg-white rounded-lg shadow-md border border-gray-200 max-w-md mx-">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Invoice Summary</h2>

        <div class="space-y-3">
            <div class="flex justify-between">
                <span class="text-gray-600">Amount Due:</span>
                <span class="font-medium text-gray-900">{{ $invoice->formatCurrency('amount') }}</span>
                <span
                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                               {{ isset($invoice->amount) ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800' }}">
                    {{ isset($invoice->amount) ? 'Unpaid' : 'Paid' }}
                </span>
            </div>
        </div>

        <!-- Display process() result -->
        <div class="mt-4 p-3 bg-blue-50 text-blue-800 text-sm rounded-md border border-blue-100">
            <ul>
                @foreach ($results as $result)
                    <li>
                        <strong>Process Result:</strong> {{ $result }}
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Display process() static result -->
        <div class="mt-4 p-3 bg-blue-50 text-blue-800 text-sm rounded-md border border-blue-100">
            <ul>
                @foreach ($staticResults as $staticResult)
                    <li>
                        <strong>Static Process:</strong> {{ $staticResult }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layouts.app>
