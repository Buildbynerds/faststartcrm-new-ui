@extends('layouts.master')

@section('title', 'Show User')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show User
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </h2>
            </div>          
        </div>
    </div>


    <div class="row">
        <div class="col-xs-8 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-8 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-8 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Roles:</strong>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
