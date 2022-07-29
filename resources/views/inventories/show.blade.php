@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/inve" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ($inve->nameInventories) }}</h1>
                <h2>User Name:</h2>
                <h3>{{ $inve->nameUsers }}</h3>
                <hr>
                <a href="./{{ $inve->idInventories }}/edit" class="btn btn-outline-primary">Edit Inventories</a>
                <br><br>
                <form id="delete-frm" class="" action="" method ="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Inventories</button>
                </form>
            </div>
        </div>
    </div>
@endsection
