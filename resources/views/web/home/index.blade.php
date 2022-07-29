@extends('web._layout.app')

@section('content')
    <div class="container content">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('{{ asset('assets/img/curved-images/curved9.jpg') }}')">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                        <p class="text-lead text-white">
                            Use these awesome forms to login or create new account in your
                            project for free.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
