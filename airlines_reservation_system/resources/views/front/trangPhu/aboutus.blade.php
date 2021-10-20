@extends('front.layout.master')

@section('title', 'Về chúng tôi')

@section('body')
<div class="main_layout">
  <div class="vmb-homepage">
    <div class="vmb-page-about">
      <div class="d-flex justify-content-center flex-column align-items-center container pt-5 pb-5">
        <div class="pt-0 pt-md-9 pb-5">
          <img src="{{asset('front/img/trangchu/About.png')}}" class="img-fluid" alt="Về Chúng tôi" title="Về Chúng tôi">
        </div>
        <div class="pt-5">
          <div class="container">
            <div class="d-flex justify-content-center text-center mb-4">
              <h1 class="about-title">Về Chúng tôi</h1>
            </div>
            <div class="row">
              <div class="col-md-2 col-sm-12">
              </div>
              <div class="col-md-8 col-sm-12 text-center about-body">
                <p>Vemaybay.vn is a leading Southeast Asia online travel company that provides a wide range of travel needs in one
                  platform, enabling customers to create moments together with their loved ones. Vemaybay.vn offers flights, hotels,
                  trains*, flight + hotel packages*, attractions &amp; activities*, connectivity products*, airport transports*, and buses*.
                  <br><br>The company has established partnerships with more than 100 domestic and international airlines, serving more
                  than 200,000 routes worldwide. It also has the largest direct accommodation inventory, varying from hotels,
                  apartments, guest houses, homestays, to villas and resorts. Vemaybay.vn provides more than 40 payment options for
                  customers in Indonesia, Thailand, Vietnam, Malaysia, Singapore and the Philippines, with 24/7 assistance from local
                  customer service in their native languages.
                </p>
              </div>
              <div class="col-md-2 col-sm-12">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
