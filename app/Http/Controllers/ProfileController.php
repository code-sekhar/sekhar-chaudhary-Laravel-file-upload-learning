<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables and assign the values
        $name = "Donal Trump";
        $age = "75";

        // Add variables to $data as an associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Set cookie variables
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        // Create the cookie
        $cookie = cookie($cookieName, $cookieValue, $cookieMinutes, $cookiePath, $cookieDomain, $cookieSecure, $cookieHttpOnly);

        // Return response with data and cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
