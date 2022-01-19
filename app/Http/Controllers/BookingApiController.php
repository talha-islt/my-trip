<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookingApiController extends Controller
{
    public const API_URL = "beapi.bookingwhizz.com/Connect.svc/xml/";
    public const USER_ID = 10019;
    public const PASSWORD = "OI984JF30I";
    public const AGENT = "My Travel Guide";
    public const AGENT_ID = 20;

    public function index(Request $request)
    {
        $apiCall = "getaccommodationsearchtest";
        $parameters = [
            'userid' => self::USER_ID,
            'password' => self::PASSWORD,
            'cityname' => 'Islamabad',
        ];
        
        $url = self::API_URL . $apiCall;

        $response = Http::get($url, $parameters);
        $xml = simplexml_load_string($response, 'SimpleXMLElement', LIBXML_NOCDATA);

        dd($xml);


    }
}