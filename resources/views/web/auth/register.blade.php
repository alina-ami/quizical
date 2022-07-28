@extends('brands._layout.auth')

@section('content')
<div class="page-header min-vh-100">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
        <div class="card bg-white card-plain">
          <div class="card-header pb-0 text-start">
            <h4 class="font-weight-bolder">Sign Up</h4>
          </div>
          <div class="card-body">
            <x-form :action="route('web.auth.do-register')" method="POST">
              <div class="mb-3">
                <x-input name="name" placeholder="Name" aria-label="Name" />
              </div>
              <div class="mb-3">
                <x-email name="email" placeholder="Email" aria-label="Email" />
              </div>
              <div class="mb-3">
                <x-password name="password" placeholder="Password" aria-label="Password" />
              </div>
              <div class="mb-3">
                <x-password name="password_confirmation" placeholder="Confirm Password" aria-label="Confirm Password" />
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                  Sign Up
                </button>
                <a class="btn btn-lg btn-outline-info btn-lg w-100 mt-4 mb-0" href="{{ route('web.auth.google') }}">
                  <i class="fa-brands fa-google mr-3"></i>
                  Register with Google
                </a>
              </div>
            </x-form>
          </div>
        </div>
      </div>
      <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
          <img src="{{ asset('/assets/img/shapes/pattern-lines.svg') }}" alt="pattern-lines" class="position-absolute opacity-4 start-0">
          <div class="position-relative">
            <img class="max-width-500 w-100 position-relative z-index-2" src="{{ asset('/assets/img/illustrations/chat.png') }}" alt="chat-img">
          </div>
          <h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
          <p class="text-white">The more effortless the writing looks, the more effort the writer
            actually put into the process.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
