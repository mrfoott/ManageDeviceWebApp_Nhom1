@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cateinve" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ($cateinve->nameCategoryInventories) }}</h1>
                <hr>
                <a href="./{{ $cateinve->idCategoryInventories  }}/edit" class="btn btn-outline-primary">Edit Category Inventories</a>
                <br><br>
                <form id="delete-frm" class="" action="" method ="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Category Inventories</button>
                </form>
            </div>
        </div>
    </div>
@endsection
