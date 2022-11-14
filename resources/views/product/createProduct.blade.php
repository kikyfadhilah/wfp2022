@extends('layouts.conquer')
@section('contents')
<h2>TAMBAH DATA PRODUK</h2>

<form method="POST" action="{{route('product.store')}}">
    @csrf
    <div class="form-group">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" ><br>
        <label for="formula">Formula : </label><br>
        <input type="text" id="formula" name="formula"><br>
        <label for="restrictionFormula">Restriction Formula:</label><br>
        <input type="text" id="restrictionFormula" name="restrictionFormula"><br>
        <label for="deskripsi">Deskripsi : </label><br>
        <input type="text" id="deskripsi" name="deskripsi" ><br>
        <label for="harga">Harga:</label><br>
        <input type="text" id="harga" name="harga" ><br>
        <!-- <p>GAMBAR</p>
        <label for="gambar">Select a file:</label>
        <input type="file" id="gambar" name="gambar"><br><br> -->
        <label for="fakes1">Fakes 1 : </label><br>
        <input type="text" id="fakes1" name="fakes1"><br>
        <label for="fakes2">fakes 2 : </label><br>
        <input type="text" id="fakes2" name="fakes2" ><br>
        <label for="fakes3">Fakes 3 : </label><br>
        <input type="text" id="fakes3" name="fakes3"><br>

        <label for="category">category id: </label><br>
        <input type="radio" id="category" name="category" value="1">1<br>
        <input type="radio" id="category" name="category"value="2">2<br>
        <input type="radio" id="category" name="category"value="3">3<br>
        <br>
        <button type="submit" value="Submit">SUBMIT</button>


    </div>

</form>

@endsection