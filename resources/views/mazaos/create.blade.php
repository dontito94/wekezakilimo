@extends('layouts.app')
 
@section('content')
 
    <h2>Add a game</h2>
 
    <form method="post" action="/mazaos" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
                <input name="title" type="text" class="form-control" id="titleid" placeholder="Title">
            </div>
        </div>
        <div class="form-group row">
            <label for="descriptionid" class="col-sm-3 col-form-label">description</label>
            <div class="col-sm-9">
                <input name="description" type="text" class="form-control" id="descriptionid"
                       placeholder="description">
            </div>
        </div>
        <div class="form-group row">
            <label for="priceid" class="col-sm-3 col-form-label">price</label>
            <div class="col-sm-9">
                <input name="price" type="number" class="form-control" id="priceid"
                       placeholder="price">
            </div>
        </div>
        <div class="form-group row">
            <label for="gameimageid" class="col-sm-3 col-form-label">Image</label>
            <div class="col-sm-9">
                <input name="image" type="file" id="gameimageid" class="custom-file-input">
                <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Game</button>
            </div>
        </div>
    </form>
 
@endsection