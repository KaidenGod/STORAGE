@extends('app')
@section('main')

<div class="container"style="margin-top:50px;">
    <div class="row justify-content-center">
  <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
     <div class="card-header">
         Tambahkan Data Pic Body Ruangan
     </div>
  
     <div class="card-body">
        <form action="{{ route('ruangan.store')}}" method="post">
            @csrf
      <div class="row">
       <div class="col-md-6">
        <div class="input-group mb-3">
             <span class="input-group-text" id="basic-addon1">Nama Ruangan</span>
             <input type="text" class="form-control" placeholder="Nama_Ruangan" name="nama_ruangan">
        </div>
        </div>
  
              <div class="col-md-6"></div>
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Ukuran</label>
                <select class="form-select" id="inputGroupSelect01" name="ukuran">
                  <option selected>Plih...</option>
                  <option value="small">small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
                </select>
              </div>
              </div>
  
              <div class="col-md-6"></div>
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">Pj Ruangan</label>
                <select class="form-select" id="inputGroupSelect02" name="user_id">
                  <option selected>Plih...</option>
                  @foreach ($user as $item)                
                  <option value="{{ $item->id}}">{{ $item->name }}</option>
                  @endforeach
                </select>
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
</form>
  </div>
  </div>
  
  <div class="container"style="margin-top:50px;">
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
              <th scope="col">Nomor Ruangan</th>
              <th scope="col">Action</th> 
            </tr>
          </thead>
          <tbody>
            @foreach ($ruangan as $item)
                
           
            <tr>
              <th scope="row">{{ $item->nama_ruangan }}</th>
              <th>{{ $item->nomor_ruangan }}</th>
              <form action ="{{ route('ruangan.destroy', $item->id) }}" method="post"> 
              <td>
                <a href="{{ route('ruangan.show',$item->id) }}" type="button" class="btn btn-primary">Detail</a>              
                @csrf       
                @method('DELETE') 
              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya {{ $item->nama_ruangan}}? ')">Delete</button>    
              <a href="{{ route('ruangan.edit',$item->id) }}" type="button" class="btn btn-warning">Edit</a>  
            </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          
        </table>
  </div>
  @endsection