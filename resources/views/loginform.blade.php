<h1>
    Login Form
</h1>

{{--@if($errors -> any())
    @foreach($errors -> all() as $item)
        <li>{{$item}}</li>
    @endforeach
@endif--}}
{{--{{$errors}}--}}

<form action="loginform" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter UserId">
    <br>
    <span style="color: red">@error('username'){{$message}}@enderror</span>
    <br>
    <input type="password" name="password" placeholder="Password">
    <br>
    <span style="color: red">@error('password'){{$message}}@enderror</span>
    <br>
    <button type="submit">Login</button>
</form>
