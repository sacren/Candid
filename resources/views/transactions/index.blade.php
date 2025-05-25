<x-layouts.app title="Transaction Home">
    <h1>Transaction Details</h1>

    @foreach ($data as $item)
        <p><strong>ID:</strong> {{ $item->getCustomer()?->getPaymentProfile()?->id ?? 'N/A' }}</p>
        <p><strong>Description:</strong> {{ $item->description }}</p>
        <p><strong>Final Amount:</strong> {{ number_format($item->amount, 2) }}</p>
        <p><strong>Status:</strong> {{ \App\Accounts\Transaction::STATUS_PAID }}</p>
    @endforeach
</x-layouts.app>
