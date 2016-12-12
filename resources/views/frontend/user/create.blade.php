@extends('layouts.frontend.index')

@section('content')

    <div class="container">
        <div class="row main">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    <h1 class="title">User Details</h1>
                    <hr />
                </div>
            </div>
            <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="{{ route('users.store') }}">
                    {!! csrf_field() !!}

                    @include('frontend.user.form')

                </form>
            </div>
        </div>
    </div>

@stop
