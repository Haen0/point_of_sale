<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert to PDF</title>
</head>
<body>

    <h1>Invoice</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Item</th>
                <th>Harga</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['harga'] }}</td>
                <td>{{ $item['qty'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>