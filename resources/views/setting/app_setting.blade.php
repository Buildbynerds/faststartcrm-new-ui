@extends('layouts.master')

@section('title', 'Edit User')

@section('content')
      <div class="card">
          <div class="card-header">
              <h4>App Settings</h4>
          </div>
          <div class="card-body">
            {!! Form::open(['route' => ['settings.update', $setting->id], 'method' => 'PUT', 'files' => true]) !!}
        
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="websiteName">Website Title</label>   
                </div>
                <div class="col-md-8">
                    {!! Form::text('website_title', $setting->website_title, array('class' => 'form-control')) !!}
                </div>
            </div>
                
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="sidebar_title">Sidebar Title</label>   
                </div>
                <div class="col-md-8">
                    {!! Form::text('sidebar_title', $setting->sidebar_title, array('class' => 'form-control')) !!}
                </div>
            </div>
                
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="email">Email</label>   
                </div>
                <div class="col-md-8">
                    {!! Form::email('email', $setting->email, array('class' => 'form-control')) !!}
                </div>
            </div>
                
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="phone">Phone</label>   
                </div>
                <div class="col-md-8">
                    {!! Form::text('phone', $setting->phone, array('class' => 'form-control')) !!}
                </div>
            </div>
          
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="mobile">Mobile</label>   
                </div>
                <div class="col-md-8">
                    {!! Form::text('mobile', $setting->mobile, array('class' => 'form-control')) !!}
                </div>
            </div>
          
            <div class="row">
                <div class="col-md-2">
                    <label for="favicon">Fav Icon Preview</label>
                </div>
                <div class="col-md-2">
                    <img src="{{ $setting->fav_icon }}" style="max-height: 120px; max-width: 220px" alt="">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-2">
                    <label for="fav_icon">Fav Icon</label>   
                </div>
                <div class="col-md-8">
                    {!! Form::file('fav_icon', array('class' => 'form-control')) !!}

                       @if($errors->has('fav_icon'))
                       <strong class="text-danger">
                                {{ $errors->first('fav_icon') }}
                       </strong>
                @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label for="favicon">Logo Preview</label>
                </div>
                <div class="col-md-2">
                    <img src="{{ $setting->logo }}" style="max-height: 180px; max-width: 220px" alt="">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-2">
                    <label for="logo">Logo</label>   
                </div>
                <div class="col-md-8">
                    {!! Form::file('logo', array('class' => 'form-control')) !!}

                       @if($errors->has('logo'))
                       <strong class="text-danger">
                                {{ $errors->first('logo') }}
                       </strong>
                @endif
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-2">
                    <label for="footer_text">Footer Text</label>   
                </div>
                <div class="col-md-8">
                    {!! Form::text('footer_text', $setting->footer_text, array('class' => 'form-control')) !!}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-2">
                    <label for="current_version">Version</label>   
                </div>
                <div class="col-md-8">
                    {!! Form::text('current_version', $setting->current_version, array('class' => 'form-control')) !!}
                </div>
            </div>
          
                <div class="col-xs-8 col-sm-12 col-md-8 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
          </div>
      </div>
@endsection
