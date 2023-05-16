@extends('admin.layout.base')
@section('title', 'Users')
@section('data-page-id', 'adminUsers')

@section('content')
    <div class="category admin_shared">
        <div class="grid-padding-x">
            <div class="cell medium-11">
                <h2>Users</h2> <hr />
            </div>
        </div>

        <div class="grid-x grid-padding-x">
            <div class="small-12 medium-11 cell">
                @if(count($users))
                    <table class="hover unstriped">
                        <tbody>
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th width="70">Role</th>
                            <th>Date Created</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user['username'] }}</td>
                                <td>{{ $user['fullname'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['address'] }}</td>
                                <td>{{ $user['role'] }}</td>
                                <td>{{ $user['added'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $links !!}
                @else
                    <h2>You have not any registered user.</h2>
                @endif
            </div>
        </div>
    </div>
@endsection