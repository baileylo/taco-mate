@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Recipes</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            @foreach (Auth::user()->recipes as $recipe)
                                <td><a href="{{ route('recipes.show', $recipe) }}">{{ $recipe->title }}</a></td>
                                <td class="text-right">
                                    <a href="{{ route('recipes.edit', $recipe) }}" class="btn-info btn-sm" title="Edit Recipe"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="{{ route('recipes.destroy', $recipe) }}" class="recipe-delete btn-danger btn-sm" title="Delete Recipe"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            @endforeach
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js-block')
$('.recipe-delete').on('click', function(e) {
    e.preventDefault();
    if (confirm('Are you sure you want to delete this recipe?')) {
        $(this).parents('tr').remove();
        $.ajax($(this).attr('href'), {
            "headers": {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            "method": "DELETE",
        });
    }
});
@endsection