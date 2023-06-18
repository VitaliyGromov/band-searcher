<!-- Footer -->
<footer class="py-3 border-top text-center text-lg-start text-muted mt-5">
    
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>{{ config('app.name') }}
            </h6>
            <p>
              {{__('Тут какой-то тестовый текст')}}
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              {{__('Полезные ссылки')}}
            </h6>
            <p>
              <a href="#!" class="text-reset">{{__('Правила сообщества')}}</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <p><i class="fas fa-home me-3"></i>{{__('Чувашская Республика, Чебоксары')}}</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              {{__('gromov.vitaliy03@gmail.com')}}
            </p>
            <p><i class="fas fa-phone me-3"></i>89373743794</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © {{date('Y')}} Copyright:
      <a class="text-reset fw-bold" href="{{config('app.url')}}">{{config('app.name')}}</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->