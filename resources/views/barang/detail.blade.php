@extends('app')
@section('main')


<div class="container"style="margin-top:50px;">
    <a href="{{ url('barang') }}" type="button" class="btn btn-danger mb-3">kembali</a>
   <div class="row justify-content-center">
    <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
     <div class="card-header">
         Data Ruangan
     </div>
  <div class="table-rensponsive">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Nomor Barang</th>
              <th scope="col">:</th> 
              <th scope="col">{{ $barang->nomor_barang }}</th>        
            </tr>
  
            <tr>
              <th scope="col">Nama Barang</th>
              <th scope="col">:</th> 
              <th scope="col">{{ $barang->nama_barang }}</th>       
            </tr>
  
            <tr>
              <th scope="col">Kategori</th>
              <th scope="col">:</th> 
              <th scope="col">{{ $barang->kategori->nama_kategori }}</th>       
            </tr>
  
            <tr>
              <th scope="col">Nama Ruangan</th>
              <th scope="col">:</th> 
              <th scope="col">{{ $barang->ruangan->nama_ruangan }}</th>       
            </tr>
            
            <tr>
              <th scope="col">Kondisi</th>
              <th scope="col">:</th> 
              <th scope="col">
                @if ($barang->kondisi=='baik')
                <span> Baik </span>
                @elseif ($barang->kondisi=='rusak')
                <span> Rusak </span>  
                @endif         
            </th>       
            </tr>
  
            <tr>
              <th scope="col">Stok / Satuan</th>
              <th scope="col">:</th> 
              <th scope="col">{{ $barang->stok }}
                @if ($barang->satuan=='unit')
                <span> Unit </span>
                @elseif ($barang->satuan=='kilogram')
                <span> Kilogram </span>
                @elseif ($barang->satuan=='butir')
                <span> Butir </span>
                @elseif ($barang->satuan=='liter')
                <span> Liter </span>
                @elseif ($barang->satuan=='lembar')
                <span> Lembar </span>
                @endif                   
            </th>       
            </tr>
  
          </thead>
        </table>
  </div>
  @endsection
