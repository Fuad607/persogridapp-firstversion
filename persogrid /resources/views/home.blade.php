@extends('layout.app')
@section('content')

    <style>
        @import url(https://fonts.googleapis.com/css?family=Josefin+Sans:300,400);
        * {
            margin: 0;
            padding: 0;
        }
        html, body {
            height: 100%;
        }
        section {
            position: relative;
            width: 100%;
            height: 100%;
        }

        #section04 { background: url(https://www.nxworld.net/example/css-scroll-down-button/bg04.jpg) center center / cover no-repeat;}
        #section05 { background:transparent;}

        .demo a {
            position: absolute;
            bottom: 20px;
            left: 50%;
            z-index: 2;
            display: inline-block;
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
            color: #FF6A00;
            font : normal 400 20px/1 'Josefin Sans', sans-serif;
            letter-spacing: .1em;
            text-decoration: none;
            transition: opacity .3s;
        }
        .demo a:hover {
            opacity: .5;
        }





        #section05 a {
            padding-top: 14%;
        }
        #section05 a span {
            position: absolute;
            top: 0;
            left: 50%;
            width: 24px;
            height: 24px;
            margin-left: -12px;
            border-left: 2px solid #FF6A00;
            border-bottom: 2px solid #FF6A00;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: sdb05 1.5s infinite;
            animation: sdb05 1.5s infinite;
            box-sizing: border-box;
        }
        @-webkit-keyframes sdb05 {
            0% {
                -webkit-transform: rotate(-45deg) translate(0, 0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                -webkit-transform: rotate(-45deg) translate(-20px, 20px);
                opacity: 0;
            }
        }
        @keyframes sdb05 {
            0% {
                transform: rotate(-45deg) translate(0, 0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: rotate(-45deg) translate(-20px, 20px);
                opacity: 0;
            }
        }





    </style>


    <section id="section05" class="demo">
        @include('inc.showcase')
        <div   class=" container-fluid text-center ">

            {!! Form::open(['url' => 'home/signup']) !!}

            {!! Form::submit('Für Unternehmen',
                                    array('class'=>'btn  business_button btn-lg active  ')) !!}


            &nbsp;&nbsp;
            &nbsp;&nbsp;
            &nbsp;
            &nbsp;

            {!! Form::submit('Für Jobsuchende',
                                           array('class'=>'btn  user_button btn-lg active  ')) !!}


            {!! Form::close() !!}


        </div>

        <a href="#section02"    ><span></span> </a>
    </section>
    <section id="section02" class="demo">
         <a href="#section03"   ><span></span></a>
    </section>
    <section id="section03" class="demo">


        <div class="container-fluid text-center">
            <p>Copyright 2018 &copy; PersoGrid</p>
        </div>

    </section>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>







@endsection

