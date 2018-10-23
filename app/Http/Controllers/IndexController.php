<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('getLogin');
        $this->middleware('auth')->only('getProfile');
    }

    public function index()
    {
        return view('index.index');
    }

    public function getJourney()
    {
        //
    }

    public function getConstitution()
    {
        //
    }

    public function getFaq()
    {
        //
    }

    public function getAdhoc()
    {
        //
    }

    public function getNews()
    {
        //
    }

    public function getEvents()
    {
        //
    }

    public function getGallery()
    {
        //
    }

    public function getMembers()
    {
        //
    }

    public function getContact()
    {
        //
    }

    public function getApplication()
    {
        return view('index.application');
    }

    public function getLogin()
    {
        return view('index.login');
    }

    public function getProfile($id)
    {
        $user = User::find($id);
        return view('index.profile')->withUser($user);
    }
}
