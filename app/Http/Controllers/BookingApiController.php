<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingApiController extends Controller
{
    public const API_URL = "beapi.bookingwhizz.com/Connect.svc/xml";
    public const USER_ID = 10019;
    public const PASSWORD = "OI984JF30I";

    public function index(Request $request)
    {

    }
}
