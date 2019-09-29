<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@extends('layouts.sidebar')

@section('title', 'Requisitar Software')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Requisitar software</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('login') }}">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection