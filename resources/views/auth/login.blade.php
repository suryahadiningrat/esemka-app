<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="/Aset/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/Aset/script.js"></script>
    
    
    <title>Esemka | login</title>
    
    <style>
    </style>
  </head>
  
  <body id="body" style="font-weight: bold;">
    <div class="preloader">
        <div class="loading">
            <div class="bouncing-ball">   
            </div>
            <p>Harap Tunggu..</p>
        </div>
    </div>
    
      <div class="container jarak justify-content-center">
          <p class="content-header">
              Login Ke Esemka
          </p>
          
          <form class="form-custom" method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group">
                  <label for="email">E-mail</label>
                  <input name="email" type="email"  input-mode="email" autocomplete="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder=" E-Mail Yang Telah Terdaftar" required autofocus>
                  
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
              
              <div class="form-group">
                  <label for="password">Password</label>
                  <div class="d-flex">
                      <input name="password" type="password" autocomplete="new-password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder=" Password Anda" required>
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
              
              <div class="form-group row">
              <div class="col-md-6 offset-md-4">
              <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              
              <label class="form-check-label" for="remember">
              {{ __('Ingat Saya') }}
              </label>
              </div>
              </div>
              </div>
              
              @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Lupa Password Anda Klik Disini') }}
              </a>
              @endif
              
              <button type="submit" class="btn btn-custom">Login</button>
          </form>
          
          <p class="content-caption align-center mt-4">Atau Login Dengan</p>
          
          <div class="d-flex justify-content-around">
              <a href="{{ url('/auth/google') }}" class="api google">
                  <i class="fab fa-google"></i>
                  <p>Google</p>
              </a>
              
              <a href="{{ url('auth/facebook') }}" class="api facebook">
                  <i class="fab fa-facebook"></i>
                  <p>Facebook</p>
              </a>
          </div>
          
      </div>
      
      <div class="belum-punya-akun">
          <p>Belum Punya Akun Daftar 
              <a href="/register">Disini</a>
          </p>
      </div>
      
      
      <div class="download-fixed">
          <p>
              Download Aplikasi Esemka 
              <font onclick="download()">Disini</font>
          </p>
      </div>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
  </body>
  
</html>