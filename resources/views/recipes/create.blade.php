@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Recipe</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ route('recipes.store') }}">
                            {{ csrf_field() }}
                            @include('recipes.form', ['recipe' => new \App\Recipe])
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Add Recipe
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
