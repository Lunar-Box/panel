@extends('layouts.base')
@section('title', 'Document')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection

@section('style')
    <style>
        .table {
            width: 65%;
            margin: 0 auto;
            margin-top: 150px;
        }
    </style>
@endsection

@section('body')
{{-- {{ dd($servers) }} --}}
<div style="margin-top: 50px;" class="row mr-md-20 mx-auto">
    <div class="col-md-8 offset-md-2 mx-auto">
        <div class="row">
            @foreach($servers as $server)
                <div class="col-sm-6">
                    <div style="border-radius: 5px; margin-bottom: 1.5rem;" class="bg-secondary card">
                        <div style="border-radius: 5px; background-color: #27343B; color: #fff;" class="card-body">
                            <h5 class="card-title">{{ $server->uuid_short }}</h5>
                            <p class="card-text">Deployed&nbsp;{{ $server->created_at->diffForHumans() }}</p>
                            @if($server->memory > 1024)
                                <i class="far fa-memory"></i>&nbsp;{{ $server->memory / 1000}}GB RAM<br>
                            @else
                                <i class="far fa-memory"></i>&nbsp;{{ $server->memory}}MB RAM<br>
                            @endif
                            <i class="far fa-microchip"></i>&nbsp;{{ $server->cpu }}% CPU<br>
                            @if($server->disk > 1024)
                                <i class="far fa-hdd"></i>&nbsp;{{ $server->disk / 1000}}GB DISK<br>
                            @else
                                <i class="far fa-hdd"></i>&nbsp;{{ $server->disk}}MB DISK<br>
                            @endif
                            <i class="far fa-circle text-danger"></i>&nbsp;Offline<br>
                            </p>
                            <a href="/console" class="btn bg-dark btn-secondary">View Server</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
