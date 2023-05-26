@if ($ad->type == true)
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{__('Объявление от музыканта')}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{__('Жанр')}}</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">{{__('Перейти к объявлению')}}</a>
    </div>
  </div>
@else
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{__('Объявление от группы')}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"></li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">{{__('Перейти к объявлению')}}</a>
    </div>
  </div>
@endif
