@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                    
                    <p class="content-header">
                        Lupa Password
                    </p>
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder=" E-Mail Yang Telah Terdaftar" required autofocus>
                        
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-custom">
                                    {{ __('Kirim Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
          </div>      
</div>
@endsection