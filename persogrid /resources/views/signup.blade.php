@extends('layout.app')
@section('content')


    <div class="col-lg-6  col-md-offset-3" style="padding-top: 30px" >


        <form action="/signup" method="post" id="loginform">






        <fieldset class="fieldset container-fluid">



            <div class=" container-fluid">


            <div style="padding-bottom: 5%;"><h3 class="text-center">Melden Sie sich hier bei PersoGrid an.</h3>
            </div>
                &nbsp;@if(count($errors)>0)
                    <div class="alert alert-danger  ">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
                {{csrf_field()}}

            <div class="form-row" >
                <div class="form-group col-md-6">

                    {{Form::text('first_name','',['class'=>'text_login','placeholder'=>'Vorname' ,'required'])}}


                </div>
                <div class="form-group col-md-6 ">
                    {{Form::text('last_name','',['class'=>'text_login', 'placeholder'=>'Nachname','required'])}}
                </div>
                <div class="form-group col-md-6 ">
                    {{Form::text('email','',['class'=>'text_login', 'placeholder'=>'E-Mail Adresse','required'])}}


                </div>
                <div class="form-group col-md-6 ">

                    {{ Form::password('password', array('class'=>'text_login','placeholder'=>'Passwort','required')) }}

                </div>
            </div>


            &nbsp;


                <div class="container-fluid text-center  " style="margin-top: -10%" >

                {{Form::submit('Jetzt kostenlos anmelden',['class'=>'btn btn-primary button_anmelden'    ])}}




                    <input type="hidden" name="_token" value="{{Session::token()}}">

                    <div style="padding-top: 20px">
                        <p>Indem du dich anmeldest, stimmst du den PersoGrid Nutzungsbedingungen und Datenschutzrechtlinien zu.</p>
                    </div>

                        </div>


            </div>

            {!! Form::close() !!}
        </fieldset>
    &nbsp;





@endsection





