@extends('app')
@section('main')
    
<div class="container"style="margin-top:50px;">
    <a href="{{ url('user') }}" type="button" class="btn btn-danger mb-3">kembali</a>
   <div class="row justify-content-center">
    <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
        <div class="card-header">
            Ubah Data Pic Body Ruangan
        </div>
     
        <div class="card-body">
            <form action="{{ route('user.update',$user->id) }}" method="post">
                @csrf
                @method('PUT')
         <div class="row">
          <div class="col-md-6">
           <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nama Lengkap</span>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" value="{{ $user->name }}">
           </div>
           </div>
     
           <div class="col-md-6">
           <div class="input-group mb-3">
             <span class="input-group-text" id="basic-addon1">Nama Panggilan</span>
             <input type="text" class="form-control" placeholder="Alfa" name="username" value="{{ $user->username }}">
                   </div>
           </div>
     
           <div class="col-md-6">
           <div class="input-group mb-3">
             <span class="input-group-text" id="basic-addon1">Email</span>
             <input type="email" class="form-control" placeholder="@example.com" name="email" value="{{ $user->email }}">
                   </div>
           </div>
     
           <div class="col-md-6">
           <div class="input-group mb-3">
             <span class="input-group-text" id="basic-addon1">Password</span>
             <input type="password" class="form-control" placeholder="******" name="password">
                   </div>
           </div>     
           <div class="col-md-6">
             <button type="submit" class="btn btn-outline-success">Tambahkan
             <i class="bi bi-plus-square"></i>
             </a>
         </div>
        </div>
        </div>
        </div>
         </div>
        </form>
     </div>
     </div>
@endsection