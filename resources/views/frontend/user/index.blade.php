@extends('layouts.frontend.index')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <p></p>
            <h1>Coding task for Software Engineer</h1>
            <div class="col-md-12">

                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">All Users</h3>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary btn-create">Create New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                            <tr>
                                <th><em class="fa fa-cog"></em></th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Nationality</th>
                                <th>Date of Birth</th>
                                <th>Education Background</th>
                                <th>Preferred Mode of Contact</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($users) > 0)
                                    @foreach($users as $id => $user)
                                        <tr>
                                            <td align="center">
                                                <a href="{{ route('users.show', $id) }}" class="btn btn-default" title="View Detail">
                                                    <em class="fa fa-eye"></em>
                                                </a>
                                            </td>
                                            <td>{{ $user[0] }}</td>
                                            <td>{{ $user[1] }}</td>
                                            <td>{{ $user[2] }}</td>
                                            <td>{{ $user[3] }}</td>
                                            <td>{{ $user[4] }}</td>
                                            <td>{{ $user[5] }}</td>
                                            <td>{{ $user[6] }}</td>
                                            <td>{{ $user[7] }}</td>
                                            <td>{{ $user[8] }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10" class="text-center">No Users Available.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>
                    <div class="panel-footer">
                        <div class="row">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@stop