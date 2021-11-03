@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card ">
                <div class="card-header py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 font-weight-600 mb-0">List of Notificatoin</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table display table-bordered table-striped table-hover custom-table" id="category">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Description</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach(\Illuminate\Support\Facades\Auth::user()->notifications as $notification)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $notification->data['message']}}</td>
                                        <td>{{ App\User::get_user_name($notification->notifiable_id) }}</td>
                                        <td>{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</td>
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
