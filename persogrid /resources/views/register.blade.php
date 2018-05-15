@extends('layout.app')
@section('content')
    <div class="col-lg-6  col-md-offset-3" style="padding-top: 30px" >

        {!! Form::open(['url' => 'anmelden/weiter']) !!}

        <fieldset class="fieldset">

            <h4 class="text-center">Füge Sie hier 4 Fragen ein, die der Bewerber beantworten soll.</h4>

                <div class="form-group col-md-7">

                    {{Form::text('name','',['id'=>'text1','placeholder'=>'Frage 1:'])}}


            </div>
            &nbsp;

            <div class="form-group col-md-7">

                {{Form::text('name','',['id'=>'text1','placeholder'=>'Frage 2:'])}}


            </div>

            <div class="form-group col-md-7">

                {{Form::text('name','',['id'=>'text1','placeholder'=>'Frage 3:'])}}


            </div>

            <div class="form-group col-md-7">

                {{Form::text('name','',['id'=>'text1','placeholder'=>'Frage 4:'])}}


            </div>
            <div class="form-group  col-md-12">

                {{Form::submit('weiter >',['class'=>'btn btn-primary' , 'id'=>'weiter_button'])}}


            </div>







    </fieldset>


    {!! Form::close() !!}



@endsection


