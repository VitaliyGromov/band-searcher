@props(
  [
    'id' => $id,
    'modalName' => $modalName,
    'title' => $title
  ]
)


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$id}}">
  {{$modalName}}
</button>

<div class="modal fade bd-example-modal-lg" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">{{$title}}</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ $slot }}
      </div>
    </div>
  </div>
</div>