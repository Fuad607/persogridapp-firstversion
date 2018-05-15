@extends('layout.app')
@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <form action="/createjob"   id="msform">
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Create Job</li>
            <li>Questions</li>

        </ul>
        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">Offene Stelle erstellen</h2>
            <h4 class="text-center">Geben Sie hier weitere Informationen zu der offenen Stelle ein.</h4>
            <div class="form-row">
                <div class="form-group col-md-6">

                    {{Form::text('firma','',['id'=>'text1','placeholder'=>'Firma'])}}

                </div>
                <div class="form-group col-md-6">
                    {{Form::date('date','',['id'=>'text1', 'placeholder'=>'Datum'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">

                    {{Form::text('arbeitsort','',['id'=>'text1','placeholder'=>'Arbeitsort'])}}

                </div>
                <div class="form-group col-md-6 ">
                    {{Form::text('arbeitspensum','',['id'=>'text1', 'placeholder'=>'Arbeitspensum'])}}
                </div>
            </div>



            <div class="form-rom">
                <div  >
                    <a data-toggle="collapse" data-target="#demo" style="float: right">Add more skills</a>
                </div>

                <div id="demo" class="collapse form-group col-md-12">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                        <input id="skills" type="text" class="form-control" name="skills" placeholder="Skills" style="width: 50%;  border-radius: 1px;">
                    </div>
                </div>



            </div>


            &nbsp;
            &nbsp;



            <div class="form-group ">
                <p style="margin-left: 20px">Jobbeschreibung bitte hier eingeben</p>

                <div>

                    {{Form::textarea('name','',[ 'class'=>'textarea1' ])}}
                </div>



            </div>


            {{Form::button('Weiter',['class'=>'  action-button next  '  ])}}


        </fieldset>
        <fieldset>

            <h4 class="fs-title text-center">Fügen Sie hier drei Fragen ein,</h4>
            <h4 class="fs-title text-center"> die der Bewerber per Video beantworten soll.</h4>


            {{Form::text('question1','',['placeholder'=>'Können Sie sich kurz vorstellen?' , 'style'=>'width:70%;margin-bottom:17px;','class'=>'col-sm-5 col-sm-offset-2  '])}}
            {{Form::text('question2','',['placeholder'=>'Warum möchten Sie bei uns arbeiten?' , 'style'=>'width:70%;margin-bottom:17px;','class'=>'col-sm-5 col-sm-offset-2  '])}}
            {{Form::text('question3','',['placeholder'=>'Welchen Mehrwert bieten Sie unserem Unternehmen?' , 'style'=>'width:70%;margin-bottom:17px;','class'=>'col-sm-5 col-sm-offset-2 '])}}



            <input type="button" name="previous" class="previous zuruck_button  text-center'" value="< Zurück"  />
            <input type="submit"  class="  action-button  text-center" data-toggle="modal" data-target="#myModal" value="Match finden >" />




        </fieldset>

        </div>
        </div>










        {!! Form::close() !!}


        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>


        <script src="{{asset('js/index.js')}}" >


        </script>


@endsection
