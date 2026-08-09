<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use App\Models\Account;

class HomeController extends Controller
{
    public function index()
    {
        $diamond = Sponsor::where(
            'package',
            'diamond'
        )->get();

        $accounts = Account::latest()
            ->take(12)
            ->get();

        return view(
            'home',
            compact(
                'diamond',
                'accounts'
            )
        );
    }
}
