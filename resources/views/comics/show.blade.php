@extends('layout.app')
@section('page-title', 'comic details')


@section('main-content')
<main class="comic-detail">
        <div class="detail-top">
            <div class="container">
                <div class="thumb-container">

                    <img src="{{$comic['thumb']}}" alt="" class="img-fluid">
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
                        <span>{{$comic['price']}}</span>
                    </div>
                    <div>
                        <span>On Sale Date::</span>
                        <span>{{$comic['sale_date']}}</span>
                    </div>
                </div>
            </div>
            </div>
        </div>
</main>
@endsection