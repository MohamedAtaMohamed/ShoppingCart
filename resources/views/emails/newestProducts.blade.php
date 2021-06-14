<!DOCTYPE html>
<html>
<head>
    <style>
        table, td, th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>


<table>
    <thead>
    <tr>
        <th>Product Name</th>
        <th>Product Price</th>
    </tr>

    </thead>
    <tbody>

    @foreach($products as $product)
        <tr>
            <td>{{$product['name']}}</td>
            <td>{{$product['price']}} $</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
