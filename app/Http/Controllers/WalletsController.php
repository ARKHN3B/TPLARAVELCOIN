<?php

namespace Laracoin\Http\Controllers;

use Illuminate\Http\Request;

class WalletsController extends Controller
{
    public function getWallets()
    {
        return view('wallets/wallets');
    }
}
