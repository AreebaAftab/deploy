<?php

namespace App\Http\Controllers;

use App\Events\AddNumbersEvent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function calculateSum()
    {
        $a=4;
        $b=2;
        $c=$a+$b;
        User::query()->update(['calculated-sum' => $c]);
        return("value updated");

    }
    public function calculateSumQueue()
    {
        $a=4;
        $b=2;
        $c=$a+$b;
        event(new addNumbersEvent($c));
        return("value updated");

    }

    public function mail()
    {
        Mail::raw("This email is sent to you from test", function ($message){
            $message->from('areebanovember@hotmail.com');
            $message->to('areebanovember@gmail.com')->subject('Hourly Update');
        });
    }
}
