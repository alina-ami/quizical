@extends('web._layout.app')

@section('content')
    <div class="container content">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('{{ asset('assets/img/curved-images/curved9.jpeg') }}')">
            <span class="mask bg-gradient-dark opacity-4"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5 px-2">Join the community!</h1>
                        <h4 class="text-lead text-white">
                            Earn rewards for interacting with brands you love!
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
