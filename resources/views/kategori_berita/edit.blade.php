@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success" button class="btn btn-success">Tambah Kategori Berita</div>
          
                <div class="card-body text-center">
                    
                    {!! Form::model($kategori_berita, ['route' => ['kategori_berita.update', $kategori_berita->id],'method'=>'patch']) !!}
                        
                        @include('kategori_berita.form')
                    
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
     </div>
@endsection