@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-white text-center bg-success" button class="btn btn-success">KATEGORI BERITA 
                <div class="card-body text-left">
                     <a href ="{!! route('kategori_berita.create') !!}" class="btn btn-dark" > Tambah Data</a>
                              <div class="col text-center"></div>
                <table class="table bg-white table-bordered">
                    <thead class ="text-center bg-warning">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Created</th>
                                <th scope="col">Update</th>
                                <th scope="col">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>

                        @foreach ($KategoriBerita as $item)
                            <tr>
                               
                                <td>{!! $item->id !!}</td>
                                <td>{!! $item->nama !!}</td>
                                <td>{!! $item->users_id !!} </td>
                                <td>{!! $item->created_at->format('d/m/Y H:i:s') !!} </td>
                                <td>{!! $item->updated_at->format('d/m/Y H:i:s')!!}</td>
                                <td>
                                    <a href="{!! route('kategori_berita.show',[$item-> id]) !!}" button class="btn btn-primary">Lihat</a>

                                    <a href="{!! route('kategori_berita.edit',[$item-> id]) !!}" button class="btn btn-secondary">Edit</a>
                                    {!! Form::open(['route' => ['kategori_berita.destroy', $item-> id],'method'=>'delete']) !!}

                                    {!! Form::submit( 'Hapus',['class'=>'btn btn-danger','onclick'=>"return confirm('Apakah Anda yakin Ingin Menghapus Data Ini?')"] ); !!}

                                    {!! Form::close() !!}    
                                
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                    </table>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
@endsection