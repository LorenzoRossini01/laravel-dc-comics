@extends('layout.app')
@section('page-title', 'comic details')


@section('main-content')
<main class="comic-detail">
        <div class="detail-top">
            <div class="container">
                <div class="thumb-container">

                    <img src="{{$comic['image']}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="detail-middle">
            <div class="container">

                <div class="row g-3">
                    <div class="col-8">
                        <h2>{{$comic['title']}}</h2>
                        <div>
                            <div class="row">
                                <div class='box-info'>
                                    <div class="col-9">
                                        <span class='price'>u.s. price:{{$comic['price']}}</span>
                                        <span class='availability'>disponibilità</span>
                                    </div>
                                    <div class="col-3">
                                        <span>check Availability</span>
                                        <i class="fa-solid fa-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>{{$comic['description']}}</p>
                    </div>
                    <div class="col-4">
                        <p>advertisment</p>
                        <img src="{{Vite::asset('/resources\images\adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="detail-bottom">
            <div class="container">
            <div class="row flex-nowrap">
                <div class="col">
                    <h3>Talent</h3>
                    <div>
                        <span>Art by:</span>
                        <span>autori</span>
                    </div>
                    <div>
                        <span>Written by:</span>
                        <span>scrittori</span>
                    </div>
                </div>
                <div class="col">
                    <h3>Specs</h3>
                    <div>
                        <span>Series:</span>
                        <span>{{$comic['series']}}</span>
                    </div>
                    <div>
                        <span>U.S. Price:</span>
                        <span>{{$comic->getPrice()}}</span>
                    </div>
                    <div>
                        <span>On Sale Date::</span>
                        <span>{{$comic['sale_date']}}</span>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="dropup">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-gear"></i>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item bg-warning text-white" href="{{route('comics.edit', $comic)}}"><i class="fa-solid fa-pencil"></i></a></li>
                <li><button class="dropdown-item bg-danger text-white" data-bs-toggle="modal" data-bs-target="#deleteComicModal"><i class="fa-solid fa-trash"></i></button></li>
            </ul>
        </div>
</main>
@endsection

<div class="modal fade" id="deleteComicModal" tabindex="-1" aria-labelledby="deleteComicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deleteComicModalLabel">Vuoi eliminare definitivamente questo fumetto?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Dopo aver confermato non potrai più recuperare i dati di: <br>
         <b>{{$comic->title}}</b>
      </div>
      <div class="modal-footer">
        <form action="{{route('comics.destroy',$comic)}}" method="post" class="w-100">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger w-100">Confermare</button>
        </form>
      </div>
    </div>
  </div>
</div>