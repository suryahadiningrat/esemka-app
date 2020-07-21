@extends('layouts.app')

@section('content')
<div class="container w-75">
    <div class="row justify-content-center align-center">                    
                    <p class="content-header">
                        Verifikasi E-mail
                    </p>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link Yang Baru Berhasil Dikirim.') }}
                        </div>
                    @endif

                    {{ __('Sebelum Melanjutkan, Silakan Cek E-mail Anda Untuk Melakukan Verifikasi') }}
                    {{ __('Jika Kamu Belum Mendapatkan E-mail Dari Kami') }} <a class="mt-2" href="{{ route('verification.resend') }}">{{ __('Siakan Klik Disini Untuk Mengirim Ulang Link') }}</a>.
    </div>
</div>
@endsection