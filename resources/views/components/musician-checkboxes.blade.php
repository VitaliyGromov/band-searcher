<div class="mt-3">
  <div class="form-check">
    <x-checkbox name="own_instrument"/>
    <x-label for="own_instrument">{{ __('Есть собственный инструмент') }}</x-label>
  </div>
</div>

<div class="mt-3">
  <div class="form-check">
    <x-label for="ready_to_move">{{ __('Готов к переезду') }}</x-label>
    <x-checkbox name="ready_to_move"/>
  </div>
</div>

<div class="mt-3">
  <div class="form-check">
    <x-label for="ready_to_tour">{{ __('Готов ехать в тур') }}</x-label>
    <x-checkbox name="ready_to_tour"/>
  </div>
</div>