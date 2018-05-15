@extends('layout.app')
@section('content')
    <div class="col-lg-6  col-md-offset-3" style="padding-top: 30px" >

        <form action="/login" method="post" id="loginform">

            <fieldset class="fieldset container-fluid">

                <div class=" container-fluid">


                    <div style="margin-bottom: -2%;"><h3 class="text-center">Willkommen zurück!</h3>

                    </div>
                    <p>Loggen Sie sich bei PersoGrid ein.</p>

                &nbsp;
                &nbsp;@if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif
                &nbsp;@if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                    {{csrf_field()}}

                <div class="form-group ">
                    <div class="form-row">
                        <div class="form-group col-md-6">

                            {{Form::text('email','',['class'=>'text_login','placeholder'=>'E-Mail Adresse','required'])}}

                        </div>
                        <div class="form-group col-md-6 ">

                            {{ Form::password('password', array('class'=>'text_login','placeholder'=>'Passwort','required')) }}
                        </div>
                    </div>


                    <div  style="padding-bottom: 10px">
                        <div class="container-fluid text-center  "  >

                            {{Form::submit('Jetzt einloggen',['class'=>'btn   button_anmelden'  ])}}
                           </div>


                </div>
                    <a href="/signup" style="margin-top: 40%;">Hier kostenlos anmelden.</a>

                    <div>


                        <a href="/forgot-password" style="margin-top: 40%;">Passwort vergessen?</a>

                    </div>

                {!! Form::close() !!}
            </fieldset>




@endsection


