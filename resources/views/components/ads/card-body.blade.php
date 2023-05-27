@props(['cardHeader' => $cardHeader])

<div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">{{$cardHeader}}</h5>
    </div>

        {{$slot}}

    <div class="card-body">
      <a href="{{route('ads.show', $ad->id)}}" class="card-link">{{__('Перейти к объявлению')}}</a>
    </div>
  </div>