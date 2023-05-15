<div class="mt-3">
    <h2>{{__('Контактныя информация')}}</h2>
  </div>
<div class="mt-3">
    <label class="form-check-label" for="name">{{__('Имя')}}</label>
    <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" placeholder="Введите ваше имя"/>
  </div>
  <div class="mt-3">
    <label class="form-check-label" for="last_name">{{__('Фамилия')}}</label>
    <input type="text" class="form-control" name="last_name" value="{{Auth::user()->last_name}}" placeholder="Введите вашу фамилию"/>
  </div>
  <div class="row">
    <div class="col mt-3">
      <label for="inputEmail4" class="form-check-label">{{__('Email')}}</label>
      <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
    </div>
    <div class="col mt-3">
        <label for="inputEmail4" class="form-check-label">{{__('Телефон')}}</label>
        <input type="number" class="form-control" id="phone" name="phone" value="{{Auth::user()->phone}}">
    </div>
  </div>