@extends('app')
@section('main')

<div class="container"style="margin-top:50px;">
    <a href="{{ url('kategori') }}" type="button" class="btn btn-danger mb-3">kembali</a>
   <div class="row justify-content-center">
    <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
   <div class="card-header">
       Tambahkan Data Barang
   </div>

   <div class="card-body">
    <form action="{{ route('barang.update',$barang->id) }}" method="post">
        @csrf
        @method('PUT')
    <div class="row">
     <div class="col-md-6">
      <div class="input-group mb-3">
           <span class="input-group-text" id="basic-addon1">Nama Barang</span>
           <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang" value="{{ $barang->nama_barang }}">
      </div>
      </div>
     
      <div class="col-md-6">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Kategori Barang</label>
            <select class="form-select" id="inputGroupSelect01" name="id_kategori">
              @foreach ($kategori as $item)                  
              <option selected value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
              @endforeach
            </select>
          </div>
      </div>

      <div class="col-md-6">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect02">Nama Ruangan</label>
            <select class="form-select" id="inputGroupSelect02" name="id_ruangan">
              @foreach ($ruangan as $item)                   
              <option selected value="{{ $item->id }}">{{ $item->nama_ruangan }}</option>
              @endforeach
            </select>
          </div>
      </div>

      <div class="col-md-6">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect03">Stok / Satuan</label>
            <input type="text" name="stok" class="form-control">
            <select class="form-select" id="inputGroupSelect03" name="satuan" value="{{ $barang->satuan }}">
              <option selected>Pilih...</option>
              <option value="unit">Unit</option>
              <option value="kilogram">Kilogram</option>
              <option value="butir">Butir</option>
              <option value="liter">Liter</option>
              <option value="lembar">Lembar</option>
            </select>
          </div>
      </div>

      <div class="col-md-6">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect04">Kondisi</label>
            <select class="form-select" id="inputGroupSelect04" name="kondisi" value="{{ $barang->kondisi }}">
              <option selected>Pilih...</option>
              <option value="baik">Baik</option>
              <option value="rusak">Rusak</option>
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
</form>
</div>
</div>
</div>

@endsection