<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;
use App\User;
use Auth;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    { 
    if (Laratrust::hasRole('superadmin')) return $this->superDashboard(); 
    if (Laratrust::hasRole('admin')) return $this->adminDashboard(); 
    return view('home'); 
    }

    protected function superDashboard() 
    { 
        Alert::message(Auth::user()->name,'Selamat Datang Kembali');
        return view('dashboard.super');
    }
    protected function adminDashboard()
    { 
        Alert::message(Auth::user()->name,'Selamat Datang Kembali');
        return view('dashboard.admin'); 
    }
}
