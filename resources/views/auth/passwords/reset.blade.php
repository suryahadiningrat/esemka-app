@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                    
                    <p class="content-header">
                        Reset Password
                    </p>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Anda') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required placeholder=" E-Mail Anda" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="password">Password</label>
                        <div class="d-flex">
                        <input name="password" type="password" class="form-control" id="password" placeholder=" Password Anda" onkeyup="validatePassword()" required>
                        <div class="password-hidden" id="passwordHidden" onclick="passwordToogle()">
                        <i class="fas fa-eye-slash" id="icon"></i>
                        </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="password">Konfirmasi Password</label>
                        <div class="d-flex">
                        <input name="password_confirmation" type="password" class="form-control" id="passwordKonf" placeholder=" Konfirmasi Password Anda" onkeyup="validatePassword()" required>
                        <div class="password-hidden" id="passwordHiddenKonf" onclick="passwordKonfToogle()">
                        <i class="fas fa-eye-slash" id="iconKonf"></i>
                        </div>
                        </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-custom">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
    </div>
    </div>
@endsection