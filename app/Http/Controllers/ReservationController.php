<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function __invoke(){
        return Reservation::all();
    }
}
