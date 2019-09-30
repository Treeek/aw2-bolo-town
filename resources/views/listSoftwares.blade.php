<!-- Stored in resources/views/child.blade.php -->

@php
$os_list = ["Windows 7", "Windows 8", "Windows 10", "Linux", "MacOS"]
@endphp

@extends('layouts.app')

@extends('layouts.sidebar')

@section('title', 'Softwares')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <form id="form-labs" class="m-0" action="/list" method="GET">
                        <div class="form-group m-0 row">
                            <div class="col-3 d-flex align-items-center">
                                <label class="m-0" for="lab"><strong>Softwares do:</strong></label>
                            </div>
                            <div class="input-group col pl-0">
                                <select class="custom-select" id="lab" onchange="event.preventDefault();document.getElementById('form-labs').submit();">
                                    @for($i = 1; $i <= 16; $i++) <option>Laboratório
                                        {{str_pad($i, 2, '0', STR_PAD_LEFT)}}</option>
                                        @endfor
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div>
                        <div class="row">
                            <div class="col-4 text-right"><strong>Nome:</strong></div>
                            <div class="col-6">Pencil Project</div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-right"><strong>Versão:</strong></div>
                            <div class="col-6">1.11</div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-right"><strong>URL do site:</strong></div>
                            <div class="col-6"><a href="https://pencil.evolus.vn/">Link</a></div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-right"><strong>Data de instalação:</strong></div>
                            <div class="col-6">29/12/2019</div>
                        </div>
                    </div>
                    <hr />
                    <div>
                        <div class="row">
                            <div class="col-4 text-right"><strong>Nome:</strong></div>
                            <div class="col-6">Pencil Project</div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-right"><strong>Versão:</strong></div>
                            <div class="col-6">1.11</div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-right"><strong>URL do site:</strong></div>
                            <div class="col-6"><a href="https://pencil.evolus.vn/">Link</a></div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-right"><strong>Data de instalação:</strong></div>
                            <div class="col-6">29/12/2019</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> @endsection