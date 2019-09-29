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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Requisitar software</div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf


                        <div class="form-group row">
                            <label for="software-name" class="col-md-4 col-form-label text-md-right">
                                Nome do Software:
                            </label>

                            <div class="col-md-6">
                                <input id="software-name" type="text" class="form-control" name="software-name" required
                                    autofocus />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="software-name" class="col-md-4 col-form-label text-md-right">
                                Link para o site do software:
                            </label>

                            <div class="col-md-6">
                                <input id="software-url" type="type" class="form-control" name="software-url" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">
                                Laboratórios:
                            </label>

                            <div class="col-md-6">
                                <div class="px-3 row">
                                    @for ($i = 1; $i <= 12; $i++)
                                        <div class="form-check col-md-6 py-2">
                                            <input class="form-check-input" type="checkbox" name="lab{{$i}}"
                                                id="lab{{$i}}" />
                                            <label class="form-check-label" for="lab{{$i}}">
                                                Laboratório {{$i}}
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
                                <textarea class="form-control" id="software-justification" name="software-justification" rows="3" minlength="10" maxlength="240"
                                    required>
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="software-name" class="col-md-4 col-form-label text-md-right">
                                Sistema Operacional:
                            </label>

                            <div class="col-md-6">
                                <input id="software-os" type="text" class="form-control" name="software-os" required />
                            </div>
                        </div>
                        <div class="text-right px-4">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> @endsection