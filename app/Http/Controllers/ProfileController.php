<?php

namespace Laracoin\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class ProfileController extends Controller
{
    public function getProfile()
    {
        return view('profile');
    }
}
