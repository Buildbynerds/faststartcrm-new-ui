<!-- Created by Ariful Islam at 06/27/2020 - 5:08 AM -->
@extends('layouts.master')
@section('title', 'User Management')
@section('content')

    <div class="row">
        <div class="col-lg-8">
            <div class="pull-left">
                <h2>User Management
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
            </h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-hover table-striped" id="users">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td>
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'id' => 'delete']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

@section('custom-js')
     <script>
          $(document).ready(function() {
            $("#users").DataTable();
        })
     </script>
@endsection
