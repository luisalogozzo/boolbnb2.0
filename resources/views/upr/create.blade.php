@extends('layouts.layout01')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form class="mt-5 mb-5" action="{{route('upr.apartment.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="title">TITOLO</label>
            <input class="form-control" type="text" name="title" value="">
          </div>
          <div class="form-group">
            <label for="description">DESCRIZIONE</label>
            <textarea class="form-control" name="description" rows="8" cols="80"></textarea>
          </div>
          <div class="form-group">
            <label for="address">INDIRIZZO</label>
            <input class="form-control" type="text" name="address" value="">
          </div>
          <input type="hidden" name="latitude" value="">
          <input type="hidden" name="longitude" value="">
          <div class="form-group">
            <label for="n_rooms">NUMERO DI STANZE</label>
            <input class="form-control" type="number" name="n_rooms" value="">
          </div>
          <div class="form-group">
            <label for="n_baths">NUMERO DI BAGNI</label>
            <input class="form-control" type="number" name="n_baths" value="">
          </div>
          <div class="form-group">
            <label for="sq_meters">MQ</label>
            <input class="form-control" type="number" name="sq_meters" value="">
          </div>
          <div class="form-group">
            <label for="price">PREZZO A NOTTE</label>
            <input class="form-control" type="number" name="price" value="">
          </div>

          <div class="form-group">
            @foreach ($services as $service)
              <label for="">{{$service->name}}</label>
              <input type="checkbox" name="services[]" value="{{$service->id}}">
            @endforeach
          </div>

          <div class="form-group">
            <label for="active">ATTIVO</label>
            <input type="radio" name="active" value="true">
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
@endsection
