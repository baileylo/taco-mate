<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <label for="title">Title</label>
    @if ($errors->has('title'))
        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
    @endif
    <input type="text" name="title" class="form-control" id="title" placeholder="Grandma's Apple Pie" value="{{ old('title', $recipe->title) }}">
</div>

<div class="row">
    <div class="col-lg-3">
        <div class="form-group{{ $errors->has('ingredients') ? ' has-error' : '' }}">
            <label for="ingredients">Ingredients</label>
            @if ($errors->has('ingredients'))
                <span class="help-block">
                    <strong>{{ $errors->first('ingredients') }}</strong>
                </span>
            @endif
            <textarea name="ingredients" class="form-control" id="ingredients" rows="5">{{ old('ingredients', $recipe->ingredients) }}</textarea>

        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-group{{ $errors->has('directions') ? ' has-error' : '' }}">
            <label for="directions">Directions</label>
            @if ($errors->has('directions'))
                <span class="help-block">
                    <strong>{{ $errors->first('directions') }}</strong>
                </span>
            @endif
            <textarea name="directions" class="form-control" id="directions" rows="5">{{ old('directions', $recipe->directions) }}</textarea>
        </div>
    </div>
</div>