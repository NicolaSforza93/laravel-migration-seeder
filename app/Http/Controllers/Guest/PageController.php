<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('orario_di_partenza', '>', now())
            ->orderBy('orario_di_partenza', 'asc')
            ->get();
        // dd($trains);
        return view('index', compact('trains'));
    }
}
