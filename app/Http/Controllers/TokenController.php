<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    protected $passportUrl;

    public function __construct()
    {
        $this->passportUrl = config('services.passport.url');
    }

    public function generate()
    {
        $response = Http::asForm()->post("{$this->passportUrl}/oauth/token", [
            'grant_type' => 'client_credentials',
            'client_id' => config('services.passport.client_id'),
            'client_secret' => config('services.passport.client_secret'),
            'scope' => config('services.passport.scope'),
        ]);

        return $response->json()['access_token'];
    }
}
