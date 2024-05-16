@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-6">
            <img src="{{$comic->thumb}}" alt="">
        </div>
        <div class="col-6">
            <div class="d-flex justify-content-between"></div>
            <h2>{{$comic->title}}</h2>
            <div class="actions">
                <a href="{{route('comics.edit', $comic)}}"><i class="fas fa-pencil-alt fa-sm fa-fw"></i></a>
                <a href="{{route('comics.index')}}"><i class="fas fa-arrow-left fa-sm fa-fw"></i> Back to comics</a>
            </div>
            <p>{{$comic->description}}</p>
            <hr>
            <div class="metadata">
                <strong>Type:</strong> {{$comic->type}} <br>
                <strong>Series</strong> {{$comic->series}} <br>
                <strong>Price:</strong> {{$comic->price}} <br>
                <strong>Sale date:</strong> {{$comic->sale_date}}
            </div>
        </div>
    </div>
</div>


@endsection