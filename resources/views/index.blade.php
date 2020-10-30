@extends('layouts.base')
@section('title', 'Document')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection

@section('style')
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <style>
        .item1 {
            grid-area: top;
            background-color: rgba(0, 0, 0, 0);
            font-size: 32px;
            margin-top: -100px;
        }

        .item2 {
            grid-area: left;
            margin-top: -150px;
        }

        .item5 {
            grid-area: left;
            margin-top: -170px !important;
            width: 65%;
            margin: 0 auto;
        }

        .item3 {
            grid-area: right;
            margin-top: -150px;
        }

        .grid-container {
            position: relative;
            margin-top: 50px !important;
            display: grid;
            grid-template-areas:
                'top top top top top top'
                'left left left right right right'
                'left left left right right right';
            grid-gap: 10px;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 15px;
            height: 600px;
            width: 60%;
            margin: 0 auto;
            grid-auto-columns: 1fr;
            grid-auto-flow: column;
            align-items: center;
        }
        .container2 {
            grid-template-areas:
                'top top top top top top'
                'left left left left left left '
                'left left left left left left ' !important;
        }
        p {
            color: white;
            font-size: 18px;
        }

        h1 {
            color: white;
            font-size: 32px;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .top-txt {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: -515px !important;
            width: 100%;
            margin: 0 auto;
        }

        .intro {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 35%;
            margin: 0 auto;
            background-color: black;
        }

        .grid-container > div {
            text-align: center;
            padding: 20px;
            color: white;
            background-color:rgba(0, 0, 0, 0);
        }
        .a {
            display: block;
            margin: 0 auto;
            transition: all 0.16s ease-in;
            border-radius: 5px;
            border: rgba(0, 0, 0, 0.31) solid 1.75px;
            padding: 8px;
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
            font-size: 18px;
            cursor: pointer;
            width: 75%;
        }
        .a:hover {
            transition: all 0.16s ease-in;
            background-color: rgba(0, 0, 0, 0.7);
            border: rgba(0, 0, 0, 0.7) solid 1.75px;
            color: white;
        }
        .down {
            position: absolute;
            right: 0;
            bottom: 0;
            padding: 0px 12.5px 5px 0px;
            cursor: pointer;
        }
        .fa-arrow-left, .fa-arrow-right {
            font-size: 24px;
            color: white;
        }
        .fab {
            font-size: 64px;
            color: white;
        }
        .langs > .lang {
            float: right;
            cursor: pointer;
        }
        .lang > p {
            font-weight: 500;
        }
        .langs {
            display: flex;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
        }
        .onClick {
            color:rgba(255, 255, 255, 0.3)
        }
        .onClickMargin {
            margin-left: 35px;
        }
    </style>
@endsection

@section('body')

    <div style="display: show;" id="main" class="border-rad grid-container">
        <div class="item1">Lunar Box</div>
        <div style="text-align: center;" class="item2">Introducing Lunar Box! Lunar Box is an open source docker container management tool that allows you to: start, stop, restart, kill your server, also allows you to upload files, view console, + more all from a nice user interface!</div>
        <div class="item3">
            <a class="a" href="/register">Register!</a>
            <br>
            <a id="toggle" class="a">Deploy a box!</a>
        </div>
    </div>
    <div style="display: none;" id="deploy" class="border-rad grid-container container2">
        <div class="item1">Deploy a new box!</div>
        <div class="item5">
            <div class='langs'>
                <div style="display: none;" id="pythonv">
                    <h1>v3.6</h1><h1>v3.7</h1><h1>v3.8</h1>
                </div>
                <div style="margin-right: 35px;" class="lang nodejs"><i id="nodejs" class="fab fa-node-js"></i><br><p id="nodejst">Node.js</p></div>
                <div class="lang python"><i id="python" class="fab fa-python"></i><br><p id="pythont">Python</p></div>
                {{-- <i class="fab fa-java"></i>
                <i class="fab fa-php"></i>
                <i class="fab fa-html5"></i>
                <i class="fab fa-ubuntu"></i> --}}
            <div style="display: none;" id="nodejsv">
                <h1>v10</h1><h1>v12</h1><h1>v14</h1>
            </div>
        </div>

    <script>
        $( "#toggle" ).click(function () {
            $( "#main" ).toggle();
            $( "#deploy" ).toggle();
        });
        $( ".nodejs" ).click(function () {
            $( "#nodejs" ).toggleClass("onClick");
            $( "#nodejst" ).toggleClass("onClick");
            $( ".python" ).toggle();
            $( "#nodejsv" ).toggle();
        });
        $( ".python" ).click(function () {
            $( "#python" ).toggleClass("onClick");
            $( "#pythont" ).toggleClass("onClick");
            $( ".nodejs" ).toggle();
            $( "#pythonv" ).toggle();
            $( ".python" ).toggleClass("onClickMargin");
        });
    </script>

@endsection
