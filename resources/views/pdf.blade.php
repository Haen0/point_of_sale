<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert to PDF</title>
    <style>
        body {
            font-size: 0.5em;
        }

        h3 {
            margin-top: 20px
        }

        h2 {
            margin-top: 0px
        }
    </style>
</head>
<body>

    <h2>Invoice</h2>
    @foreach($data as $item)
        <div>
            <p>
                {{ $item['nama'] }}
            </p>
            <p>
                x{{ $item['qty'] }} Rp {{ number_format($item['harga'], 0, ',', '.') }}
            </p>
        </div>
    @endforeach
    <h3>Total Harga : Rp <span>{{ number_format($total_harga, 0, ',', '.') }}</span></h3>

</body>
</html>