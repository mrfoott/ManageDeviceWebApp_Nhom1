@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/department" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ($department->nameDepartments) }}</h1>
                <h3>Status Department</h3>
                <a>{{ ($department->statusDepartments) }}</a>
                <hr>
                <a href="./{{ $department->idDepartments  }}/edit" class="btn btn-outline-primary">Edit Department</a>
                <br><br>
                <form id="delete-frm" class="" action="" method ="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Department</button>
                </form>
            </div>
        </div>
    </div>
@endsection
