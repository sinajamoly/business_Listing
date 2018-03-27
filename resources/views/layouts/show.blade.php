@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-primary h2">{{$listing->name}}<span><a href="/dashboard" class="btn btn-secondary m-4">Go Back</a></span></div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Address: {{$listing->address}}
                        </li>
                        <li class="list-group-item">
                            Website: {{$listing->website}}
                        </li>
                        <li class="list-group-item">
                            Email: {{$listing->email}}
                        </li>
                        <li class="list-group-item">
                            Phone: {{$listing->phone}}
                        </li>
                        <li class="list-group-item">
                            Address: {{$listing->address}}
                        </li>
                    </ul>
                    <hr>
                    <div class="well">
                        {{$listing->bio}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection