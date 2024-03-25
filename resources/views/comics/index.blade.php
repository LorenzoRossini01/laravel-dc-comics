@extends('layout.app')
@section('page-title', 'comics')


@section('main-content')
<main class="comics">

    <div class="container d-flex flex-column align-items-center">
        <div class='section-title'>
            <h3>current series</h3>
        </div>
        <div class="row g-3">
            @foreach($comics as $index => $comic)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card">
                    <a href="{{route('comics.show', $comic)}}">
                        <div class="card-img">
                            <img src="{{$comic['image']}}" alt="">
                        </div>
                        <div class="card-title">{{$comic['series']}}</div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <!-- <div class="btn btn-primary">load more</div> -->
    </div>
    <div class="container d-flex justify-content-between align-items-center">
        {{$comics->links()}}
        <a class="btn btn-warning" href="{{route('comics.create')}}">Add comic</a>
    </div>
</main>

@endsection