<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HighchartController extends Controller
{
    public function handlechart()
    {
        $userdata = User::select(DB::raw("COUNT(*) AS usercount"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("MONTH(created_at)"))
            ->pluck('usercount');
        return view('users.chart', compact('userdata'));
    }
}

