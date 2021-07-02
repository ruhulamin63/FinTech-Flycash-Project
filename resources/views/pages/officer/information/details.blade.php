@extends('layouts.app', ['page' => __('Profile Details'), 'pageSlug' => 'details'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="title">{{ __('Profile Details') }}</h3>
                    <div class="card-footer">
                      <a href="{{route('information_index')}}">Back</a>
                    </div>
                </div>
                <form method="#" autocomplete="off">
                    <div class="card-body">
                            @csrf
                           <!-- detete method -->
                            
                            <div class="form-group">
                                <label><h3>{{ __('Name : ') }}</h3></label>
                                <label><h2>{{$user->name}}</h2></label>
                            </div>

                            <div class="form-group">
                                <label><h3>{{ __('Email address : ') }}</h3></label>
                                <label><h2>{{$user->email}}</h2></label>
                            </div>

                            <div class="form-group">
                                <label><h3>{{ __('Phone No : ') }}</h3></label>
                                <label><h2>{{$user->phone}}</h2></label>
                            </div>

                            <div class="form-group">
                                <label><h3>{{ __('NID No : ') }}</h3></label>
                                <label><h2>{{$user->nid}}</h2></label>
                            </div>

                            <div class="form-group">
                                <label><h3>{{ __('DOB : ') }}</h3></label>
                                <label><h2>{{$user->dob}}</h2></label>
                            </div>

                            <div class="form-group">
                                <label><h3>{{ __('Type : ') }}</h3></label>
                                <label><h2>{{$user->type}}</h2></label>
                            </div>
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
                                <img class="avatar" src="{{ asset('black') }}/img/anime3.png" alt="">
                                <h5 class="title">{{ $user->name }}</h5>
                            </a>
                            <p class="description">
                                {{ __('Profile') }}
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