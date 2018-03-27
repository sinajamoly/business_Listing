@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="mr-auto"><a href="/listings/create" class="btn btn-primary">Create</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>you Listings</h3>
                    @if(count($listings))
                        <table>
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td><a href="listings/{{$listing->id}}/edit" class="btn btn-success">Edit</a></td>
                                    <td>{!! Form::open(['action' => ['ListingsController@destroy',$listing->id],'method'=>'DELETE']) !!}
                                        <button class="btn btn-warning">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
