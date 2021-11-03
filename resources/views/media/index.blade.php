<!-- Created by Ariful Islam at 06/27/2020 - 5:08 AM -->
@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-10">
            <div class="pull-left">
                <h2>Media Management</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover table-striped" id="medias">
    <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Link</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($medias as $media)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $media->title }}</td>
                <td>{{ url('uploads') }}/{{$media->file}}</td>
                <td><img src="{{ asset('uploads/'.$media->file) }}" style="height: 40px; width: 80px;" alt=""></td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['media.destroy', $media->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger','id'=>'delete']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    <script>
        $(document).ready(function () {
             $("#medias").DataTable();
         });
   </script>
@endsection
