@extends('layouts.app')

@section('content')

    {{-- <h1>Form</h1> --}}

    {{-- <form action="/thank" method="POST">
    

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text">
        <button type="submit">Submit</button>
    </div>
    
    </form> --}}


    {!! Form::open(['action' => 'FormController@store', 'method' => 'POST' ]) !!}
    
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name','',['class'=>'form-control col-md-4','placeholder'=>'Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email'])}}
    </div>

    <div class="form-group">
        {{Form::label('phone', 'Phone')}}
        {{Form::text('phone','',['class'=>'form-control','placeholder'=>'Phone'])}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
