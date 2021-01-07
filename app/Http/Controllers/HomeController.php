<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

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

    public function subscribe(Request $request)
    {
        $email = $request->email;
        
        $data = Subscriber::create([
            'email' => $email
        ]);

        if($data){
            return [
                'status' => '201',
                'message' => 'success',
            ];
        }else{
            return [
                'status' => '403',
                'message' => 'forbidden',
            ];
        }
    }
}
