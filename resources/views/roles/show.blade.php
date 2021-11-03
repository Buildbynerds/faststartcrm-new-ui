@extends('layouts.master')
@section('title', 'Show Role')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Role
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </h2>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-8 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
        </div>
        <div class="col-xs-8 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Permissions:</strong>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label label-success">{{ $v->name }},</label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
