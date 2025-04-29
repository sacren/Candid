<!DOCTYPE html>
<html>
<head>
    <title>Transaction Details</title>
</head>
<body>
    <h1>Transaction Details</h1>
    <p><strong>Final Amount:</strong> {{ number_format($transaction->amount, 2) }} </p>
    <p><strong>Description:</strong> {{ $transaction->description }}</p>
</body>
</html>
