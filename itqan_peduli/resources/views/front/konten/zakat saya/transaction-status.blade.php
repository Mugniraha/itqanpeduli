<!DOCTYPE html>
<html>
<head>
    <title>Transaction Status</title>
</head>
<body>
    <h1>Status Transaksi</h1>

    @if (isset($response['error']))
        <p>Error: {{ $response['error'] }}</p>
    @else
        <p>Status: {{ $response['transaction_status'] }}</p>
        <p>Metode Pembayaran: {{ $response['payment_type'] }}</p>

        @if ($response['payment_type'] === 'bank_transfer')
            <p>VA Number: {{ $response['va_numbers'][0]['va_number'] ?? 'N/A' }}</p>
        @elseif ($response['payment_type'] === 'qris')
            <p>QR Code URL: <a href="{{ $response['actions'][0]['url'] ?? '#' }}" target="_blank">{{ $response['actions'][0]['url'] ?? 'N/A' }}</a></p>
        @endif

        <p>Gross Amount: Rp {{ number_format($response['gross_amount'], 0, ',', '.') }}</p>
    @endif
</body>
</html>
