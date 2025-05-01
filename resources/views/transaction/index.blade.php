<!DOCTYPE html>
<html>
<head>
    <title>Transaction Details</title>
</head>
<body>
    <h1>Transaction Details</h1>
    @foreach ($data as $item)
        <p><strong>Description:</strong> {{ $item->description }}</p>
        <p><strong>Final Amount:</strong> {{ number_format($item->amount, 2) }}</p>
    @endforeach
</body>
</html>
