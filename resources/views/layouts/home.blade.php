<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="/Aset/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/Aset/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
    <style>
        hr{
            margin-top: 0px;
            width: 100%;
            background-color: #d4d4d4;
            border: 1px solid #d4d4d4;
        }

        body{
            font-weight: bold;
            font-family: roboto;
            color: #1b1a23;
        }

        form{
            width: 90%;
        }

        input{
            font-weight: bold;
        }

        .nav{
            bottom: 0;
            left: 0;
            margin: none;
            background-color: white;
            position : fixed;
            height: 50px;
            width: 100%;
            text-align: center;
        }

        .ikon{
            font-size: 25px;
        }

        .tui{
            font-weight: bold;
            font-size: 12px;
            text-align: center;
            line-height: 10px;
        }

        .nav .d-flex a{
            text-decoration: none;
            color: #333;
            text-align: center;
            padding-right: 58px;
        }

        .nav .d-flex a.active{
            color: dodgerblue;
        }

        .icon-side{
            padding-top: 3px;
            width: 45px;
            height: 45px;
            background-color: dodgerblue;
            border-top-right-radius: 100%;
            border-bottom-right-radius: 100%;
            border: 0px;
            color: white;
        }

        .btn-custom.search{
            display: none;
        }

        .btn-filter{
            width: 100%;
            background-color: white;
            color: #1b1a23;
            text-align: center;
            border: 1px solid #1b1a23;
            font-size: 15px;
            padding-top: 8px;
            height: 40px;
            border-radius: 10px;
            transition: .3s;
        }

        .content{
            margin-top: 4%;
            padding: 4%;
            width: 100%;
            padding-bottom: 0px;
        }

        .title{
            text-align: center;
            font-size: 18px;   
            margin-right: 5%;
            width: 50%;
            height: 30%;
        }

        .content .d-flex img{
            width: 30%;
            object-fit: cover;
            margin-right: 5%;
            border-radius: 5px;
        }

        .content .d-flex i{
            color: #d9dddc;
            font-size: 30px;
        }

        .perusahaan{
            font-size: 13px;
            text-align: center;
        }

        select option{
            font-family: roboto;
            font-weight: bold;
        }

        .btn-reset{
            font-family: roboto;
            font-weight: bold;
            color: firebrick;
            width: 45%;
            background-color: white;
            border: 1px solid firebrick;
        }
    </style>
</head>
<body>
    <div class="preloader">
        <div class="loading">
        <div class="bouncing-ball">   
        </div>
            <p>Harap Tunggu..</p>
        </div>
    </div>
    
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <div class="nav">
        <div class="d-flex justify-content-around pt-3 p-2 w-100">
            <a href="#" class="active">
                <i class="fas fa-home ikon"></i>
                <p class="tui">Home</p>
            </a>
            <a href="#">
                <i class="fas fa-briefcase ikon"></i>
                <p class="tui">Portofolio</p>
            </a>
            <a href="#">
                <i class="far fa-clipboard ikon"></i>
                <p class="tui">Tugas</p>
            </a>
            <a href="#">
                <i class="fas fa-user-circle ikon"></i>
                <p class="tui">Akun</p>
            </a>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".nav .d-flex a").hover(function(){
                $(this).css("color", "dodgerblue");
                $(".nav .d-flex a.active").css("color", "dodgerblue");
            }, 
            function(){
                $(this).css("color", "#333");
            })
        })
        
        var height = $('.content .d-flex img').width();
        $('.content .d-flex img').css({'height': height+'px'});
    </script>
</body>
</html>