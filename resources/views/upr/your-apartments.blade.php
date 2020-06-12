@extends('layouts.layout01')

@section('content')
  <div class="container-fluid">
    <div class="row justify-content-center">

      <div class="col-8  d-flex flex-wrap justify-content-between">
        @foreach ($apartments as $apartment)
          <a href="{{route('upr.apartment.show', $apartment)}}">
            <div class="card mb-5" style="width: 18rem;">
              <img class="card-img-top" src="{{asset($apartment->cover_img)}}" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title">{{$apartment->title}}</h3>
                <p class="card-text">{{$apartment->description}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
@endsection
