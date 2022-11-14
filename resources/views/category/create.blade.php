@extends('layouts.conquer')
@section('contents')
<h2>TAMBAH DATA KATEGORI</h2>

<form method="POST" action="{{route('category.store')}}">
    @csrf
    <div class="form-group">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" ><br>
        <label for="deskripsi">Deskripsi : </label><br>
        <input type="text" id="deskripsi" name="deskripsi"><br>
        <button type="submit" value="Submit">SUBMIT</button>


    </div>

</form>

@endsection