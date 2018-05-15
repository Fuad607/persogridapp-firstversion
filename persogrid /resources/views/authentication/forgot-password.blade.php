@extends('layout.app')
@section('content')
    <div class="col-lg-6  col-md-offset-3" style="padding-top: 30px" >

        <form action="/forgot-password" method="post" id="loginform">

            <fieldset class="fieldset container-fluid">

                &nbsp;
                &nbsp;@if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif



                {{csrf_field()}}
                <div class="container-fluid text-center " style="width: 70%; font-size: 150%">


                            {{Form::text('email','',['class'=>'text_login','placeholder'=>'Email','required'])}}


                    </div>

                    <div  style="padding-top: 10px">
                        <div class="container-fluid text-center  "  >

                            {{Form::submit('Send Code',['class'=>'btn btn-primary button_anmelden'  ])}}
                        </div>

                         <div class="container-fluid text-center" style="padding-top: 20px">
                            <p>Indem du dich anmeldest, stimmst du den PERSOGRID
                                Nutzungsbedingungenund Datenschutzrechtlinien zu.</p>
                        </div>

                    </div>
                </div>


                {!! Form::close() !!}
            </fieldset>




@endsection


