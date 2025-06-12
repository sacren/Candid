<x-layouts.app title="Debt Collection">
    <h1 class="text-2xl font-bold p-6 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-800 rounded-lg shadow-sm">
        {{ __('Debt Collection') }}
    </h1>

    <div class="p-6 max-w-md mx-auto bg-white rounded shadow mt-10">
        <h1 class="text-2xl font-bold mb-4">Debt Collection Demo</h1>

        <p class="mb-2"><strong>Owed Amount:</strong> ${{ number_format($owed, 2) }}</p>
        <p class="mb-2"><strong>Fee:</strong> ${{ number_format($fee, 2) }}</p>
        <p class="mb-4"><strong>Collected Amount:</strong> ${{ number_format($collected, 2) }}</p>

        @if ($collected > 0)
            <p class="text-green-600 font-semibold">✅ Collection successful!</p>
        @else
            <p class="text-red-600 font-semibold">❌ Not enough to cover the fee.</p>
        @endif
    </div>
</x-layouts.app>
