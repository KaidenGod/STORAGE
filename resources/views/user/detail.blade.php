@extends('app')
@section('main')
    
<div class="container"style="margin-top:50px;">
    <a href="{{ url('user') }}" type="button" class="btn btn-danger mb-3">kembali
      <i class="bi bi-arrow-left"></i>
    </a>
   <div class="row justify-content-center">
    <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
     <div class="card-header">
         Detail User
     </div>
  
    <div class="card-body">
  <div class="table-rensponsive">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">:</th>
              <th scope="col">{{ $user->name }}</th> 
            </tr>
  
            <tr>
              <th scope="col">Nama Panggilan</th>
              <th scope="col">:</th>
              <th scope="col">{{ $user->username }}</th> 
            </tr>
  
            <tr>
              <th scope="col">Email</th>
              <th scope="col">:</th>
              <th scope="col">{{ $user->email}}</th> 
            </tr>
  
          </thead>
        </table>
  
        <div class="card-header">
          Detail Room
      </div>
      <div class="row justify-content-center">
     <div class="card-body">
   <div class="table-rensponsive">
       <table class="table">
           <thead>
             <tr>
               <th scope="col">Nama Ruangan</th>
               <th scope="col">Nomor Ruangan</th> 
             </tr>
   
             <tr>
               <th scope="col">Luar Ruangan</th>
               <th scope="col">Dalam Ruangan</th> 
             </tr>
   
           </thead>
         </table>
         </div>
        </div>
  </div>
  @endsection
  