@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<<<<<<< HEAD
                    You are logged in!
=======
>>>>>>> f2363885b10f800d3e47ee8f8510f820814f92df
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
