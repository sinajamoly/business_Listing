@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-primary h2">Create Listing<a href="/dashboard" class="btn btn-secondary m-4">Go Back</a></span></div>

                <div class="card-body">
                    {!! Form::open(['action' => 'ListingsController@store','method'=>'POST']) !!}

                        <div class="form-control m-1">
                            {{Form::label('name', 'Name', ['class' => 'awesome text-primary h4'])}}
                            {{Form::text('name', '',['class' => 'form-control','placeholder'=>'Your Name'])}}
                        </div>

                        <div class="form-control m-1">
                            {{Form::label('email', 'E-Mail Address', ['class' => 'awesome text-primary h4'])}}
                            {{Form::email('email', '', ['class' => 'form-control','placeholder'=>'example@gmail.com'])}}
                        </div>

                        <div class="form-control m-1">
                            {{Form::label('phone', 'Phone', ['class' => 'awesome text-primary h4'])}}
                            {{Form::text('phone', '',['class' => 'form-control','placeholder'=>'01232xxxx'])}}
                        </div>

                        <div class="form-control m-1">
                            {{Form::label('website', 'Website', ['class' => 'awesome text-primary h4'])}}
                            {{Form::text('website', '',['class' => 'form-control','placeholder'=>'www.something.com'])}}
                        </div>

                        <div class="form-control m-1">
                            {{Form::label('address', 'Address', ['class' => 'awesome text-primary h4'])}}
                            {{Form::text('address', '',['class' => 'form-control','placeholder'=>'Your Address'])}}
                        </div>

                        <div class="form-control m-1">
                            {{Form::label('bio', 'Bio', ['class' => 'awesome text-primary h4'])}}
                            {{Form::textarea('bio', '',['class' => 'form-control','placeholder'=>'Some Biography'])}}
                        </div>

                        <div class="container m-2">
                            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection