@extends('layouts.master')
@section('title', 'Create New Permission')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Permission
                    <a class="btn btn-primary" href="{{ route('permissions.index') }}"> Back</a>
                </h2>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-8 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-8 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Guard:</strong>
                {!! Form::text('guard_name', 'web', array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-8 col-sm-12 col-md-8 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
