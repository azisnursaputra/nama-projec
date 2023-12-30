<!DOCTYPE html>
<html lang="{{str_replace('-','-', app()->getlocale())}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>

<body class="antialiased">
    <form action="{{url('item/post')}}" method="post">
        @csrf
        <table style="border: 1px solid #000;">
            <tr>
                <td>Nama Item: </td>
                <td><input type="text" name="item_name" id="item_name"></td>
            </tr>
            <tr>
                <td>Tipe Item: </td>
                <td><input type="text" name="item_type" id="item_type"></td>
            </tr>
            <tr>
                <td>Harga Item: </td>
                <td><input type="text" name="item_price" id="item_price"></td>
            </tr>
            <tr>
                <td>Deskripsi Item:</td>
                <td><input type="text" name="item_desc" id="item_desc"></td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $$error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
</body>

</html>