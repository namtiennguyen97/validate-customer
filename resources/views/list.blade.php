<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
<h1>Customer validate test</h1>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    @foreach($customer as $key=>$value)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->age}}</td>
        </tr>
        @endforeach
</table>
<a href="{{route('customers.create')}}">Add new one!</a>
</body>
</html>
