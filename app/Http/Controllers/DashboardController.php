<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Donor;
use App\Models\BloodInventory;

class DashboardController extends Controller
{
    // Donor Dashboard
    public function donor()
    {
        // Pwede mo ring i-customize na specific donor lang ang ipakita
        $donor = Auth::user(); // assuming si donor ay naka-login user

        return view('donor.dashboard', compact('donor'));
    }

    // Healthcare Worker Dashboard
    public function healthcare()
    {
        // Kunin lahat ng data
        $donors = Donor::all();
        $inventory = BloodInventory::all();

        return view('healthcare.dashboard', compact('donors', 'inventory'));
    }
}
