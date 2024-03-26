@extends('layout.app')
@section('page-title', 'Add Comic')

@section('main-content')
<main class="create-comic">

<div class="container my-3">
    <form action="{{route('comics.update', $comic)}}" method="post" class="row g-3">
    @csrf
    @method('PATCH')
        <div class="col-6">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$comic->title}}">
        </div>
        <div class="col-6">
            <label for="image" class="form-label">Url Image</label>
            <input type="url" name="image" id="image" class="form-control" value="{{$comic->image}}">
        </div>
        <div class="col-6">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" step=".01" class="form-control" value="{{$comic->price}}">
        </div>
        <div class="col-6">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" value="{{$comic->series}}">
        </div>
        <div class="col-6">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control" value="{{$comic->sale_date}}">
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" id="description" class="form-control" value="{{$comic->description}}"></textarea>
        </div>
        <button class="btn btn-warning">Submit comic</button>
    </form>
</div>

</main>
@endsection