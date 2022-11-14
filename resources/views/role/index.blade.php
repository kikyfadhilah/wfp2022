@extends('layouts.conquer')

@section('javascript')
<script>
function showInfo()
{
  $.ajax({
    type:'POST',
    url:'{{route("product.showInfo")}}',
    data:'_token=<?php echo csrf_token() ?>',
    success: function(data){
       $('#showinfo').html(data.msg)
    }
  });
}
</script>
@endsection

@section('contents')

<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="index.html">Home</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      <a href="#">Welcome</a>
    </li>
    <li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="#" onclick="showInfo()">
        <i class="icon-bulb"></a></i>
    </li>
  </ul>
</div>
<div id='showinfo'></div>
My DrugStore
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">Nama</th>
      <!-- <th scope="col">deskripsi</th>
      <th scope="col">Kategori id</th> -->
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
  </div>
</table>
</div>
@endsection