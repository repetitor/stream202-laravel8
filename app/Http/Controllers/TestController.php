<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function queueTest()
    {
        ProcessPodcast::dispatch();
    }
}
