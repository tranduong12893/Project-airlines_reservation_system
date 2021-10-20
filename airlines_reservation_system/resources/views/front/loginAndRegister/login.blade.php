@extends('front.layout.master')

@section('title', 'Đăng nhập')

@section('body')
<div class="main_layout">
  <div class="vmb-homepage">
    <div class="container py-5">
      <div style="min-height:75vh" class="row justify-content-center align-items-center">
        <div class="col-md-4 text-center">
          <img src="{{asset('front/img/dangky/register.png')}}" alt="">
          <div class="my-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at odio id odio gravida pellentesque.
            Curabitur quis augue quis lorem tincidunt vestibulum sit amet massa.</div>
        </div>
        <div class="col-md-6 offset-md-2">
          <div style="min-height:75vh" class="d-flex align-items-center justify-content-center">
            <form method="post" class="vmb-form-style flex-fill" action="{{url('/login')}}">
                @csrf
              <div class="customer-form-login-title mb-3">Chào mừng đến vemaybay.vn</div>
              <span class="field-validation-valid message-error text-danger my-4 d-block" data-valmsg-for="LoginError" data-valmsg-replace="true"></span>
              <div class="form-group">
                <label for="LoginEmail">Email</label>
                <input type="text" class="form-control" id="LoginEmail" name="email">
                  @error('email')
                    <div class="text-danger">

                        Vui lòng nhập email
                    </div>
                  @enderror
                <span class="text-danger field-validation-valid" data-valmsg-for="LoginEmail" data-valmsg-replace="true"></span>
              </div>
              <div class="form-group">
                <label for="LoginPassword">Mật khẩu</label>
                <input type="password" class="form-control" id="LoginPassword" name="password">
                  @error('password')
                  <div class="text-danger">
                      Vui lòng nhập mật khẩu
                  </div>
                  @enderror
                <span class="text-danger field-validation-valid" data-valmsg-for="LoginPassword" data-valmsg-replace="true"></span>
              </div>
              <div class="form-group mt-4">
                <div class="icheck-material-orange setting-field is-round-trip subscribe-email">
                  <input type="checkbox" checked="" data-val="true" data-val-required="The Ghi nhớ field is required." id="LoginIsPersistent" name="LoginIsPersistent" value="true">
                  <label for="LoginIsPersistent">Ghi nhớ</label>
                </div>
              </div>
              <button type="submit" class="btn btn-block btn-vmb register-button btn-warning my-3">Đăng nhập</button>
              <div class="d-flex justify-content-between align-items-center">
                <a class="login-link" href="{{url('/register')}}">
                  <i class="fas fa-long-arrow-alt-right"></i>
                  <span>Đăng kí</span>
                </a>
              </div>
              <input name="__RequestVerificationToken" type="hidden" value="CfDJ8OH2JUT0HAdBiq9EX4hpQLdMs6W1H5Hv1B5BycxgJod__S8Phi3Q4ILL_HVgrXgsSX-FThBV3fRRx69cMQgnff7jwZPoYDrshm9ulRCgkZ7ojo9-18Z_VPon5X-rMDe6hrUDFt4gqXLmlrgMn-O16AQ">
              <input name="LoginIsPersistent" type="hidden" value="false">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
