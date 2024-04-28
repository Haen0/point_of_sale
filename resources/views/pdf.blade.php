<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Convert to PDF</title>
</head>
<body>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="">
            <tr>
                <th scope="col" colspan="3" class="px-6 py-3 rounded-s-lg">
                    <p class="text-xl">INVOICE</p>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium">
                    {{ $item['nama'] }}
                </th>
                <td class="px-6 py-4">
                    x{{ $item['qty'] }}
                </td>
                <td class="px-6 py-4">
                    Rp {{ number_format($item['harga'], 0, ',', '.') }}
                </td>
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr class="font-semibold">
                <th scope="row" class="px-6 py-3 text-base">Total</th>
                <td class="px-6 py-3"></td>
                <td class="px-6 py-3 text-lg">Rp <span>{{ number_format($total_harga, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>