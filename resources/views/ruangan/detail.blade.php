@extends('app')
@section('main')

<div class="container"style="margin-top:50px;">
    <a href="{{ url('ruangan') }}" type="button" class="btn btn-danger mb-3">kembali</a>
   <div class="row justify-content-center">
    <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
     <div class="card-header">
         Data Ruangan
     </div>
  <div class="table-rensponsive">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Ruangan</th>
              <th scope="col">:</th> 
              <th scope="col">{{ $ruangan->nama_ruangan }}</th>        
            </tr>
  
            <tr>
              <th scope="col">Nomor Ruangan</th>
              <th scope="col">:</th> 
              <th scope="col">{{ $ruangan->nomor_ruangan }}</th>       
            </tr>

            <tr>
              <th scope="col">Ukuran Ruangan</th>
              <th scope="col">:</th> 
              <th scope="col">      
              @if ($ruangan->ukuran=='small')
              <span> small </span>
              @elseif ($ruangan->ukuran=='medium')
              <span> Medium </span>
              @elseif ($ruangan->ukuran=='large')
              <span> Large </span>
              @endif
            </th> 

            </tr>
  
            <tr>
              <th scope="col">PIC Ruangan</th>
              <th scope="col">:</th> 
              <th scope="col">{{ $ruangan->users->name }}</th>       
            </tr>
  
          </thead>
        </table>
  </div>

@endsection