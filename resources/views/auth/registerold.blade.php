<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="/Aset/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/Aset/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    
    
    <title>Esemka | Daftar</title>
    
    <style>
        .download-fixed{
            top: 0;
        }
        .jarak{
            margin-top: 20%;
        }
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
              Daftar Akun Baru
          </p>
          
          <form class="form-custom" method="POST" action="{{ route('register') }}" >
              @csrf
              <div class="form-group">
                  <label for="nama">Nama Lengkap Anda</label>
                  <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="nama" placeholder=" Nama Lengkap Anda" value="{{ old('name') }}" required autofocus>
              
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
              
              <div class="form-group">
                  <label for="email">E-mail</label>
                  <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder=" E-Mail Anda Yang Aktif" onkeyup="validatePassword()" value="{{ old('email') }}" required autofocus>
                  
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
              
              <div class="form-group">
                  <label for="password">Password</label>
                  <div class="d-flex">
                      <input name="password" type="password" class="form-control @error('email') is-invalid @enderror" id="password" placeholder=" Password Anda" onkeyup="validatePassword()" required autofocus>
                      <div class="password-hidden" id="passwordHidden" onclick="passwordToogle()">
                          <i class="fas fa-eye-slash" id="icon"></i>
                      </div>
                  </div>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
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
              
              <button type="submit" id="submit" class="btn btn-custom">Daftar</button>
          </form>
          
          <p class="content-caption align-center mt-4">Atau Daftar Dengan</p>
          
          <div class="d-flex justify-content-around mb-5">
              <a href="{{ url('/auth/google') }}" class="api google">
                  <i class="fab fa-google"></i>
                  <p>Google</p>
              </a>
              
              <a href="{{ url('/auth/facebook') }}" class="api facebook">
                  <i class="fab fa-facebook"></i>
                  <p>Facebook</p>
              </a>
          </div>
          
      </div>
      
      <div class="belum-punya-akun">
          <p>Sudah Punya Akun Login
              <a href="/login">Disini</a>
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