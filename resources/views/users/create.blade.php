@extends("layouts.app")
@section('content')
    <div class="container m-4">
        {{ Form::open(array('url' => route('user.store'))) }}
        {{Form::label('First Name')}}
        {{Form::text('first_name', 'abhishek first name',['class'=>'form-control my-4'])}}
        {{Form::label('Last Name')}}

        {{Form::text('last_name', 'abhishek last name',['class'=>'form-control'])}}
        <button class="btn btn-primary my-4">Save</button>
        {{ Form::close() }}
    </div>
@endsection