<!-- Stored in resources/views/child.blade.php -->

@php
$os_list = ["Windows 7", "Windows 8", "Windows 10", "Linux", "MacOS"]
@endphp

@extends('layouts.app')

@extends('layouts.sidebar')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 p-0">
            <h3 style="margin: 5px -20px;">Requisições</h3>
        </div>
        <div class="col-md-8">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div id="accordion" style="width: 700px;">
                    @foreach ($applications as $item)
                    @if (!$item->acceptance_date)
                    <div class="card mt-2">
                        <div class="card-header" id="heading{{$item->id}}">
                            <h5 class="mb-0">
                                <div style="cursor: pointer;" data-toggle="collapse"
                                    data-target="#collapse{{$item->id}}" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <div>
                                        <span>Software: <a class="software-url" href="{{$item->link}}"
                                                target="_blank">{{$item->name}}</a></span>
                                    </div>
                                    <div>
                                        <span>Professor(a): {{$item->teacher_name}}</span>
                                    </div>
                                </div>
                            </h5>
                        </div>
                        <div id="collapse{{$item->id}}" class="collapse" aria-labelledby="heading{{$item->id}}"
                            data-parent="#accordion">
                            <div class="card-body">
                                <div class="my-1">
                                    <div><strong>Sistema Operacional:
                                        </strong>{{$item->os}}</div>
                                </div>
                                <div class="my-1">
                                    <div><strong>Laboratório(s):
                                        </strong>{{$item->labs}}</div>
                                </div class="my-1">
                                <div class="my-1">
                                    <div><strong>Justificativa:</strong></div>
                                    <textarea class="textarea-justify" name="" id="" cols="50" rows="5" disabled>
                                                {{$item->justification}}
                                            </textarea>
                                </div class="my-1">

                                <div class="text-right">
                                    <form class="form-btn" action="{{ url('/aprove') }}" method="GET">
                                        <input type="hidden" name="software-id" value="{{$item->id}}">
                                        <button type="submit" class="btn btn-danger">Reprovar</button>
                                    </form>
                                    <form class="form-btn" class="form-btn" action="{{ url('/aprove') }}"
                                        method="GET">
                                        <input type="hidden" name="software-id" value="{{$item->id}}">
                                        <button type="submit" class="btn btn-success">Aprovar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> @endsection