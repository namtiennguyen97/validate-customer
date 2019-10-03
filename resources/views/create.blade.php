
@section('title','create customer')
<h1>Add new Customer</h1>
@if($errors->any())
    @foreach($errors->all() as $nameError)
        <p style="color: red">{{$nameError}}</p>
        @endforeach
    @endif
<form method="post">
    @csrf
    Name: <input type="text" name="name">
    Age:<input type="text" name="age">
    <input type="submit" value="Add on!">
</form>

