@extends('app')
@section('main')

<div class="container"style="margin-top:50px;">
    <div class="row justify-content-center">
  <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
   <div class="card-header">
       Tambahkan Data Kategori
   </div>

   <div class="card-body">
      <form action="{{ route('kategori.store')}}" method="post">
          @csrf
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
      </form>
   </div>
   </div>
    </div>

</div>
</div>
</div>

<div class="container"style="margin-top:20px;">
    <div class="row justify-content-center">
       <div class="card border border-black shadow-lg" style="background-color: darkseagreen;">
   <div class="card-header">
       Data Kategori
   </div>
<div class="table-rensponsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Action</th> 
          </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $item)
          <tr>
            <th scope="row">{{ $item->nama_kategori }}</th>
              <form action ="{{ route('kategori.destroy', $item->id) }}" method="post"> 
            <td>        
                @csrf       
                @method('DELETE') 
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya {{ $item->nama_kategori}}? ')">Delete</button>    
                <a href="{{ route('kategori.edit',$item->id) }}" type="button" class="btn btn-warning">Edit</a>  
            </form>
            </td>
          </tr>
           @endforeach
        </tbody>
      </table>
</div>


@endsection