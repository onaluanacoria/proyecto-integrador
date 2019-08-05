<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('index');
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function fqaa(){
        return view('faqs');
    }

    public function categorias(){
        return view('categories');
    }

}
