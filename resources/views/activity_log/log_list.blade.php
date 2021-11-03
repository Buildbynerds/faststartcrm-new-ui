@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card ">
                <div class="card-header py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 font-weight-600 mb-0">Activity Logs</h6>
                        </div>
                        <div class="text-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table display table-bordered table-striped table-hover custom-table" id="category">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Feature</th>
                                    <th>Action</th>
                                    <th>Added By</th>
                                    {{-- <th>Role</th> --}}
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($logs as $log)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $log->log_name }}</td>
                                        <td>{{ $log->description}}</td>
                                        <td>{{ \App\User::get_user_name($log->causer_id) }}</td>
                                        {{-- <td>
                                            @if(!empty(auth()->user()->getRoleNames()))
                                                @foreach (auth()->user()->getRoleNames() as $role)
                                                   {{ $role }} 
                                                @endforeach
                                            @endif
                                        </td> --}}
                                        <td>{{ \Carbon\Carbon::parse($log->created_at)->diffForHumans() }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('custom-js')
    <script>
        $(document).ready(function() {
            $("#category").DataTable();
        });
    </script>
@endsection
