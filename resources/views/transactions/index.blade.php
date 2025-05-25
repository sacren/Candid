<x-layouts.app title="Transaction Home">
    <h1>Transaction Details</h1>

    @foreach ($data as $item)
        <ul>
            <li><strong>Scope:</strong> {{ \App\Accounts\Transaction::class }}</li>
            <li><strong>ID:</strong> {{ $item->getCustomer()?->getPaymentProfile()?->id ?? 'N/A' }}</li>
            <li><strong>Description:</strong> {{ $item->description }}</li>
            <li><strong>Final Amount:</strong> {{ number_format($item->amount, 2) }}</li>
            <li><strong>Status:</strong> {{ \App\Enums\Status::PAID->value }}</li>
        </ul>
    @endforeach
</x-layouts.app>
