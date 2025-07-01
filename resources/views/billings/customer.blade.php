<x-layouts.app title="Customer Details">
    <h1 class="text-2xl font-bold p-6 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-800 rounded-lg shadow-sm">
        {{ __('Customer Details') }}
    </h1>

    <!-- Customer Details -->
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-xl shadow-md space-y-6">
        <!-- Customer Info Card -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-lg shadow-sm border border-indigo-100">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Customer Profile</h2>
            <ul class="space-y-2 text-gray-600">
                <li><strong>Name:</strong> {{ $customer->getName() }}</li>
                <li><strong>Age:</strong> {{ $customer->getAge() }}</li>
            </ul>
            {{ var_dump($customer) }}
        </div>

        <!-- Invoice Info Card -->
        <div class="bg-gradient-to-r from-green-50 to-teal-50 p-6 rounded-lg shadow-sm border border-green-100">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Invoice Summary</h2>
            <ul class="space-y-2 text-gray-600">
                <li><strong>Amount:</strong> {{ $invoice['formatted_amount'] ?? $invoice['amount'] }}</li>
                <li><strong>Status:</strong> <span class="text-green-600 font-medium">Paid</span></li>
            </ul>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-between mt-6">
            <a href="{{ route('billings.index') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-md transition duration-200">
                ← Back to Billing List
            </a>
        </div>
    </div>
</x-layouts.app>
