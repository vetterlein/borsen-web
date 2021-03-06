@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">   
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/breakingNews.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="/assets/kvikNews.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="/assets/coronaNews.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>
</div>
</div>


    <div class="container">
        <div class="row justify-content-evenly">
            <div class="card col-11 col-md-3">
                <img src="/assets/breakingNews.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">F??rste artikel</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
 
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>

            <div class="card col-11 col-md-3 ">
                <img src="/assets/breakingNews.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Anden Artikel</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
 
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>

            <div class="card col-11 col-md-3">
                <img src="/assets/breakingNews.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tredje Artikel</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
 
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-evenly">

            <div class="card col-sm-11 col-md-3">
                <img src="/assets/breakingNews.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fjerde Artikel</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
 
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>

            <div class="card col-sm-11 col-md-3">
                <img src="/assets/breakingNews.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Femte Artikel</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
 
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>

            <div class="card col-sm-11 col-md-3">
                <img src="/assets/breakingNews.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sjette Artikel</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
 
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
        </div>
    </div>

@endsection
