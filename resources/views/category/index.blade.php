@extends('layouts.conquer')
@section('contents')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">Nama</th>
    </tr>
  </thead>
  <tbody>
    @foreach($queryBuilder as $d)
    <tr>
      <th scope="row"></th>
      <td>{{ $d->id}}</td>
      <td>{{ $d->nama}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection