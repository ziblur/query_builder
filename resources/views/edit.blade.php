<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit a Product</title>
</head>
<body>
    <form method="POST" action="{{ route('updateProducts',["id"]) }}">
        @method('PUT')
        @csrf
        <h1>Edit a Product</h1>
        <table>
            <tr>
                <th>Type</th>
                <th>FillUP</th>
            </tr>
            <tr>
                <td> <label for=" product_id">Product_id</label></td>
                <td>
                    <input type="text" name="product_id" required value="<?php echo $products[0]->product_id?>">
                </td>
            </tr>
            <tr>
                <td> <label for="name">Name</label></td>
                <td>
                    <input type="text" name="name" required value="<?php echo $products[0]->name?>">
                </td>
            </tr>
            <tr>
                <td> <label for="price">Price</label></td>
                <td>
                    <input type="number" name="price" required value="<?php echo $products[0]->price?>">
                </td>
            </tr>
            <tr>
                <td> <label for="description">Description</label></td>
                <td>
                    <input type="text" name="description" value="<?php echo $products[0]->description?>">
                </td>
            </tr>
            <tr>
                <td> <label for="stock">Stock</label></td>
                <td>
                    <input type="number" name="stock" required value="<?php echo $products[0]->stock?>">
                </td>
            </tr>
            <tr>
                <td> <label for="image">Image</label></td>
                <td>
                    <input type="text" name="image" required value="<?php echo $products[0]->image?>">
                </td>
            </tr>
            <tr> <td><input type="submit"></td></tr>
        </table>
    </form>
</body>
</html>