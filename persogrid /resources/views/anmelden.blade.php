@extends('layout.app')
@section('content')
     <div class="col-lg-6  col-md-offset-3" style="padding-top: 30px" >

        {!! Form::open(['url' => 'anmelden/weiter']) !!}

<fieldset class="fieldset container-fluid">

    <h4 class="text-center">Geben Sie hier weitere Informationen zu der offenen Stelle ein.</h4>
    <div class="form-row">
        <div class="form-group col-md-6">

            {{Form::text('name','',['id'=>'text1','placeholder'=>'Firma'])}}

        </div>
        <div class="form-group col-md-6">
            {{Form::date('name','',['id'=>'text1', 'placeholder'=>'Datum'])}}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">

            {{Form::text('name','',['id'=>'text1','placeholder'=>'Arbeitsort'])}}

        </div>
        <div class="form-group col-md-6 ">
            {{Form::text('name','',['id'=>'text1', 'placeholder'=>'Arbeitspensum'])}}
        </div>
    </div>

    &nbsp;


<div class="form-group ">
    <p style="margin-left: 20px">Jobbeschreibung bitte hier eingeben</p>

    <div>

        {{Form::textarea('name','',['id'=>'textarea1' ])}}
    </div>

        {{Form::submit('weiter >',['class'=>'weiter_button' ])}}

     </div>
</fieldset>


         {!! Form::close() !!}


 @endsection


