@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Inventories!</h1>
                    </div>
                    <div class="col-4">
                        <p>Create new Inventories</p>
                        <a href="/inve/create/inve" class="btn btn-primary btn-sm">Add Inventories</a>
                    </div>
                </div>
                @forelse($inve as $inve)
                    <ul>
                        <li><a href="inve/{{ $inve->idInventories  }}">{{ ucfirst($inve->nameInventories) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Inventories available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
