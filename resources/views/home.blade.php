@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-white bg-success" button class="btn btn-success">Jendela Info
          
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat datang anda telah berhasil masuk. Berusalah untuk lebih keras dalam memahami sesuatu yang anda anggap sulit. Karena disetiap kesulitan akan ada kemudahan. dan pastinya jangan lupa berdoa saat memulai sesuatu. Have Nice Day </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
