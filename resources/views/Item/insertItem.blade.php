<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <form action="{{url('Item/post')}}" method="post">
            @csrf
            <table style="border: solid 1px #000">
                <tr>
                    <td>Nama Item</td>
                    <td><input type="text" name="item_name"></td>
                </tr>
                <tr>
                    <td>Tipe Item</td>
                    <td><input type="text" name="item_type"></td>
                </tr>
                <tr>
                    <td>Harga Item</td>
                    <td><input type="text" name="item_price"></td>
                </tr>
                <tr>
                    <td>Deskripsi Item</td>
                    <td><input type="text" name="item_desc"></td>
                </tr>
                <tr>
                    <td><button type="submit">Submit</button></td>
                </tr>
            </table>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </body>
</html>