<!-- Stored in resources/views/child.blade.php -->

@php
$os_list = ["Windows 7", "Windows 8", "Windows 10", "Linux", "MacOS"]
@endphp

@extends('layouts.app')

@extends('layouts.sidebar')

@section('title', 'Dashboard')

@php
class Request
{
public $id;
public $software_name;
public $software_url;
public $software_os;
public $labs;
public $justification;
public $teacher_name;
public $status;

public function __construct($id, $name, $os, $url, $labs, $justification, $t_name, $status) {
$this->id = $id;
$this->software_name = $name;
$this->software_os = $os;
$this->software_url = $url;
$this->labs = $labs;
$this->justification = $justification;
$this->teacher_name = $t_name;
$this->status = $status;
}
}

$r = new Request(1, 'Android Studio', 'Windows 7', 'https://developer.android.com/studio', ['01', '02'], 'Acho
necessário',
'Josceli',
true);
$r1 = new Request(2, 'Pencil Project', 'Windows 7', 'https://pencil.evolus.vn/', ['01', '02'], 'Acho necessário',
'Josceli', false);

$requisitions = [$r, $r1];
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 p-0">
            <h3 style="margin: 5px -15px;">Requisições</h3>
        </div>
        <div class="col-md-8">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div id="accordion" style="width: 700px;">
                    @foreach ($requisitions as $item)
                    @if (true/* !$item->status */)
                    <div class="card mt-2">
                        <div class="card-header" id="heading{{$item->id}}">
                            <h5 class="mb-0">
                                <div style="cursor: pointer;" data-toggle="collapse"
                                    data-target="#collapse{{$item->id}}" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <div>
                                        <span>Software: <a class="software-url" href="{{$item->software_url}}"
                                                target="_blank">{{$item->software_name}}</a></span>
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
                                        </strong>{{$item->software_os}}</div>
                                </div>
                                <div class="my-1">
                                    <div><strong>Laboratório(s):
                                        </strong>{{implode(",", $item->labs)}}</div>
                                </div class="my-1">
                                <div class="my-1">
                                    <div><strong>Justificativa:</strong></div>
                                    <textarea class="textarea-justify" name="" id="" cols="50" rows="5" disabled>
                                                {{$item->justification}}
                                            </textarea>
                                </div class="my-1">

                                <div class="text-right">
                                    <form class="form-btn" action="../server/delete_requisition.php" method="POST">
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <button type="submit" class="btn btn-danger">Reprovar</button>
                                    </form>
                                    <form class="form-btn" class="form-btn" action="../server/aprove_requisition.php"
                                        method="POST">
                                        <input type="hidden" name="id" value="{{$item->id}}">
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