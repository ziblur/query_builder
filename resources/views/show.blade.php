<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show a single product</title>
</head>
<body>
    <h1>Show a single product</h1>
    <table border="1px solid black">
        <tr>
            <th>product_id</th>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>stock</th>
            <th>image</th>

        </tr>
        @foreach ($products as $product) 
        <tr>
           <td>{{$product->product_id}}</td>
           <td>{{$product->name}}</td>
           <td>{{$product->description}}</td>
           <td>{{$product->price}}</td>
           <td>{{$product->stock}}</td>
           <td>{{$product->image}}</td>

       </tr>   
       @endforeach   
    </table>
</body>
</html>