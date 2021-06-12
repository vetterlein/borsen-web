@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/articleAssets/businessNews.png" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    @foreach($data as $item)    
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-12">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/articleAssets/internationalNews.png" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-12">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/articleAssets/publicNews.png" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-12">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/articleAssets/schoolNews.png" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-12">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/articleAssets/stockNews.png" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-12">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/articleAssets/techNews.png" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
