@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-primary h2">Edit Listing<span><a href="/dashboard" class="btn btn-secondary m-4">Go Back</a></span></div>

                <div class="card-body">

                    {!! Form::open(['action' => ['ListingsController@update',$listing->id],'method'=>'PUT']) !!}

                    <div class="form-control m-1">
                        {{Form::label('name', 'Name', ['class' => 'awesome text-primary h4'])}}
                        {{Form::text('name', $listing->name,['class' => 'form-control'])}}
                    </div>

                    <div class="form-control m-1">
                        {{Form::label('email', 'E-Mail Address', ['class' => 'awesome text-primary h4'])}}
                        {{Form::email('email', $listing->email, ['class' => 'form-control',])}}
                    </div>

                    <div class="form-control m-1">
                        {{Form::label('phone', 'Phone', ['class' => 'awesome text-primary h4'])}}
                        {{Form::text('phone', $listing->phone,['class' => 'form-control'])}}
                    </div>

                    <div class="form-control m-1">
                        {{Form::label('website', 'Website', ['class' => 'awesome text-primary h4'])}}
                        {{Form::text('website', $listing->website,['class' => 'form-control'])}}
                    </div>

                    <div class="form-control m-1">
                        {{Form::label('address', 'Address', ['class' => 'awesome text-primary h4'])}}
                        {{Form::text('address', $listing->address,['class' => 'form-control'])}}
                    </div>

                    <div class="form-control m-1">
                        {{Form::label('bio', 'Bio', ['class' => 'awesome text-primary h4'])}}
                        {{Form::textarea('bio', $listing->bio,['class' => 'form-control'])}}
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