@extends('layout.app')
@section('content')
<div class="col-lg-6  col-md-offset-3" style="padding-top: 30px" >

    <form action="" method="post" id="loginform">

        <fieldset class="fieldset container-fluid">

            <div class=" container-fluid">




            &nbsp;
            &nbsp;@if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                    </ul>
                 </div>
            @endif
            {{csrf_field()}}
            <div class="container-fluid text-center " style="width: 70%; font-size: 150%">


                {{ Form::password('password', array('class'=>'text_login','placeholder'=>'Password','required')) }}

            </div>


            <div class="container-fluid text-center " style="width: 70%; font-size: 150%;padding-top: 10px;">


                {{ Form::password('password_confirmation', array('class'=>'text_login','placeholder'=>'Confim Password','required')) }}

            </div>

            <div  style="padding-top: 10px">
                <div class="container-fluid text-center  "  >

                    {{Form::submit('Update Password',['class'=>'btn btn-primary button_anmelden ' ])}}
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


