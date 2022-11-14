@extends('layouts.conquer')

@section('javascript')
<script>
    function showInfo() {
        $.ajax({
            type: 'POST',
            url: '{{route("product.showInfo")}}',
            data: '_token=<?php echo csrf_token() ?>',
            success: function(data) {
                $('#showinfo').html(data.msg)
            }
        });
    }

    function getDetailData(id) {
        $.ajax({
            type: 'POST',
            url: '{{route("transaction.showAjax")}}',
            data: '_token=<?php echo csrf_token() ?> &id= +id',
            success: function(data) {
                $('#msg').html(data.msg)
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
            <th scope="col">Pembeli</th>
            <th scope="col">Kasir</th>
            <th scope="col">Tanggal Transaksi</th>
            <th scope="col">Aksi</th>
            <!-- <th scope="col">deskripsi</th>
      <th scope="col">Kategori id</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach($queryModel as $d)
        <tr>
            <th scope="row"></th>
            <td>{{ $d->id}}</td>
            <td>{{ $d->buyer->name}}</td>
            <td>{{ $d->user->name}}</td>
            <td>{{ $d->created_at}}</td>
            <td>
                <a class="btn btn-default" data-toggle="modal" href="#modalInfo{{$d->id}}" data-toggle="modal">Lihat Rincian Pembelian</a><br>
                <div class="modal fade" id="show{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- put animated gif here -->
                        </div>
                    </div>
                </div>
            </td>
            </td>
        </tr>
        <div class="modal fade" id="modalInfo{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">{{$d->nama}}</h4>
                    </div>
                    <div class="modal-body">
                        <label for="">ID Produk : {{$d->id}} </label><br>
                        <label for="">Nama Produk : {{$d->nama}}</label><br>
                        <label for="">Deskripsi : {{$d->deskripsi}}</label><br>
                        <label for="">ID Kategori : {{$d->category_id}}</label><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="show{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">{{$d->nama}}</h4>
                    </div>
                    <div class="modal-body">
                        <label for="">ID Produk : {{$d->id}} </label><br>
                        <label for="">Nama Produk : {{$d->nama}}</label><br>
                        <label for="">Deskripsi : {{$d->deskripsi}}</label><br>
                        <label for="">ID Kategori : {{$d->category_id}}</label><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            @endforeach
    </tbody>
    </div>
</table>
@endsection