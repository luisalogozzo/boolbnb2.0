@extends('layouts.layout01')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        @dd($apartment)
        <form class="mt-5 mb-5" action="{{route('upr.apartment.update'), $apartment}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="form-group">
            <label for="title">TITOLO</label>
            <input class="form-control" type="text" name="title" value="{{$apartment->title}}">
          </div>
          <div class="form-group">
            <label for="description">DESCRIZIONE</label>
            <textarea class="form-control" name="description" rows="8" cols="80">{{$apartment->description}}</textarea>
          </div>
          <div class="form-group">
            <label for="address">INDIRIZZO</label>
            <input id="address" class="form-control" type="text" name="address" value="{{$apartment->address}}">
            <div class="dropdown">
              <ul id="dropdown-address" class="dropdown-menu" aria-labelledby="dropdownMenuLink">

              </ul>
            </div>
          </div>
          <input id="address-latitude" type="hidden" name="latitude" value="{{$apartment->latitude}}">
          <input id="address-longitude" type="hidden" name="longitude" value="{{$apartment->longitude}}">
          <div class="form-group">
            <label for="n_rooms">NUMERO DI STANZE</label>
            <input class="form-control" type="number" name="n_rooms" value="{{$apartment->n_rooms}}">
          </div>
          <div class="form-group">
            <label for="n_baths">NUMERO DI BAGNI</label>
            <input class="form-control" type="number" name="n_baths" value="{{$apartment->n_baths}}">
          </div>
          <div class="form-group">
            <label for="sq_meters">MQ</label>
            <input class="form-control" type="number" name="sq_meters" value="{{$apartment->sq_meters}}">
          </div>
          <div class="form-group">
            <label for="price">PREZZO A NOTTE</label>
            <input class="form-control" type="number" name="price" value="{{$apartment->price}}">
          </div>

          <div class="form-group">
            @foreach ($services as $service)
              <label for="">{{$service->name}}</label>
              <input type="checkbox" name="services[]" value="{{$service->id}}" {{($apartment->services()->find($service->id)) ? checked : ''}} >

            @endforeach

          </div>

          <div class="form-group">
            <label for="active">ATTIVO</label>
            <input type="radio" name="active" value="1">
          </div>
          <div class="form-group">
            <label for="cover_img">CARICA IMMAGINE</label>
            <input type="file" name="cover_img" value="" accept="image/*">
          </div>

          <button class="form-control btn-primary" type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
  </div>



  <script id="dropdown-template" type="text/x-handlebars-template">
    <li data-lon="@{{longitude}}" data-lat="@{{latitude}}" class="dropdown-item">@{{result}}</li>
  </script>
@endsection
