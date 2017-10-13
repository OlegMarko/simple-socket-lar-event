<?php

namespace App\Http\Controllers;

use App\Events\UserActiveEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function index()
    {
        $user_name = 'User Name';

        // 1. Publish event with redis.
        event(new UserActiveEvent($user_name));

        // 2. Node.js - Redis subscribe to the event. // nodejs/server.js

        return view('welcome');

        // 3. Use socket.io to emit to all clients. // Vue.js component
    }
}
