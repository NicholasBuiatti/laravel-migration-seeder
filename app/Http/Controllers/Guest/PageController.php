<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function getTrain()
    {
        $treni = Train::all();
        $data = [
            "treni" => $treni,
        ];
        return view('trainsPage', $data);
    }
}
