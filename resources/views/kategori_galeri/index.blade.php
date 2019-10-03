@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-info" button class="btn btn-primary">KATEGORI GALERI</div> 
                <div class="card-body">
                              <div class="col text-center">
                <table class="table table-bordered">
                    <thead class ="bg-warning">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Created</th>
                                <th scope="col">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>

                        @foreach ($KategoriGaleri as $item)
                            <tr>
                               
                                <td>{!! $item->id !!}</td>
                                <td>{!! $item->nama !!}</td>
                                <td>{!! $item->users_id !!}</td>
                                <td>{!! $item->created_at->format('d/m/Y H:i:s')!!}</td>
                                <td>
                                    <a href ="index.php?p=tang" button class="btn btn-danger" type="button"> Hapus </button></a> 
                                    <a href="{!! route('kategori_galeri.show',[$item-> id]) !!}" button class="btn btn-success">Lihat</a>
                                
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                    </table>
                </div>
                
            </div>
             <a href ="{!! route('kategori_galeri.create') !!}" class="btn btn-primary" > Tambah Data</a>
        </div>
    </div>
</div>
@endsection