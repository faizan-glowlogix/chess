<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use App\Events\WebSocketDemoEvent;

class DashboardController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        broadcast(new WebSocketDemoEvent('Message data'));
        return view('welcome');
    }
}
