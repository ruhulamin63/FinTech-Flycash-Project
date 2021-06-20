@extends('layouts.app', ['page' => __('Agent Profile'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="title">{{ __('Agent Profile') }}</h4>
                </div>
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ __('Rohim') }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('Email address') }}</label>
                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ __('abc@gmail.com') }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>

                            <div class="form-group">
                                <label>{{ __('Phone Number') }}</label>
                                <input type="text" name="phone" class="form-control" placeholder="{{ __('Phone number') }}" value="{{ __('+880****') }}">
                                @include('alerts.feedback', ['field' => 'phone'])
                            </div>

                            <div class="form-group">
                                <label>{{ __('NID') }}</label>
                                <input type="text" name="nid" class="form-control" placeholder="{{ __('NID Number') }}" value="{{ __('1998*****') }}">
                                @include('alerts.feedback', ['field' => 'nid'])
                            </div>

                            <div class="form-group">
                                <label>{{ __('DOB') }}</label>
                                <input type="date" name="dob" class="form-control" placeholder="{{ __('Date of Birth') }}" value="{{ __('5/4/1998') }}">
                                @include('alerts.feedback', ['field' => 'nid'])
                            </div>

                            <div class="form-group">
                                <label>{{ __('Type') }}</label>
                                <input type="text" name="type" class="form-control" placeholder="{{ __('Type') }}" value="{{ __('Agent') }}">
                                @include('alerts.feedback', ['field' => 'nid'])
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{ asset('black') }}/img/DP.png" alt="">
                                <h5 class="title">{{ __('Agent') }}</h5>
                            </a>
                            <p class="description">
                                {{ __('Agent Profile') }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{ __('Hello Everyone, Always "Never Give Up"...') }}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
