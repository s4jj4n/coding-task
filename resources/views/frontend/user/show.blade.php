@extends('layouts.frontend.index')

@section('css')
    <style>
        body {
            padding-top: 30px;
        }

        .fa {
            margin-bottom: 10px;
            margin-right: 10px;
        }

        small {
            display: block;
            line-height: 1.428571429;
            color: #999;
        }
    </style>
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive"/>
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <h4>{{ $user[0] }}</h4>
                            <small>
                                <cite title="{{ $user[4] }}">{{ $user[4] }}
                                    <i class="fa fa-map-marker"></i>
                                </cite>
                            </small>
                            <p>
                                <i class="fa fa-envelope"></i>{{ $user[3] }}
                                <br/>
                                <i class="fa fa-venus-mars"></i> {{ $user[1] }}
                                <br/>
                                <i class="fa fa-gift"></i>{{ $user[6] }}

                                <br/>
                                <i class="fa fa-phone"></i>{{ $user[2] }}
                                <br/>
                                <i class="fa fa-flag"></i>{{ $user[5] }}
                                <br/>
                                <i class="fa fa-graduation-cap"></i>{{ $user[7] }}
                                <br/>
                                <i class="fa fa-life-ring"></i>{{ $user[8] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop