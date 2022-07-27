@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/role" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ($role->descriptionRoles) }}</h1>
                <hr>
                <a href="./{{ $role->idRoles }}/edit" class="btn btn-outline-primary">Edit Role</a>
                <br><br>
                <form id="delete-frm" class="" action="" method ="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Role</button>
                </form>
            </div>
        </div>
    </div>
@endsection
