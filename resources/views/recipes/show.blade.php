@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>{{ $recipe->title }}</h4>
                        <small>Submitted by {{ $recipe->user->name }} on {{ $recipe->created_at->format('M, j Y') }}</small>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <b>Ingredients</b> <br />
                                <ul class="list-unstyled">
                                    @foreach (explode("\n", $recipe->ingredients) as $ingredient)
                                        <li>{{ $ingredient }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <b>Directions</b><br />
                                {{ $recipe->directions }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
