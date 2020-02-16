<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function indexAction()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', env('API_HOST'));
        $tasks = \json_decode($response->getBody()->__toString());

        return view('tasks')->with(['tasks' => $tasks]);
    }
}
