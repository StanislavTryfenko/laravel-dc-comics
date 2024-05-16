@extends('layouts.app')


@section('content')


<div class="container">
    <h1>Add a new Comic</h1>


    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title </label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper" placeholder="Avengers" />
            <small id="titleHelper" class="form-text text-muted">Type a title for the current Comic</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper" placeholder="https://" />
            <small id="thumbHelper" class="form-text text-muted">Type an image URL for the current Comic </small>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price </label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper" placeholder="5.99" />
            <small id="priceHelper" class="form-text text-muted">Type a price for the current Comic </small>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series </label>
            <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper" placeholder="Avengers" />
            <small id="seriesHelper" class="form-text text-muted">Type a series for the current Comic pack </small>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date" ></input>
            <small id="sale_dateHelper" class="form-text text-muted">Type a sale date for the current Comic </small>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input class="form-control" name="type" id="type" ></input>
            <small id="typeHelper" class="form-text text-muted">Type a type for the current Comic </small>
        </div>


        <button type="submit" class="btn btn-primary">
            Create
        </button>



    </form>

</div>

@endsection