@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Users!</h1>
                    </div>
                    <div class="col-4">
                        <p>Create new Role</p>
                        <a href="/user/create/user" class="btn btn-primary btn-sm">Add User</a>
                    </div>
                </div>
                @forelse($users as $users)
                    <ul>
                        <li><a href="user/{{ $users->idUsers }}">{{ ucfirst($user->nameUsers) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Users available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
