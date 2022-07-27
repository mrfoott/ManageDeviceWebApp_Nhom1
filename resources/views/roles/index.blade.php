@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Roles!</h1>
                    </div>
                    <div class="col-4">
                        <p>Create new Role</p>
                        <a href="/role/create/role" class="btn btn-primary btn-sm">Add Role</a>
                    </div>
                </div>
                @forelse($roles as $role)
                    <ul>
                        <li><a href="role/{{ $role->idRoles }}">{{ ucfirst($role->descriptionRoles) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Roles available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
