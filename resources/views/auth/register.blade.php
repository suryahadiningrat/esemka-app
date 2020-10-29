<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="/Aset/style.css">
    <link rel="stylesheet" href="/Aset/responsive.css">
    <link rel="stylesheet" href="/Aset/style-box.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/Aset/script.js"></script>
    
    
    <title>Esemka</title>
    
    <style>
    </style>
  </head>
  
  <body id="body">
    
    <div class="preloader">
      <div class="loading">
        <div class="bouncing-ball"></div>
        <p>Harap Tunggu..</p>
      </div>
    </div>

    <div class="login-body container h-100">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-sm-6 login-left">
          <div class="ml-4 mt-3"> <a class="logo bold" href="/">esemka</a> </div>
          <img src="/Aset/login-art.svg">
        </div>
        <div class="col-12 col-sm-6 login-right" id="contents">
          <form class="form-custom" id="reg-content" method="POST" action="{{ route('register') }}">
            @csrf
            <h3 class="bold mb-3 text-center"> Daftar Akun Baru </h3>

            <div class="form-group mb-3">
              <label for="nama">Nama Lengkap</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="nama" placeholder=" Nama Lengkap Anda" value="{{ old('name') }}" required autofocus>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>

            <div class="form-group mb-3">
              <label for="email">E-mail</label>
                <input name="email" type="email"  input-mode="email" autocomplete="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder=" E-Mail" required autofocus>
                @error('email')

                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
                
            <div class="form-group mb-3">
              <label for="password" class="text-left">Password</label>
                <div class="d-flex">
                  <input name="password" type="password" autocomplete="new-password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder=" Password" onkeyup="validatePassword()" required>

                  <div class="password-hidden" id="passwordHidden" onclick="passwordToogle()">
                    <i class="fas fa-eye-slash" id="icon"></i>
                  </div>    
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>

            <div class="form-group mb-0">
              <label for="password" class="text-left">Password</label>
                <div class="d-flex">
                  <input name="password_confirmation" type="password" class="form-control" id="passwordKonf" placeholder=" Konfirmasi Password Anda" onkeyup="validatePassword()" required>
                  <div class="password-hidden" id="passwordHidden" onclick="passwordToogle()">
                    <i class="fas fa-eye-slash" id="icon"></i>
                  </div>
                </div>
            </div>
                
  {{--             <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                    <label class="form-check-label" for="remember">
                      {{ __('Ingat Saya') }}
                    </label>
                  </div>
                </div>
              </div> --}}
                
              <div class="text-center">
                @if (Route::has('password.request'))
                  <a class="btn btn-link m-2 bold" href="{{ route('password.request') }}">
                    {{ __('Lupa Password ?') }}
                  </a>
                @endif
                <br>
                <button type="submit" class="text-center btn btn-custom">Daftar</button>
                <p class="content-caption m-3">Atau</p>
            
                <div class="text-center">
                  <a href="{{ url('/auth/google') }}">
                    <button class="api google" type="button">
                      <i class="fab fa-google"></i> Daftar Dengan Google 
                    </button>
                  </a>
                      
                  <a href="{{ url('auth/facebook') }}"> 
                    <button class="api facebook" type="button">
                      <i class="fab fa-facebook"></i> Daftar Dengan Facebook
                    </button>
                  </a>
                  
                  <a class="btn btn-link bold" href="{{ url('/login') }}">
                    {{ __('Sudah punya akun?') }}
                  </a>

                </div>
              </div>
            </form> 
          </div>     
        </div>
      </div>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  </body>
</html>