<x-layouts.app title="Transaction Home">
    <h1
        class="text-2xl font-bold p-6 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-800 rounded-lg shadow-sm">
        Transaction Details
    </h1>

    <!-- Transaction Count -->
    <div class="mb-6 px-6 py-3 bg-indigo-100 text-indigo-800 rounded-md shadow-sm">
        <strong>Transaction Count:</strong> {{ \App\Accounts\Transaction::getCount() }}
    </div>

    @foreach ($transactions as $transaction)
        <div class="bg-white shadow-md rounded-lg p-6 mb-6 space-y-4 transition duration-200 hover:shadow-lg">
            <h2 class="text-xl font-semibold border-b border-gray-200 pb-2 text-gray-800">
                Transaction Summary
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2">
                <div class="flex items-center">
                    <strong class="text-gray-700 w-28">Scope:</strong>
                    <span class="ml-2 text-gray-900">{{ \App\Accounts\Transaction::class }}</span>
                </div>

                <div class="flex items-center">
                    <strong class="text-gray-700 w-28">ID:</strong>
                    <span
                        class="ml-2 text-gray-900">{{ $transaction->getCustomer()?->getPaymentProfile()?->id ?? $transaction->getTransactionId() }}</span>
                </div>

                <div class="flex items-center">
                    <strong class="text-gray-700 w-28">Description:</strong>
                    <span class="ml-2 text-gray-900">{{ $transaction->getDescription() }}</span>
                </div>

                <div class="flex items-center">
                    <strong class="text-gray-700 w-28">Final Amount:</strong>
                    <span class="ml-2 text-gray-900">{{ number_format($transaction->getAmount(), 2) }}</span>
                </div>

                <div class="flex items-center">
                    <strong class="text-gray-700 w-28">Status:</strong>
                    <span
                        class="ml-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        {{ \App\Enums\Status::PAID->value }}
                    </span>
                </div>

                <div class="flex items-center">
                    <strong class="text-gray-700 w-28">New Status:</strong>
                    <span
                        class="ml-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        {{ $transaction->getStatus()->value }}
                    </span>
                </div>
            </div>
        </div>
    @endforeach
</x-layouts.app>
