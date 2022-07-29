@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>Project 2</p>
                <br>
                <a href="/role" class="btn btn-outline-primary">Show Roles</a>
                <br>
                <br>
                <a href="/department" class="btn btn-outline-primary">Show Departments</a>
                <br>
                <br>
                <a href="/cateinve" class="btn btn-outline-primary">Show Category Inventories</a>
                <br>
                <br>
                <a href="/user" class="btn btn-outline-primary">Show Users</a>
                <br>
                <br>
                <a href="/inve" class="btn btn-outline-primary">Show Inventories</a>
                <br>
                <br>
                <a href="/ticket" class="btn btn-outline-primary">Show Tickets</a>
            </div>
        </div>
    </div>
@endsection
