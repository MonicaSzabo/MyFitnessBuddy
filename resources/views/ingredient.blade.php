@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Ingredients to Your Meal</div>

                <div class="panel-body">
                    <form action="/meal/{{$meal->id}}" method="post">

                    <h3>Add Ingredients to {{$meal->name}}</h3>
                        {{ csrf_field() }}
                        {{method_field('PUT') }}
                        <div class="form-group row">
                            <label for="ingredientName" class="form-control-label">Ingredient Name:</label>
                            <input name="ingredientName" type="text" class="form-control" placeholder="Ingredient Name" required/>
                            <br />
                            <label for="protein" class="form-control-label">Protein:</label>
                            <input name="protein" type="text" class="form-control" placeholder="Protein/g" required/>
                            <br />
                            <label for="carbs" class="form-control-label">Carbohydrates:</label>
                            <input name="carbs" type="text" class="form-control" placeholder="Carbohydrates/g" required/>
                            <br />
                            <label for="fat" class="form-control-label">Fat:</label>
                            <input name="fat" type="text" class="form-control" placeholder="Fat/g" required/>
                            <br />
                        </div>
                        <input type="submit" value="Add Ingredient" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection