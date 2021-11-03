@extends('layouts.master')

@section('title', 'Permission Management')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Permission Management
                    @can('permissions-create')
                    <a class="btn btn-success" href="{{ route('permissions.create') }}"> Create New Permission</a>
                  @endcan
                </h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-hover table-striped" id="permissons">
       <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
       </thead>
      <tbody>
        @foreach ($permissions as $key => $permission)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $permission->name }}</td>
            <td>

                @can('permissions-edit')
                    <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
                @endcan
                @can('permissions-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'id' => 'delete']) !!}
                    {!! Form::close() !!}
                @endcan
            </td>
        </tr>
    @endforeach
      </tbody>
    </table>

    {{-- {!! $permissions->links() !!} --}}

@endsection

@section('custom-js')
     <script>
          $(document).ready(function() {
            $("#permissons").DataTable();
        })
     </script>
@endsection
