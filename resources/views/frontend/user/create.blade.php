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
                <form class="form-horizontal" method="post" action="{{ route('users.store') }}" id="user-form">
                    {!! csrf_field() !!}

                    @include('frontend.user.form')

                </form>
            </div>
        </div>
    </div>

@stop

@section('js')

    <script>
        new Vue({
            el: '#user-form',
            data: {
                name: '',
                gender: '',
                phone: '',
                email: '',
                address: '',
                nationality: '',
                date_of_birth: '',
                education_background: '',
                preferred_mode_of_contact: ''
            },
            computed: {
                userDetailValidation: function () {
                    return {
                        name: !!this.name.trim() && this.name.length > 1,
                        gender: !!this.gender.trim(),
                        phone: !isNaN(this.phone) && !!this.phone.trim(),
                        email: !!this.email.trim() && this.validateEmail(this.email),
                        address: !!this.address.trim(),
                        nationality: !!this.nationality.trim(),
                        date_of_birth: !!this.date_of_birth.trim(),
                        education_background: !!this.education_background.trim(),
                        preferred_mode_of_contact: !!this.preferred_mode_of_contact.trim()
                    }
                },
                isUserDetailValid: function () {
                    var userDetailValidation = this.userDetailValidation;
                    return Object.keys(userDetailValidation).every(function (key) {
                        return userDetailValidation[key];
                    })
                }
            },
            methods: {
                validateEmail: function (email) {
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(email);
                }
            },
            ready: function() {
                $( ".date-picker" ).datepicker({
                    dateFormat: "yy-mm-dd",
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 1
                });
            }
        });
    </script>

@stop
