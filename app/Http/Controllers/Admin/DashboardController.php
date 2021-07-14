<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use App\TravelPackage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'pages.admin.dashboard',
            [
                'pending' => Transaction::where('transaction_status', 'PENDING')->count(),
                'success' => Transaction::where('transaction_status', 'SUCCESS')->count(),
                'travel' =>  TravelPackage::count(),
                'transaction' => Transaction::count(),
            ]
        );
    }
}
