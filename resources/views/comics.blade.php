@extends('layout.app')

@section('main-content')
  
<div class="comics">

  <div class="row container g-4">
    @foreach($comics as $comic)
    
    <div class="col-2">
      <div>
        <img src="{{ $comic['thumb'] }}" alt="thumbnail">
        <h6 class='text-white mt-2'>{{ $comic['series'] }}</h6>
      </div>
    </div>
    
    @endforeach
  </div>
</div>
@endsection
