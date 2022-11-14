@extends('layouts.conquer')
@section('contents')
<h2>TAMBAH DATA USER</h2>

<form method="POST" action="{{route('user.store')}}">
    @csrf
    <div class="form-group">
    <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="email">email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="pwd">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </div>

</form>

@endsection