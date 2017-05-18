@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Recipe &mdash; {{ $recipe->title }}</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ route('recipes.update', $recipe) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            @include('recipes.form', ['recipe' => $recipe])
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Update Recipe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
