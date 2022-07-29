@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Department!</h1>
                    </div>
                    <div class="col-4">
                        <p>Create new Department</p>
                        <a href="/department/create/department" class="btn btn-primary btn-sm">Add Department</a>
                    </div>
                </div>
                @forelse($department as $department)
                    <ul>
                        <li><a href="department/{{ $department->idDepartments }}">{{ ucfirst($department->nameDepartments ) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Department available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
