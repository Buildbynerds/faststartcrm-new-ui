@extends('layouts.master')
@section('title', 'Role Management')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Role Management
                    @can('role-create')
                    <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                @endcan
                </h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-hover table-striped" id="roles">
       <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
       </thead>
     <tbody>
        @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                @can('role-edit')
                    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                @endcan
                @can('role-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'id' => 'delete']) !!}
                    {!! Form::close() !!}
                @endcan
            </td>
        </tr>
    @endforeach
     </tbody>
    </table>


    {!! $roles->render() !!}

@endsection

@section('custom-js')
     <script>
          $(document).ready(function() {
            $("#roles").DataTable();
        })
     </script>
@endsection
