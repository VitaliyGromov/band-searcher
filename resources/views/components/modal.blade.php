@props(
[
  'id' => $id,
  'modalName' => $modalName
]
)


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$id}}">
  {{$modalName}}
</button>

<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Редактировать объявление') }}</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ $slot }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Закрыть') }}</button>
        <button type="button" class="btn btn-primary">{{ __('Сохранить') }}</button>
      </div>
    </div>
  </div>
</div>