@extends('layout.app')
@section('content')


    <div   class="text-center ">



        {!! Form::open(array('rout' => 'queries.search', 'class'=>'form navbar-form navbar-center searchform')) !!}
        {!! Form::text('search', null,
                               array('required',
                                    'class'=>'form-control searchBox',
                                    'placeholder'=>'Jobtitel eingeben','id'=>'search_text')) !!}


        {!! Form::submit('Match finden!',
                                       array('class'=>'btn  search_button btn-lg active')) !!}
        {!! Form::close() !!}


    </div>


@endsection
