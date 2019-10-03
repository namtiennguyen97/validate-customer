<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<h1>Edit</h1>
<form method="post">
    @csrf
    Name: <input value="{{$customer->name}}" type="text" name="name">
    Age: <input value="{{$customer->age}}" type="text" name="age">
    <input type="submit" value="Edit">
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>
</body>
</html>
