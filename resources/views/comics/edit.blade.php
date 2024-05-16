@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Add a new Comic</h1>

        @include('partials.validation-errors')

        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title </label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelper" value="{{ old('title', $comic->title) }}" />
                <small id="titleHelper" class="form-text text-muted">Type a title for the current Comic</small>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="6">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <img src="{{ old('thumb', $comic->thumb) }}" width="50" alt="">
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="thumbHelper" value="{{ old('thumb', $comic->thumb) }}" />
                <small id="thumbHelper" class="form-text text-muted">Type an image URL for the current Comic </small>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price </label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="priceHelper" value="{{ old('price', $comic->price) }}" />
                <small id="priceHelper" class="form-text text-muted">Type a price for the current Comic </small>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series </label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="seriesHelper" value="{{ old('series', $comic->series) }}" />
                <small id="seriesHelper" class="form-text text-muted">Type a series for the current Comic pack </small>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}"></input>
                <small id="sale_dateHelper" class="form-text text-muted">Type a sale date for the current Comic </small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    value="{{ old('type', $comic->type) }}"></input>
                <small id="typeHelper" class="form-text text-muted">Type a type for the current Comic </small>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">
                Update
            </button>



        </form>

    </div>
@endsection
