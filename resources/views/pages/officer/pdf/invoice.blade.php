@extends('layouts.app', ['page' => __('Profile Details'), 'pageSlug' => 'download'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="title">{{ __('Agent Information') }}</h3>
                </div>
                <form method="post" autocomplete="off">
                    <div class="card-body">
                    @csrf
                           <!-- detete method -->

                        @include('alerts.success')
                        
                        <div class="form-group">
                            <label><h4>{{ __('Name : ') }}</h4></label>
                            <label><h4>{{$user->name}}</h4></label>
                        </div>

                        <div class="form-group">
                            <label><h4>{{ __('Email address : ') }}</h4></label>
                            <label><h4>{{$user->email}}</h4></label>
                        </div>

                        <div class="form-group">
                            <label><h4>{{ __('Phone No : ') }}</h4></label>
                            <label><h4>{{$user->phone}}</h4></label>
                        </div>

                        <div class="form-group">
                            <label><h4>{{ __('NID No : ') }}</h4></label>
                            <label><h4>{{$user->nid}}</h4></label>
                        </div>

                        <div class="form-group">
                            <label><h4>{{ __('DOB : ') }}</h4></label>
                            <label><h4>{{$user->dob}}</h4></label>
                        </div>

                        <div class="form-group">
                            <label><h4>{{ __('Type : ') }}</h4></label>
                            <label><h4>{{$user->type}}</h4></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
