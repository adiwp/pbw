<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Daftar pemain bola
        $players = [
            'Bang Ivar',
            'Bang Jay',
            'Bang Ridho',
            'Om Haye',
            'El Klemer',
        ];

        return view('dashboard', compact('players'));
    }
}
