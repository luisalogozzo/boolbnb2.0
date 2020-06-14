@extends('layouts.layout01')

@section('content')

          <div class="container">
            <div class="row">
              <div class="col-12">
                <img class="img-fluid" src="{{asset($apartment->cover_img)}}" alt="">
                <div class="">
                  <h3 class="">{{$apartment->title}}</h3>
                  <p class="">{{$apartment->description}}</p>
                  <ul> Servizi:
                    @foreach ($apartment->services as $service)
                      <li>{{$service->name}}</li>
                    @endforeach
                  </ul>
                  <div class="row">
                    <div class="col-6">
                      <p class="">Numero di stanze: {{$apartment->n_rooms}}</p>
                      <p class="">Numero di bagni: {{$apartment->n_baths}}</p>
                      <p class="">Mq: {{$apartment->sq_meters}}</p>
                      <p id="show-address" data-lat="{{$apartment->latitude}}" data-lon="{{$apartment->longitude}}">{{$apartment->address}}</p>
                    </div>
                    <div class="col-6">
                      <p class="text-right">Prezzo (a notte): {{$apartment->price}}</p>

                    </div>

                  </div>

                  <div id='map' class='map'>

                  </div>


                </div>
              </div>
            </div>
          </div>


@endsection
