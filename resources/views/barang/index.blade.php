@extends('app')
@section('main')

<div class="container"style="margin-top:50px;">
    <div class="row justify-content-center">
  <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
   <div class="card-header">
       Tambahkan Data Barang
   </div>

   <div class="card-body">
    <form action="{{ route('barang.store')}}" method="post">
        @csrf
    <div class="row">
     <div class="col-md-6">
      <div class="input-group mb-3">
           <span class="input-group-text" id="basic-addon1">Nama Barang</span>
           <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang">
      </div>
      </div>
     
      <div class="col-md-6">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Kategori Barang</label>
            <select class="form-select" id="inputGroupSelect01" name="id_kategori" >
              <option selected>Pilih...</option>
              @foreach ($kategori as $item)
              <option value="{{ $item->id }}">
                {{ $item->nama_kategori }}
              </option>
              @endforeach
            </select>
          </div>
      </div>

      <div class="col-md-6">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect02">Nama Ruangan</label>
            <select class="form-select" id="inputGroupSelect02" name="id_ruangan">
              <option selected>Pilih...</option>
              @foreach ($ruangan as $item)
              <option value="{{ $item->id }}">{{ $item->nama_ruangan }}</option>
              @endforeach
            </select>
          </div>
      </div>

      <div class="col-md-6">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect03">Stok / Satuan</label>
            <input type="text" name="stok" class="form-control">
            <select class="form-select" id="inputGroupSelect03" name="satuan">
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
            <select class="form-select" id="inputGroupSelect04" name="kondisi">
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

<div class="container"style="margin-top:20px;">
    <div class="row justify-content-center">
       <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
   <div class="card-header">
       Data Barang
   </div>
<div class="table-rensponsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nomor Barang</th>
            <th scope="col">Nama Barang</th> 
            <th scope="col">Tempat</th> 
            <th scope="col">Action</th>            
          </tr>
        </thead>
        <tbody>
          @foreach ($barang as $item)
          <tr>
            <th scope="row">{{ $item->nomor_barang }}</th>
            <th scope="row">{{ $item->nama_barang }}</th>
            <th scope="row">{{ $item->ruangan->nama_ruangan }}</th>
            <form action ="{{ route('barang.destroy', $item->id) }}" method="post"> 
            <td>
              <a href="{{ route('barang.show',$item->id) }}" type="button" class="btn btn-primary">Detail</a>              
              @csrf       
              @method('DELETE') 
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya {{ $item->nama_barang}}? ')">Delete</button>    
            <a href="{{ route('barang.edit',$item->id) }}" type="button" class="btn btn-warning">Edit</a>  
          </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

@endsection