@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create a Meal</div>

                <div class="panel-body">
                    <form action="/meal/" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="form-control-label">Name:</label>
                            <input name="name" type="text" class="form-control" placeholder="Meal Name" required/>
                            <br />
                        </div>
                        <input type="submit" value="Add Meal" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection