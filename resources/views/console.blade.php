@extends('layouts.base')
@section('title', 'Document')
@section('style')
    <style>
        .consolee {
            background-color: #131920;
            border: 2px solid #1F2933;
            width: 800px;
            height: 700px;
            margin: 0 auto;
            border-radius: 8px;
            margin-top: 35px;
            padding: 3px 5px 1px 15px;
            overflow-y: scroll;
        }
        p {
            color: #AED9FA;
            font-family: 'Lucida Console', sans-serif !important;
            font-size: 14px;
        }
        i {
            color: #AED9FA;
            font-size: 64px;
        }
    </style>
@endsection

@section('body')
    <div style="background-color: rgba(0, 0, 0, 0.3);" class="navbar">
        <ul>

            <li><a href="/server/id/console"><i class="fas fa-terminal"></i>&nbsp;Console</a></li>
            <li><a href="/server/id/file-manager"><i class="fas fa-folder"></i>&nbsp;File Manager</a></li>
            <li><a href="/server/id/startup"><i class="fas fa-play"></i>&nbsp;Startup</a></li>
            <li><a href="/server/id/network"><i class="fas fa-network-wired"></i>&nbsp;Network</a></li>
        </ul>
    </div>

    <div class="consolee">
        <p>{{ $log ?? 'EXITED (0)' }}</p>
    </div>
@endsection
