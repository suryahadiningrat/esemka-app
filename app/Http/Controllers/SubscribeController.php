<?php

namespace esemka\Http\Controllers;

use Illuminate\Http\Request;
use esemka\Subscribe;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
    	$this->validate($request, [
			'email' => 'required',
		]);

    	$subscribe = new Subscribe;
    	$is_email_exist = $subscribe->where('email',$request->email)->first();

    	if (!empty($is_email_exist)) {
    		return redirect('/')->with('failed','Emailmu '.$request->email.' Sudah Terdaftar , Mohon Tunggu Aplikasi Kami Launching , Terimakasih :D');
    	}

    	$subscribe->email = $request->email;

    	$subscribe->save();

    	return redirect('/')->with('success','Terimakasih '.$request->email.' Sudah Menekan Tombol Subscribe , Akan Segera Kami Informasikan Ketika Launching :D');
    }
}