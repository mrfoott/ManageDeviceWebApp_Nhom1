@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Category Inventories!</h1>
                    </div>
                    <div class="col-4">
                        <p>Create new Role</p>
                        <a href="/cateinve/create/cateinve" class="btn btn-primary btn-sm">Add Category Inventories</a>
                    </div>
                </div>
                @forelse($cateinve as $cateinve)
                    <ul>
                        <li><a href="cateinve/{{ $cateinve->idCategoryInventories  }}">{{ ucfirst($cateinve->nameCategoryInventories) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Category Inventories available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
