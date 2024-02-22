@extends('app')
@section('main')
    

<!--container-->
<div class="container"style="margin-top:50px;">
    <div class="row justify-content-center">
  <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
     <div class="card-header">
         Tambahkan Data Pic Body Ruangan
     </div>
  
     <div class="card-body">
        <form action = "{{ route('user.store') }}" method="post"> 
        @csrf
      <div class="row">
       <div class="col-md-6">
        <div class="input-group mb-3">
             <span class="input-group-text" id="basic-addon1">Nama Lengkap</span>
             <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
        </div>
        </div>
  
        <div class="col-md-6">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Nama Panggilan</span>
          <input type="text" class="form-control" placeholder="Alfa" name="username">
                </div>
        </div>
  
        <div class="col-md-6">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Email</span>
          <input type="email" class="form-control" placeholder="@example.com" name="email">
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
          </button>
      </div>
     </div>
     </div>
     </div>
      </div>
      </div>
  </div>
  </div>
  </div>
</form>

  <div class="container"style="margin-top:20px;">
    <div class="row justify-content-center">
       <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
     <div class="card-header">
         Data Pic Body Ruangan
     </div>
  <div class="table-rensponsive">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Nama Panggilan</th>
              <th scope="col">Action</th> 
            </tr>
          </thead>
          <tbody>
            @foreach ($user as $item)

            <tr>
              <td scope="row">{{$item->name}}</td>
              <td>{{$item->username}}</td>
              <form action ="{{ route('user.destroy', $item->id) }}" method="post">    
              <td>
                  <a href="{{ route('user.show',$item->id) }}" type="button" class="btn btn-primary">Detail</a> 
                    @csrf       
                    {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya {{ $item->name }}? ')">Delete</button>    
                  <a href="{{ route('user.edit',$item->id) }}" type="button" class="btn btn-warning">Edit</a>  
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>
  @endsection