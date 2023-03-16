@extends('layouts.app')

@section('page-title', $pokemon->name)

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h1>
                        {{ $pokemon->name }}
                    </h1>
                    @dd($pokemon)
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
