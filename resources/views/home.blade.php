@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-info" button class="btn btn-primary">Jendela Info</div>
          
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat datang anda telah berhasil masuk.
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
