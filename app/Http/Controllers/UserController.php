<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UserMail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
         /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        Mail::to('alsuhaibiabdulrahman@gmail.com')->send(new UserMail());

        return true;
    }

}
