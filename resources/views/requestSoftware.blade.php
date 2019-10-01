<!-- Stored in resources/views/child.blade.php -->

@php
$os_list = ["Windows 7", "Windows 8", "Windows 10", "Linux", "MacOS"]
@endphp

@extends('layouts.app')

@extends('layouts.sidebar')

@section('title', 'Requisitar Software')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
            @endif
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Requisitar software</div>
                <div class="card-body">
                    <form action="{{ url('request') }}" method="POST">
                        @csrf


                        <div class="form-group row">
                            <label for="software-name" class="col-md-4 col-form-label text-md-right">
                                Nome do Software:
                            </label>

                            <div class="col-md-6">
                                <input id="software-name" type="text"
                                    class="form-control @error('software-name') is-invalid @enderror"
                                    name="software-name" required autofocus />
                                @error('software-name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="software-version" class="col-md-4 col-form-label text-md-right">
                                Versão do Software:
                            </label>

                            <div class="col-md-6">
                                <input id="software-version" type="text"
                                    class="form-control @error('software-version') is-invalid @enderror"
                                    name="software-version" required autofocus />
                                @error('software-version')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="software-name" class="col-md-4 col-form-label text-md-right">
                                Link para o site do software:
                            </label>

                            <div class="col-md-6">
                                <input id="software-url" type="type"
                                    class="form-control @error('software-url') is-invalid @enderror" name="software-url"
                                    required />
                                @error('software-url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">
                                Laboratórios:
                            </label>

                            <div class="col-md-6">
                                <div class="px-3 row">
                                    @for ($i = 1; $i <= 16; $i++) <div class="form-check col-md-6 py-2">
                                        <input class="form-check-input" type="checkbox" name="lab{{$i}}"
                                            id="lab{{$i}}" />
                                        <label class="form-check-label" for="lab{{$i}}">
                                            Laboratório {{str_pad($i, 2, '0', STR_PAD_LEFT)}}
                                        </label>
                                </div>
                                @endfor
                            </div>
                        </div>
                </div>

                <div class="form-group row">
                    <label for="software-justification" class="col-md-4 col-form-label text-md-right">
                        Justificativa:
                    </label>

                    <div class="col-md-6">
                        <textarea class="form-control @error('software-justification') is-invalid @enderror"
                            id="software-justification" name="software-justification" rows="3" minlength="10"
                            maxlength="240" required>
                                    </textarea>

                        @error('software-justification')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="software-name" class="col-md-4 col-form-label text-md-right">
                        Sistema Operacional:
                    </label>

                    <div class="col-md-6">
                        <input id="software-os" type="text"
                            class="form-control @error('software-os') is-invalid @enderror" name="software-os"
                            required />

                        @error('software-os')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            <input type="hidden" name="teacher_name" value="{{Auth::user()->name}}">
                <div class="text-right px-4">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div> @endsection