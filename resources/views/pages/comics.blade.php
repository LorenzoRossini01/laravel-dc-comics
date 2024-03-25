@extends('layout.app')
@section('page-title', 'comics')


@section('main-content')
<main class="comics">

    <div class="container d-flex flex-column align-items-center">
        <div class='section-title'>
            <h3>current series</h3>
        </div>
        <div class="row g-2">
            @foreach($comics as $index => $comic)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card">
                    <a href="{{route('comicDetails', ['index'=>$index, 'title' => $comic['title']])}}">
                        <div class="card-img">
                            <img src="{{$comic['thumb']}}" alt="">
                        </div>
                        <div class="card-title">{{$comic['series']}}</div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="btn btn-primary">load more</div>
    </div>
</main>

@endsection