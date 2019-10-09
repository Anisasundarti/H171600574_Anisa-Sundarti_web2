@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white text-center bg-success" button class="btn btn-success">Tambah Kategori Pengumuman</div>
          
                <div class="card-body">
                     {!! Form::open(['route' => 'kategori_pengumuman.store', 'method' => 'post']) !!}
                        
                        @include('kategori_pengumuman.form')
                    
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
     </div>
@endsection