@extends('layouts.master')
 
@section('content')
 
    <div class="card" style="width: 270px;margin: 5px">
        <img class="card-img-top" src="/{{ $mazao->title }}.png" alt="Card image cap">
        <div class="card-block">
            <h3 class="card-title">{{ $mazao->title }}</h3>
            <p class="card-text">{{ $mazao->price }} is published by {{ $description->publisher }}</p>
            <a href="/games" class="btn btn-primary">List Games</a>
        </div>
    </div>
 
@endsection