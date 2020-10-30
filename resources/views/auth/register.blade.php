@extends('layouts.authTemp')

@section('content')
<div class="main-wrapper">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 pr-m   d-0">
                                <div class="auth-left-wrapper">

                                </div>
                            </div>
                            <div class="col-md-8 pl-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="{{ url('/') }}" class="noble-ui-logo d-block mb-2">{{ config('app.name', 'Laravel') }}</a>
                                    <h5 class="text-muted font-weight-normal mb-4">Create a free account.</h5>
                                    <form class="forms-sample" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">{{ __('Name') }}</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" autocomplete="name" placeholder="Name" value="{{ old('name') }}">
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="form-group">
                                            <label for="email">{{ __('E-Mail Address') }}</label>
                                            <input type="email" class="form-control @error('password') is-invalid @enderror" name="email" id="email" placeholder="email" value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="form-group">
                                            <label for="password">{{ __('Password') }}</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password" placeholder="Password">
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="form-group">
                                            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                        </div>

                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary text-white mr-2 mb-2 mb-md-0">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                        <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Already a user? Sign in</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
