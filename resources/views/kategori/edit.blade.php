@extends('app')
@section('main')

<div class="container"style="margin-top:50px;">
    <a href="{{ url('kategori') }}" type="button" class="btn btn-danger mb-3">kembali</a>
   <div class="row justify-content-center">
    <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
   <div class="card-header">
       Ubah Data Kategori
   </div>

   <div class="card-body">
    <form action="{{ route('kategori.update',$kategori->id) }}" method="post">
        @csrf
        @method('PUT')
    <div class="row">
     <div class="col-md-6">
      <div class="input-group mb-3">
           <span class="input-group-text" id="basic-addon1">Nama Kategori</span>
           <input type="text" class="form-control" placeholder="Nama Kategori" name="nama_kategori">
           
      </div>
      </div>

      <div class="col-md-6">
        <button type="submit" class="btn btn-outline-success">Tambahkan
        <i class="bi bi-plus-square"></i>
        </button>
    </div>

   </div>
   </div>
   </div>
    </div>
</div>
</div>
</div>
@endsection