@extends('layouts.home')

@section('content')

    
    <div class="container">
    
        <div class="header">
            <form class="form-custom justify-content-center w-100" method="GET" action="#search">
                <div class="form-group">
                    <div class="d-flex">
                        <input name="search" type="text" class="form-control" value="{{ old('search') }}" id="search" placeholder=" Cari Pekerjaan" />                    
                        <input type="submit" class="icon-side fas" value="&#xf002;" />
                    </div>
                </div>  
            </form>
            
            <button type="button" class="btn-filter" data-toggle="modal" data-target="#filter">
                <p class="fas">&#xf036; &nbsp; Filter</p>
            </button>
        </div>
        
        <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="filterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="content-header" id="Title">Filter</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    
                        <form class="form-custom justify-content-center w-100" method="GET" action="#filter">
                            <div class="form-group">
                                <label for="gaji">
                                    Gaji
                                </label>
                                
                                <div class="d-flex">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp.</div>
                                    </div>
                                    <input name="gaji" type="number" class="form-control" value="{{ old('gaji') }}" id="gaji" placeholder=" 1000000" />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Berdasarkan Waktu</label>
                                
                                <div class="d-flex justify-content-around">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="waktu" value="parttime">Part Time
                                    </label>
                                </div>
                                
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="waktu" value="fulltime">Full Time
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="lokasi">
                                    Lokasi
                                </label>
                            
                                <select id="lokasi" class="form-control" name="lokasi">
                                    <option value="" selected>Pilih Lokasi</option>
                                    <option value="surakarta">Surakarta</option>
                                </select>
                            </div>
                            
                            <div class="d-flex justify-content-around">
                                <button class="btn btn-reset" onclick="reset()">Reset</button>
                                <input type="submit" class="btn btn-custom" style="width: 45%; border-radius: 0;" value="Terapkan" />
                            </div>


                        </form>
                    </div>
               </div>
            </div>
        </div>
        
        <div class="main-content">
            <div class="content">
                <div class="d-flex">
                    <img src="/Aset/gjk.png"></img>
                    <div class="title">
                        <font size="5" style="letter-spacing: 1px;">Web Developer</font>
                        <p class="mt-5">
                            <font size="4" style="letter-spacing: 2px;"><i class="fas fa-money-bill-alt mr-2" style="font-size: 17px; color: #85bb65;"></i>Rp. 3.000.000,00</font>
                        </p>
                    </div>
                    {{-- <a href="#love"><i class="fas fa-heart heart" onclick=""></i></a> --}}
                    <i class="fas fa-heart love" onclick="love(event)"></i>
                </div>
                
                <div class="d-flex w-100 mt-3">
                    <p class="float-left w-100">
                        <i class="far fa-clock mt-1" style="font-size: 17px; padding-right: 5%; color:#1b1a23;"></i> 
                        <font class="mt-1" size="3" color="#1b1a23">Full Time</font>
                    </p>
                    
                    <p class="float-right w-100 text-right">
                        <i class="fas fa-map-marked-alt mt-1" style="font-size: 17px; color: #dd4b3e; padding-left: 5%;">&nbsp;</i>
                        <font size="3" class="mt-1">Bangka Belitung</font>
                    </p>
                </div>
                <p class="perusahaan">
                    <i class="fas fa-building" style="font-size: 17px; color: #1b1a23;"></i>
                    <font size="3" class="mt-1">PT. Aplikasi Karya Anak Bangsa</font>
                </p>
            </div>
            <hr>            

           <div class="content">
                <div class="d-flex">
                    <img src="/Aset/gjk.png"></img>
                    <div class="title">
                        <font size="5" style="letter-spacing: 1px;">Web Developer</font>
                        <p class="mt-5">
                            <font size="4" style="letter-spacing: 2px;"><i class="fas fa-money-bill-alt mr-2" style="font-size: 17px; color: #85bb65;"></i>Rp. 3.000.000,00</font>
                        </p>
                    </div>
                    {{-- <a href="#love"><i class="fas fa-heart heart" onclick=""></i></a> --}}
                    <i class="fas fa-heart love" onclick="love(event)"></i>
                </div>
                
                <div class="d-flex w-100 mt-3">
                    <p class="float-left w-100">
                        <i class="far fa-clock mt-1" style="font-size: 17px; padding-right: 5%; color:#1b1a23;"></i> 
                        <font class="mt-1" size="3" color="#1b1a23">Full Time</font>
                    </p>
                    
                    <p class="float-right w-100 text-right">
                        <i class="fas fa-map-marked-alt mt-1" style="font-size: 17px; color: #dd4b3e; padding-left: 5%;">&nbsp;</i>
                        <font size="3" class="mt-1">Bangka Belitung</font>
                    </p>
                </div>
                <p class="perusahaan">
                    <i class="fas fa-building" style="font-size: 17px; color: #1b1a23;"></i>
                    <font size="3" class="mt-1">PT. Aplikasi Karya Anak Bangsa</font>
                </p>
            </div>
            <hr>

            <div class="content">
                <div class="d-flex">
                    <img src="/Aset/gjk.png"></img>
                    <div class="title">
                        <font size="5" style="letter-spacing: 1px;">Web Developer</font>
                        <p class="mt-5">
                            <font size="4" style="letter-spacing: 2px;"><i class="fas fa-money-bill-alt mr-2" style="font-size: 17px; color: #85bb65;"></i>Rp. 3.000.000,00</font>
                        </p>
                    </div>
                    {{-- <a href="#love"><i class="fas fa-heart heart" onclick=""></i></a> --}}
                    <i class="fas fa-heart love" onclick="love(event)"></i>
                </div>
                
                <div class="d-flex w-100 mt-3">
                    <p class="float-left w-100">
                        <i class="far fa-clock mt-1" style="font-size: 17px; padding-right: 5%; color:#1b1a23;"></i> 
                        <font class="mt-1" size="3" color="#1b1a23">Full Time</font>
                    </p>
                    
                    <p class="float-right w-100 text-right">
                        <i class="fas fa-map-marked-alt mt-1" style="font-size: 17px; color: #dd4b3e; padding-left: 5%;">&nbsp;</i>
                        <font size="3" class="mt-1">Bangka Belitung</font>
                    </p>
                </div>
                <p class="perusahaan">
                    <i class="fas fa-building" style="font-size: 17px; color: #1b1a23;"></i>
                    <font size="3" class="mt-1">PT. Aplikasi Karya Anak Bangsa</font>
                </p>
            </div>
            <hr>

            <form action="{{ route('logout') }}" method="POST">
                    @csrf
                <input type="submit" value="Logout"></input>
            </form>
            <div class="mb-3"></div>
        </div>

    </div>
@endsection