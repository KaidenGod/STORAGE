@extends('app')
@section('main')

<div class="container"style="margin-top:50px;">
    <a href="{{ url('ruangan') }}" type="button" class="btn btn-danger mb-3">kembali</a>
   <div class="row justify-content-center">
    <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
     <div class="card-header">
         Ubah Data Ruangan
     </div>
  
     <div class="card-body">
      <form action="{{ route('ruangan.update',$ruangan->id) }}" method="post">
        @csrf
        @method('PUT')
      <div class="row">
       <div class="col-md-6">
        <div class="input-group mb-3">
             <span class="input-group-text" id="basic-addon1">Nama Ruangan</span>
             <input type="text" class="form-control" placeholder="Nama Ruangan" name="nama_ruangan" value="{{ $ruangan->nama_ruangan }}">
        </div>
        </div>
  
              <div class="col-md-6"></div>
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Ukuran</label>
                <select class="form-select" id="inputGroupSelect01" name="ukuran">
                  <option selected="{{ $ruangan->id }}">{{ $ruangan->ukuran }}</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
                </select>
              </div>
              </div>
  
              <div class="col-md-6"></div>
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">Pj Ruangan</label>
                <select class="form-select" id="inputGroupSelect02" name="user_id">
                  <option selected value="{{ $ruangan->users->id}}"> {{ $ruangan->users->name }}</option>
                  @foreach ($user as $item)                   
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
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
    </form>
     </div>
     </div>
      </div>
  </div>
  </div>
  </div>
  @endsection